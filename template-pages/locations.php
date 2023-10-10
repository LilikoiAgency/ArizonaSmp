<?php

/**
 * Template Name: Office Locater
 * Template Post Type, post, page, location_page
 */

/**
 * CALCULATE DISTANCE AND RETURN LOCATION
 */

$data = [];

function getZIPLocation($zip)
{
    global $wpdb;
    $results = '';
    if ($zip >= 32003 && $zip <= 34997) :
        $results = $wpdb->get_results(
            $wpdb->prepare("SELECT * FROM fl_zipcodes WHERE zip=%d LIMIT 1", $zip)
        );
    elseif ($zip >= 73301 && $zip <= 88595) :
        $results = $wpdb->get_results(
            $wpdb->prepare("SELECT * FROM tx_zipcodes WHERE zip=%d LIMIT 1", $zip)
        );
    elseif ($zip >= 90001 && $zip <= 96162) :
        $results = $wpdb->get_results(
            $wpdb->prepare("SELECT * FROM ca_zipcodes WHERE zip=%d LIMIT 1", $zip)
        );
    endif;
    if (empty($results)) return -1;
    $lat_long = array("latitude" => $results[0]->latitude, "longitude" => $results[0]->longitude);
    return $lat_long;
}

function distanceBetweenZipCodes($lat1, $lon1, $lat2, $lon2)
{
    $Radius = 3958.8; // MEAN RADIUS OF EARTH IN MILES
    $diffLat = toRadians($lat2 - $lat1);
    $diffLong = toRadians($lon2 - $lon1);
    $lat1Radian = toRadians($lat1);
    $lat2Radian = toRadians($lat2);

    $a = (sin($diffLat / 2) ** 2) + (sin($diffLong / 2) ** 2) * cos($lat1Radian) * cos($lat2Radian);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    $distance = $Radius * $c;
    return floor($distance * 100) / 100;
}

// CONVERT TO RADIANS
function toRadians($value)
{
    return $value * pi() / 180;
}

function getDistanceToEachOffice($user_loc)
{
    $office_loc_array = [];
    global $wpdb;
    $offices = $wpdb->get_results(
        $wpdb->prepare("SELECT * FROM smp_offices")
    );
    foreach ($offices as $key => $office) :
        $office_loc_array[] = ['city' => $office->city, 'map' => $office->map, 'distance' => distanceBetweenZipCodes($user_loc['latitude'], $user_loc['longitude'], $office->latitude, $office->longitude)];
    endforeach;
    return $office_loc_array;
}

function sort_by_distance($loc_array)
{
    usort($loc_array, function ($a, $b) {
        $c = $a['distance'] - $b['distance'];
        return $c;
    });
    return $loc_array;
}

if (isset($_REQUEST['zipcode'])) :
    $coordinates = getZIPLocation($_REQUEST['zipcode']);
    if ($coordinates == -1) :
        echo json_encode(array($coordinates));
    else :
        echo json_encode(sort_by_distance(getDistanceToEachOffice($coordinates)));
    endif;
    exit();
endif;
/////////////////////////////////////////////////////////////////////////
global $wpdb;
$office_info = $wpdb->get_results("SELECT * FROM smp_offices ORDER BY area = 'phoenix' DESC , area ASC;", ARRAY_A);

// error_log(print_r($office_info, true));

function format_phone_number($n)
{
    return substr(substr_replace(substr_replace(substr_replace($n, "-", -4, 0), ") ", -8, 0), "(", 1, 0), 1);
}
/**
 * 
 */
$style = <<<STYLE
<link href="/wp-content/themes/semper-arizona-child/css/location-main.min.css" rel="stylesheet" />
STYLE;
new Page_CSS($style);

get_header();

?>
<main>
    <header class="d-flex justify-content-center shadow-lg" style="background-color:var(--smp-blue)">
        <div style="position: relative;">
            <picture style="max-width:1432px;">
                <source srcset="/wp-content/uploads/2022/05/05-13-SMPTX-All-Services-Banner-Home-Pg.png" media="(min-width: 800px)">
                <source srcset="/wp-content/uploads/2022/05/05-13-SMPTX-All-Services-Banner-Home-Pg.png" media="(min-width: 400px)">
                <source srcset="/wp-content/uploads/2022/05/05-13-SMPTX-All-Services-Banner-Mobile-Home-Pg-2.jpg" media="(max-width: 399px)">
                <img src="/wp-content/uploads/2022/05/05-13-SMPTX-All-Services-Banner-Mobile-Home-Pg-2.jpg" alt="Our Services" />
            </picture>
            <div class="container-image-map">
                <a href="/solar-panels/" aria-label="learn about solar panel installation in Arizona">
                    <div class="image-map-solar"></div>
                </a>
                <a href="/battery-storage/" aria-label="learn about Battery storage installation in Arizona">
                    <div class="image-map-battery"></div>
                </a>
                <a href="/roofing/" aria-label="learn about roofing installation in Arizona">
                    <div class="image-map-roofing"></div>
                </a>
                <!-- <a href="/heating-air-conditioning/">
                    <div class="image-map-hvac"></div>
                </a> -->
            </div>
        </div>
    </header>

    <div>
        <div class="smp-blue-bg d-flex justify-content-center">
            <div class="locator-title text-white text-center text-uppercase fw-bold m-0 py-1 px-3 smp-red-bg">Semper Solaris Locator</div>
        </div>
        <div class="locator-icon d-flex justify-content-center text-white">
            <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
            </svg>
        </div>
    </div>
    <div class="container text-center mt-3">
        <form id="find_your_office" action="#">
            <label for="your_zipcode">
                <div class="font-sepia">Enter Your ZIP Code</div>
                <input id="your_zipcode" class="p-2 text-center" type="text" maxlength="5" placeholder="85027" role="button" />
            </label>
        </form>
    </div>

    <div class="container">
        <h3 class="d-inline-block text-uppercase mb-n2 position-relative" style="border-bottom: 3px solid var(--smp-red);z-index:99">All Locations</h3>
        <hr class="mt-0" />
        <?php

        echo '<div id="all_offices" class="row">';
        foreach ($office_info as $key => $value) :
            $page_id = '';
            $page_url = '';
            $area = str_replace(' ', '-', trim(strtolower($value['area'])));
            $corrected_slug = ($area == "corporate-office") ? "el-cajon" : (($area == "bay-area") ? "hayward" : $area);
            $city_for_ui = ($area == 'corporate-office') ? 'Corporate Office' : (($area == 'los-angeles') ? 'Los Angeles' : $value['city']);
            $state = $value['state'];

            /**
             * REMOVE THIS LINE AFTER
             * DALLAS AND TAMPA PAGES
             * ARE CREATED. --d|22Y
             */
            $page_url =
                ($corrected_slug == 'dallas') ? 'https://texas.sempersolaris.com/locations/dallas/'
                : (($corrected_slug == 'phoenix') ? '/locations/phoenix-az/'
                    : (($corrected_slug == 'tampa') ? 'https://florida.sempersolaris.com/locations/tampa/'
                        : "https://www.sempersolaris.com/locations/" . $corrected_slug . "/"));
            /**
             * 
             */

            /**
             * CURL REDIRECT CHECK
             */
            $ch = curl_init();
            curl_setopt_array($ch, array(
                CURLOPT_URL => 'https://www.sempersolaris.com/wp-content/themes/semper-solaris/php/redirects.php?redirect_check=' . $page_url,
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_SSL_VERIFYPEER => 0
            ));
            $exec = curl_exec($ch);
            $redirect = json_decode(strip_tags($exec));
            $page_url = ($corrected_slug == 'phoenix') ? $page_url : (($redirect != "") ? "https://www.sempersolaris.com" . $redirect : $page_url);
            curl_close($ch);
            unset($ch);
            /**
             * 
             */

            // $card_title = str_replace("-", " ", $value['area']) . (($corrected_slug == 'phoenix') ? ', Arizona' : '') . (($corrected_slug == 'dallas') ? '-Fort Worth' : '');
            $phone = format_phone_number($value['phone']);
            $is_toggler_open = "collapsed";
            $is_shown = "collapse";
            if ($key < 3) :
                $is_toggler_open = "";
                $is_shown = "collapse show";
            endif;

            echo <<<OFFICE
            <div class="office-location-container col-md-4">
                <div class="card mb-4 rounded-0 border-0 card-bg">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase fw-bold text-capitalize" onclick="openCloseLocationCard({$key})">{$city_for_ui}</h5>
                        <h6 class="card-subtitle mb-2 text-muted fw-bold" onclick="openCloseLocationCard({$key})">{$state}</h6>
                        <div class="d-flex">
                            <a class="toggle-details {$is_toggler_open}" data-num={$key} data-bs-toggle="collapse" href="#Details{$key}" role="button" aria-expanded="false" aria-controls="Details{$key}">+</a>
                        </div>
                        <hr class="office-details-line" />
                        <div class="multi-collapse collapse {$is_shown}" id="Details{$key}">
                            <div class="row">
                                <div class="detail-icon col-2 text-center text-muted p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                                    </svg>
                                </div>
                                <div class="col-9 text-muted">8:00am to 5:00pm</div>
                            </div>
                            <div class="row">
                                <div class="detail-icon location col-2 text-center text-muted p-0">
                                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                                    </svg>
                                </div>
                                <div class="col-9 text-muted">
                                    <address>{$value['address']}<br><span class="city">{$value['city']}</span>, {$state} {$value['zip']}</address>
                                </div>
                            </div>
                            <div class="row">
                                <a href="tel:+16913574142" class="detail-icon phone col-2 text-center text-white p-0">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16 fa-9x bg-secondary" width="17" height="17">
                                        <path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
                                    </svg>
                                </a>
                                <a href="tel:+{$value['phone']}" class="col-9 text-muted">{$phone}</a>
                            </div>
                            <div class="row">
                                <a href="{$page_url}" class="detail-icon link col-2 text-center text-muted p-0 link-on-hover">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z" />
                                        <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z" />
                                    </svg>
                                </a>
                                <a href="{$page_url}" class="col-9 text-muted link-on-hover"><strong>View <span class="text-capitalize">{$city_for_ui}</span> Page</strong></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
OFFICE;
        endforeach;
        echo '</div>';
        ?>

    </div>
    <div class="container">
        <div class="container my-5 pb-4">
            <?php
            get_template_part('template-parts/horizontal', 'form');
            ?>
        </div>
    </div>
    <div class="section-md">
        <?php
        get_template_part('template-parts/smp-cares', 'cta');
        ?>
    </div>
</main>


<?php

$script = <<<SCRIPT
<script class="footer-script">
    function openCloseLocationCard(num) {
        document.querySelector('[data-num="' + num + '"]').click();
    }

    function clearZipWarning() {
        document.getElementById('zip_warning').remove();
    }

    function zipWarningCountdown() {
        document.getElementById('your_zipcode').setAttribute('disabled', 'true');
        let t = 2;
        var c = setInterval(() => {
            document.getElementById('countdown').innerText = t;
            t--;
        }, 1000);
        setTimeout(() => {
            clearInterval(c);
            document.getElementById('your_zipcode').removeAttribute('disabled');
        }, 3000);
    }

    document.getElementById("find_your_office").addEventListener('submit', function(e) {
        e.preventDefault();
    });
    var zipCodeInput = document.getElementById("your_zipcode");

    zipCodeInput.addEventListener('keyup', function(e) {
        if (this.value.length < 5) {
            return;
        }
        let zipCode = this.value;
        let xhr = new XMLHttpRequest();
        let postData = new FormData();
        postData.append('zipcode', zipCode);
        xhr.onreadystatechange = () => {
            if (document.getElementById('zip_warning')) return;
            if (xhr.readyState == 4 && xhr.status == 200) {
                try {
                    var sortedLocations = JSON.parse(xhr.responseText.replace(/<\/?[^>]+>/gi, ''));
                } catch (error) {
                    console.log('Error parsing JSON:', error, xhr.responseText);
                }

                if (sortedLocations[0] == -1) {
                    document.getElementById('find_your_office').insertAdjacentHTML('afterend', '<div id="zip_warning" class="alert alert-danger d-flex justify-content-center align-items-center mt-2 mx-auto" role="alert" style="max-width:500px"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16"><path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/></svg><div class="mx-3">Please enter a valid ZIP code... <em><span id="countdown">3</span> seconds</em></div></div>');
                    zipWarningCountdown();
                    setTimeout(() => {
                        clearZipWarning()
                    }, 3000);
                    return;
                }
                let allOfficeCardContainer = document.getElementById("all_offices");
                let locationCards = document.querySelectorAll(".office-location-container");
                let locationCardCities = document.querySelectorAll(".card .city");
                let togglers = document.querySelectorAll('.toggle-details');
                let multiCollapse = document.querySelectorAll('.multi-collapse');

                togglers.forEach(toggler => {
                    if (!toggler.classList.contains('collapsed')) {
                        toggler.classList.add('collapsed');
                    }
                });
                multiCollapse.forEach(mul => {
                    if (mul.classList.contains('show')) {
                        mul.classList.remove('show');
                    }
                });
                locationCards.forEach(card => {
                    card.remove();
                });

                if (allOfficeCardContainer.getElementsByClassName('h4-container')[0]) {
                    let h4s = allOfficeCardContainer.getElementsByClassName('h4-container');
                    for (let i = h4s.length - 1; i >= 0; i--) {
                        h4s[i].remove();
                    }
                }

                allOfficeCardContainer.insertAdjacentHTML('beforeend', '<div class="h4-container w-100 mt-2"><hr style="margin:0 0 -16px" /><h4 class="near-you d-inline-block position-relative pe-2">Locations Near You</h4></div>');

                sortedLocations.forEach((loc, i) => {
                    if (i == 3) {
                        allOfficeCardContainer.insertAdjacentHTML('beforeend', '<div class="h4-container w-100 mt-2"><hr style="margin:0 0 -16px" /><h4 class="near-you d-inline-block position-relative pe-2">Other Locations</h4></div>');
                    }
                    locationCardCities.forEach((city, j) => {
                        if (city.innerText == loc['city']) {
                            if (i < 3) {
                                togglers[j].classList.remove('collapsed');
                                multiCollapse[j].classList.add('show');
                            }
                            if (locationCards[j].getElementsByTagName('H5')[0].children[0]) {
                                locationCards[j].getElementsByTagName('H5')[0].children[0].remove();
                            }
                            locationCards[j].getElementsByTagName('H5')[0].classList.add('d-flex', 'justify-content-between');
                            locationCards[j].getElementsByTagName('H5')[0].insertAdjacentHTML('beforeend', '<small class="mileage">' + loc['distance'] + ' miles</small>');
                            allOfficeCardContainer.insertAdjacentElement('beforeend', locationCards[j]);
                        }
                    });
                });
            }
        }

        xhr.open("POST", location.pathname);
        xhr.send(postData);
    });
</script>
SCRIPT;
new Page_Scripts($script);

get_footer();
