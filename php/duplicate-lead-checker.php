<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-config.php');

// $ignore_list = ['action', 'current_page', 'oid', 'retURL'];

function get_previous_submissions()
{
    global $wpdb;
    $prefix = $wpdb->prefix;
    $found_submissions = array();
    $previous_leads = $wpdb->get_results($wpdb->prepare('SELECT * FROM ' . $prefix . 'local_lead_storage WHERE created > (NOW() - INTERVAL 4 HOUR);'));
    foreach ($previous_leads as $key => $value) :
        foreach ($value as $key2 => $value2) {
            if ('form_data' == $key2) {
                $unser = unserialize($value2);
                $found_submissions[] = $unser;
            }
        }
    endforeach;
    return $found_submissions;
}

function rate_current_lead()
{
    $result = array();
    $match_count = (int) 0;
    $total_fields = (int) 0;
    $previous = get_previous_submissions();
    foreach ($previous as $key => $value) {
        $result[] = array_intersect($_REQUEST, $value);
        $total_fields = $total_fields + count($value);
    }
    $result = array_merge(...$result);
    foreach ($result as $key => $value) {
        if (-1 < stripos(strtolower($value), 'testlead')) {
            return false;
        }
    }

    $final_result = array();
    foreach ($result as $key => $value) {
        if (
            $key === 'first_name'
            || $key === 'last_name'
            || $key === 'email'
            || $key === 'phone'
        ) {
            $final_result[$key] = $value;
        }
    }

    $match_count = $match_count + count($final_result);
    if(count($previous) !== 0) {
        $total_fields = $total_fields / count($previous);
    }

    if (1 < $match_count) {
        return true;
    }
    return false;
}
