<?php

function check_for_lead_source($o, $s)
{
    global $wpdb;
    if (!empty($s)) :
        $search = '%' . $o . ' ' . $s . '%';
        $ls_sql = $wpdb->prepare("SELECT lead_source FROM lead_sources WHERE lead_source LIKE '%s';", $search);
    else :
        $ls_sql = $wpdb->prepare("SELECT lead_source FROM lead_sources WHERE lead_source LIKE '%DOMINATION $o%';");
    endif;
    $result = $wpdb->get_results($ls_sql, ARRAY_A);
    return (isset($result[0]['lead_source'])) ? $result[0]['lead_source'] : '';
}

function get_specific_lead_source()
{
    $services = ['s' => 'solar', 'b' => 'battery', 'r' => 'roof', 'h' => 'heat'];
    $office_id = [
        'bakersfield' => 'BFD',
        'bay area' => 'SF',
        'fresno' => 'BFD',
        'inland empire' => 'IE',
        'los angeles' => 'LA',
        'orange county' => 'OC',
        'redlands' => 'IE',
        'sacramento' => 'SAC',
        'san diego' => 'SD',
        'san francisco' => 'SF'
    ];

    $pathway = $_SERVER["REQUEST_URI"];
    $path_parts = explode("/", $pathway);
    array_splice($path_parts, 0, 1);
    array_splice($path_parts, -1, 1);
    $reverse_pathway = [];

    foreach ($path_parts as $key => $value) :
        array_unshift($reverse_pathway, $value);
    endforeach;

    $ls = (isset($reverse_pathway[0]) && isset($services[$reverse_pathway[0][0]]) && count($reverse_pathway) > 1) ? check_for_lead_source(str_replace("-", " ", $reverse_pathway[1]), $services[$reverse_pathway[0][0]]) : '';

    if ($ls == '' && isset($reverse_pathway[1]) && isset($office_id[str_replace("-", " ", $reverse_pathway[1])])) :
        $ls = check_for_lead_source($office_id[str_replace("-", " ", $reverse_pathway[1])], '');
    elseif ($ls == '' && isset($reverse_pathway[0]) && isset($office_id[str_replace("-", " ", $reverse_pathway[0])])) :
        $ls = check_for_lead_source($office_id[str_replace("-", " ", $reverse_pathway[0])], '');
    endif;
    return $ls;
}

function set_final_lead_source()
{
    $fls = '';
    if (isset($_GET) && isset($_GET['utm_content'])) :
        $fls = $_GET['utm_content'];
    elseif (stripos(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), 'internet-specials')) :
        $fls = 'WEBSITE CURRENT OFFERS ALL';
    else :
        $fls = get_specific_lead_source();
    endif;
    return $fls;
}

$final_source = set_final_lead_source();
if (!empty($final_source)) :
    echo "<div id=\"location_lead_source\" data-lead-source=\"$final_source\"></div>";
endif;
