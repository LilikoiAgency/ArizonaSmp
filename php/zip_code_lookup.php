<?php

/**
 * OFFICIAL USPS ZIP CODE LIST:
 * https://postalpro.usps.com/ZIP_Locale_Detail
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '/wp-config.php');

if (empty($_REQUEST['zip'])) return;
$zip = intval($_REQUEST['zip']);

function is_valid_zip($zip)
{
    $table = get_table_name($zip);
    if ($table == null) return false;
    global $wpdb;
    return $wpdb->get_var($wpdb->prepare("SELECT EXISTS(SELECT 1 FROM {$table} WHERE zip=%d LIMIT 1)", $zip));
}

function return_zip_coordinates($zip) {
    $table = get_table_name($zip);
    if ($table == null) return false;
    global $wpdb;
    return $wpdb->get_results(
        $wpdb->prepare("SELECT * FROM $table WHERE zip=%d LIMIT 1", $zip)
    );
}

function get_table_name($zip)
{
    if (
        $zip == 501
        || $zip == 544
        || $zip == 6390
    ) :
        # NEW YORK
        return 'ny_zipcodes';
    elseif ($zip == 88888) :
        # NORTH POLE
        return 'dc_zipcodes';
    elseif (($zip >= 1001 && $zip <= 2791) || $zip == 5501) :
        # MASSACHUSETTS
        return 'ma_zipcodes';
    elseif ($zip >= 2801 && $zip <= 2904) :
        # RHODE ISLAND
        return 'ri_zipcodes';
    elseif ($zip >= 3031 && $zip <= 3897) :
        # NEW HAMPSHIRE
        return 'nh_zipcodes';
    elseif ($zip >= 3901 && $zip <= 4992) :
        # MAINE
        return 'me_zipcodes';
    elseif ($zip >= 5001 && $zip <= 5907) :
        # VERMONT
        return 'vt_zipcodes';
    elseif ($zip >= 6001 && $zip <= 6927) :
        # CONNECTICUT
        return 'ct_zipcodes';
    elseif ($zip >= 10001 && $zip <= 14905) :
        # NEW YORK
        return 'ny_zipcodes';
    elseif ($zip >= 15001 && $zip <= 19612) :
        # PENNSYLVANIA
        return 'pa_zipcodes';
    elseif ($zip >= 19701 && $zip <= 19980) :
        # DELAWARE
        return 'de_zipcodes';
    elseif (
        ($zip >= 20001 && $zip <= 20091)
        || ($zip >= 20201 && $zip <= 20599)
        || ($zip >= 56901 && $zip <= 56999)
    ) :
        # DISCTRICT OF COLUMBIA
        return 'dc_zipcodes';
    elseif (
        ($zip >= 20101 && $zip <= 20198)
        || ($zip >= 22003 && $zip <= 24658)
        || $zip == 20598
    ) :
        # VIRGINIA
        return 'va_zipcodes';
    elseif ($zip >= 20588 && $zip <= 21930) :
        # MARYLAND
        return 'md_zipcodes';
    elseif ($zip >= 24701 && $zip <= 26886) :
        # WEST VIRGINIA
        return 'wv_zipcodes';
    elseif ($zip >= 27006 && $zip <= 28909) :
        # NORTH CAROLINA
        return 'nc_zipcodes';
    elseif ($zip >= 29001 && $zip <= 29945) :
        # SOUTH CAROLINA
        return 'sc_zipcodes';
    elseif (
        ($zip >= 30002 && $zip <= 31999)
        || ($zip >= 39813 && $zip <= 39901)
    ) :
        # GEORGIA
        return 'ga_zipcodes';
    elseif ($zip >= 32003 && $zip <= 34997) :
        # FLORIDA
        return 'fl_zipcodes';
    elseif ($zip >= 35004 && $zip <= 36925) :
        # ALABAMA
        return 'al_zipcodes';
    elseif ($zip >= 37010 && $zip <= 38589) :
        # TENNESSEE
        return 'tn_zipcodes';
    elseif ($zip >= 38601 && $zip <= 39776) :
        # MISSISSIPPI
        return 'ms_zipcodes';
    elseif ($zip >= 40003 && $zip <= 42788) :
        # KENTUCKY
        return 'ky_zipcodes';
    elseif ($zip >= 43001 && $zip <= 45999) :
        # OHIO
        return 'oh_zipcodes';
    elseif ($zip >= 46001 && $zip <= 47997) :
        # INDIANA
        return 'oh_zipcodes';
    elseif ($zip >= 48001 && $zip <= 49971) :
        # MICHIGAN
        return 'mi_zipcodes';
    elseif ($zip >= 50001 && $zip <= 52809) :
        # IOWA
        return 'ia_zipcodes';
    elseif ($zip >= 53001 && $zip <= 54986) :
        # WISCONSIN
        return 'wi_zipcodes';
    elseif ($zip >= 55001 && $zip <= 56663) :
        # MINNESOTA
        return 'mn_zipcodes';
    elseif ($zip >= 57001 && $zip <= 57799) :
        # SOUTH DAKOTA
        return 'sd_zipcodes';
    elseif ($zip >= 58001 && $zip <= 58856) :
        # NORTH DAKOTA
        return 'nd_zipcodes';
    elseif ($zip >= 59001 && $zip <= 59937) :
        # MONTANA
        return 'mt_zipcodes';
    elseif ($zip >= 60002 && $zip <= 62999) :
        # ILLINOIS
        return 'il_zipcodes';
    elseif (
        ($zip >= 63005 && $zip <= 65899)
        || $zip == 72643
    ) :
        # MISSOURI
        return 'mo_zipcodes';
    elseif ($zip >= 66002 && $zip <= 67954) :
        # KANSAS
        return 'ks_zipcodes';
    elseif ($zip >= 68001 && $zip <= 69367) :
        # NEBRASKA
        return 'ne_zipcodes';
    elseif ($zip >= 70001 && $zip <= 71497) :
        # LOUISIANA
        return 'la_zipcodes';
    elseif ($zip >= 71601 && $zip <= 72959) :
        # ARKANSAS
        return 'ar_zipcodes';
    elseif (
        $zip == 73301
        || $zip == 73344
        || $zip == 73960
        || ($zip >= 75001 && $zip <= 79999)
        || ($zip >= 88510 && $zip <= 88595)
    ) :
        # TEXAS
        return 'tx_zipcodes';
    elseif (
        ($zip >= 73001 && $zip <= 73196)
        || ($zip >= 73401 && $zip <= 74966)
    ) :
        # OKLAHOMA
        return 'ok_zipcodes';
    elseif ($zip >= 80001 && $zip <= 81658) :
        # COLORADO
        return 'co_zipcodes';
    elseif (
        ($zip >= 82001 && $zip <= 82945)
        || ($zip >= 83001 && $zip <= 83128)
        || $zip == 83414
    ) :
        # WYOMING
        return 'wy_zipcodes';
    elseif ($zip >= 83201 && $zip <= 83877) :
        # IDAHO
        return 'id_zipcodes';
    elseif ($zip >= 84001 && $zip <= 84791) :
        # UTAH
        return 'ut_zipcodes';
    elseif ($zip >= 85001 && $zip <= 86556) :
        # ARIZONA
        return 'az_zipcodes';
    elseif ($zip >= 87001 && $zip <= 88439) :
        # NEW MEXICO
        return 'nm_zipcodes';
    elseif ($zip >= 88901 && $zip <= 89883) :
        # NEVADA
        return 'nv_zipcodes';
    elseif ($zip >= 90001 && $zip <= 96162) :
        # CALIFORNIA
        return 'ca_zipcodes';
    elseif ($zip >= 96701 && $zip <= 96898) :
        # HAWAII
        return 'hi_zipcodes';
    elseif ($zip >= 97001 && $zip <= 97920) :
        # OREGON
        return 'or_zipcodes';
    elseif ($zip >= 98001 && $zip <= 99403) :
        # WASHINGTON
        return 'wa_zipcodes';
    elseif ($zip >= 99501 && $zip <= 99950) :
        # ALASKA
        return 'ak_zipcodes';
    endif;
    return null;
}
