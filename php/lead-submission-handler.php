<?php

$vertical_form_required_fields = [
    'first_name',
    'last_name',
    'email',
    'phone',
    'zip',
    '00N1a000008Wmel', /* BEST TIME */
    '00N1a000008Wmeg', /* BEST WAY */
    '00N1a000004puqd', /* MESSAGE */
];

$horizontal_form_required_fields = [
    'first_name',
    'last_name',
    'email',
    'phone',
    'zip',
    '00N1a000004puqd', /* MESSAGE */
];

function is_submission_valid()
{
    global $vertical_form_required_fields, $horizontal_form_required_fields;
    $is_valid = true;

    if (empty($_REQUEST['action']) || $_REQUEST['action'] != 'submit') :
        $is_valid = false;
    endif;

    if ($is_valid == true) :
        foreach ($_REQUEST as $key => $value) :
            if (stripos($value, '${') !== false) :
                $is_valid = false;
                break;
            endif;
        endforeach;
    endif;

    if ($is_valid == true && ($_REQUEST['formName'] == "__semper_solaris_sf_form_v" || $_REQUEST['formName'] == "__semper_solaris_sf_form_p")) :
        foreach ($_REQUEST as $key => $value) :
            if (
                in_array($value, $vertical_form_required_fields) &&
                $vertical_form_required_fields[$value] == ''
            ) :
                $is_valid = false;
                break;
            endif;
        endforeach;
    elseif ($is_valid == true && $_REQUEST['formName'] == "__semper_solaris_sf_form_h") :
        foreach ($_REQUEST as $key => $value) :
            if (
                in_array($value, $horizontal_form_required_fields) &&
                $horizontal_form_required_fields[$value] == ''
            ) :
                $is_valid = false;
                break;
            endif;
        endforeach;
    endif;

    return $is_valid;
}

function include_query_params($form_fields)
{
    $query_params = '';
    if (isset($form_fields['current_page'])) {
        $query_params = parse_url($form_fields['current_page'], PHP_URL_QUERY);
        $form_fields['page_name'] = $form_fields['current_page'];
    }
    parse_str($query_params, $arrayed_queries);
    if (isset($arrayed_queries)) :
        foreach ($arrayed_queries as $key => $value) :
            $form_fields[$key] = $value;
        endforeach;
    endif;
    return $form_fields;
}

function lik_form_submit()
{
    /**
     * Follow up email for Exit Pop Up
     */
    if (isset($_REQUEST['formName']) && $_REQUEST['formName'] == "__semper_solaris_sf_form_exit_popup") :
        include_once($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/semper-arizona-child/php/form_email.php');
    endif;
    /**
     * 
     */
    
    $is_submission_valid = is_submission_valid();

    include_once($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/semper-arizona-child/php/duplicate-lead-checker.php');

    if ($is_submission_valid == false || rate_current_lead() == true) {
        $dup_alert = <<<ALERT
        <script>
            alert("It appears that your submission is a duplicate.\n\rPlease call (480) 863-0024 to verify\nthat we've received your information.\n\rThank you!");
        </script>
        ALERT;
        return $dup_alert;
    }

    $form_fields = [];
    $destination = [
        /** ZAPIER NAME: "SMP Secure.force Leads" */
        'paid_search' => 'https://hooks.zapier.com/hooks/catch/807991/birlqat',
        /* ZAPIER NAME "SMP Website FFO from sempersolaris.com" */
        'web_lead' => 'https://hooks.zapier.com/hooks/catch/807991/bay8hcs/',
        'salesforce' => 'https://hooks.zapier.com/hooks/catch/807991/3ujpocn/'
    ];

    foreach ($_POST as $field => $value) :
        if (
            $field == '00N1a000008Wmeq'     // HOW DID YOU HEAR ABOUT US
            || $field == '00N1a000004puqd'  // MESSAGE 
            || $field == 'first_name'
            || $field == 'last_name'
            || $field == 'phone'
            || $field == 'zip'
        ) {
            $value = str_replace('\\', '', $value);
            $value = htmlentities($value, ENT_QUOTES);
        }
        if ($field == 'email') :
            $form_fields[$field] = filter_var($value, FILTER_SANITIZE_EMAIL);
        elseif ($field == "referrer") :
            $form_fields["00N1a000008Wa1W"] = $value; // Source__c
        else :
            $form_fields[$field] = $value;
        endif;
    endforeach;

    $form_fields['ip_address'] = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : $_SERVER['HTTP_X_FORWARDED_FOR'];

    global $form_data, $wp_version;
    $form_data = preg_replace('/%5B[0-9]+%5D/simU', '', http_build_query(include_query_params($form_fields))); // remove php style arrays for array values [1]
    $args = array(
        'body' => $form_data,
        'headers' => array(
            'Content-Type' => 'application/x-www-form-urlencoded',
            'user-agent' => 'lilikoi Agency plugin - WordPress/' . $wp_version . '; ' . get_bloginfo('url'),
        ),
        'sslverify' => false,
    );

    if (isset(include_query_params($form_fields)['utm_content'])) :
        wp_safe_remote_post($destination["paid_search"] . "?" . $form_data, $args);
    else :
        wp_safe_remote_post($destination["web_lead"] . "?" . $form_data, $args);
    endif;

    $result = wp_safe_remote_post($destination["salesforce"], $args);

    /**
     * SAVE TO SITE DATABASE
     */
    include_once($_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/semper-arizona-child/php/lead_to_local_database.php');
    /**
     * 
     */

     if (stripos($result['body'], '"status":"success"') > -1) {
        echo <<<RESPONSE
        <!DOCTYPE html>
        <head>
            <meta charset="UTF-8">
            <meta name="description" content="Error page.">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="Refresh" content="0; url='/thank-you/'" />
            <title>Success!</title>
        </head>
        <html>
            <body>
                <script>window.location='/thank-you/';</script>
            </body>
        </html>
        RESPONSE;
    } else {
        echo '<script>alert("The was an error when submitting your form. Please try again.");</script>';
    }
}
