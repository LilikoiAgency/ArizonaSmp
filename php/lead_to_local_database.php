<?php
/**
 * WHENEVER A LEAD IS SUBMITTED THROUGH A CONTACT FORM,
 * THIS SCRIPT ENSURES THAT THE FORM DATA IS STORED
 * ON BOTH THE PRODUCTION AND THE STAGING 
 * INSTALLATIONS. 
 * 
 * THIS IS TO ENSURE THAT NO LEAD IS LOST WHEN 
 * THE STAGING SITE IS PUSHED TO THE PRODUCTION
 * SITE. --d|22y (20221012)
 */
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: *');

require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-config.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/wp-admin/includes/upgrade.php');

function error_response($err)
{
    return <<<ERROR
    <!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Error page.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>You didn't say the magic word.</title>
    </head>
    <html>
        <body>
            <div><pre><code><span style="color:red">ERROR</span>: $err.</code></pre></div>
        </body>
    </html>
ERROR;
}

$serialized_form = '';

/**
 * TO ACCOMODATE DATA COMING FROM lead-submission-handler.php
 */
$form_data_to_save;
global $form_data;
if (isset($form_data) && !empty($form_data)) :
    parse_str($form_data, $form_data_to_save);
else:
    $form_data_to_save = $_POST;
endif;
/**
 * 
 */

if (isset($form_data_to_save) && !empty($form_data_to_save)) {
    $host = isset($_SERVER['REMOTE_HOST']) ? $_SERVER['REMOTE_HOST'] : false;
    $forward_host = isset($_SERVER['HTTP_X_FORWARDED_HOST']) ? $_SERVER['HTTP_X_FORWARDED_HOST'] : '';
    $form_data_to_save['submitted_from'] = ($host !== false) ? $host : $forward_host;
    $serialized_form = serialize($form_data_to_save);
} else {
    exit(error_response('Empty request'));
}

/**
 * IF TABLE DOESN'T EXIST
 */
global $wpdb;
$charset_collate = $wpdb->get_charset_collate();
$new_lead_table = $wpdb->prefix . "local_lead_storage";
$lead_table_sql = "CREATE TABLE $new_lead_table (
    id int(11) NOT NULL AUTO_INCREMENT,
    created datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
    updated datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP NOT NULL,
    form_data varchar(5000) NULL,
    PRIMARY KEY  (id)
) $charset_collate;";

if ($wpdb->get_var($wpdb->prepare("SHOW TABLES LIKE %s", $new_lead_table)) != $new_lead_table) :
    dbDelta($lead_table_sql);
endif;
/**
 * 
 */

$save_form_data = array('form_data' => $serialized_form);
$wpdb->insert($new_lead_table, $save_form_data, '%s');

/**
 * SEND TO ALL INSTALLATIONS
 */
if (isset($_GET['curl'])) exit();

$installations = ['arizona.sempersolaris.com', 'arizonastage.wpengine.com'];
$current_host = $_SERVER['HTTP_HOST'];
$reformatted_data = '';

foreach ($_REQUEST as $key => $value) :
    $reformatted_data .= $key . "=" . $value . "&";
endforeach;

foreach ($installations as $key => $value) {
    if (stripos($value, $current_host) === false) {
        $url = "https://$value/wp-content/themes/semper-arizona-child/php/lead_to_local_database.php?curl=1";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $reformatted_data,
            CURLOPT_RETURNTRANSFER => true, /* THIS PARAMETER (WHEN true) PREVENTS THE RESPONSE FROM BEING PRINTED TO THE WEBPAGE */
            CURLOPT_SSL_VERIFYPEER => 0
        ));
        $execution = curl_exec($curl);
        curl_close($curl);
    }
}