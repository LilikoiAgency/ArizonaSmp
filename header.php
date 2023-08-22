<?php

if (
    stripos(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), 'services') &&
    ($_SERVER["REQUEST_METHOD"] == "GET" || $_SERVER["REQUEST_METHOD"] == "HEAD")
) :
    header('HTTP/1.1 302 Found');
    header('Location: /solar-panels/');
elseif (stripos(parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH), 'services')) :
    header('HTTP/1.1 307 Temporary Redirect');
    header('Location: /solar-panels/');
endif;

/**
 * GLOBAL HEADER
 */

$logo_margin = (wp_is_mobile()) ? '' : 'style="margin-top: -9px;"';
$home = home_url();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    function echoDomainName($echo = 1)
    {
        // $home_url = "https://www.sempersolaris.com";
        $home_url = get_site_url();
        if ($echo == 1) :
            echo $home_url;
        else :
            return $home_url;
        endif;
    }

    ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="alternate" hreflang="en-US" href="<?= 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
    <meta name="google-site-verification" content="n2EP8YNrqE9aGJdyXIvdYGdNikl3a1pWDU-VydiJN4k" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php

    get_template_part("template-parts/global", "head_scripts");
    wp_head();

    ?>
    <link href="/wp-content/themes/semper-arizona-child/css/global.min.css" rel="stylesheet" />
    <script async src="//70499.cctm.xyz/t.js"></script>
    <link href="/wp-content/themes/semper-arizona-child/css/forms.css" rel="stylesheet" />
</head>

<body class="mb-0" <?php body_class(); ?>>
    <?php

    wp_body_open();

    /**
     * SET LEAD SOURCE BASED UPON PRIORITY
     */
    get_template_part("template-parts/lead-source-setter");
    /**
     * 
     */
    ?>
    <!--  Clickcease.com tracking-->
    <script type='text/javascript'>
        var script = document.createElement('script');
        script.async = true;
        script.type = 'text/javascript';
        var target = 'https://www.clickcease.com/monitor/stat.js';
        script.src = target;
        var elem = document.head;
        elem.appendChild(script);
    </script>
    <noscript>
        <a href="https://www.clickcease.com"><img src="https://monitor.clickcease.com/stats/stats.aspx" alt="ClickCease" /></a>
    </noscript>
    <!--  Clickcease.com tracking-->
    <h1 class="visuallyhidden" itemprop="name">Semper Solaris Arizona | <?php wp_title() ?></h1>
    <!-- <div id="modal_background"></div>
    <div id="modal_container">
        <div id="modal_close_x">+</div>
        <div id="modal_content_container">
            <h3 id="modal_title" style="font-size:22px;line-height:.4;font-weight:800;text-align:center;margin-bottom:0;color:white">Save Big on Solar Energy!</h3>
            <p style="text-align:center; line-height: 1;margin:16px 0;">Hurry to Fast Track Your Installation!</p>
        </div>
    </div> -->
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9GTMZC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="" style="position:sticky;top:0; background-color:white;z-index:999;">
        <nav class="navbar navbar-expand-lg navbar bg navbar-light" aria-label="Semper Solaris arizona Navigation Menu">
            <div class="container">

                <a class="navbar-brand mx-0 " href="/">
                    <img class="logo-holder" itemprop="image" width="140" height="100" src="/wp-content/themes/semper-arizona-child/assets/logo/semper-solaris_2x.png" alt="Semper Solaris Logo" />
                </a>

                <a href="tel:+14808630024" class="learn-more-btn mx-auto text-white text-decoration-none d-block d-lg-none" style="height: 35px; font-size:14px; padding:7px 50px 30px 13px;">
                    <span class="learn-more-text fw-bold ">Call Now</span>
                    <span class=" learn-more-icon">
                        <img width="20" height="20" style="margin-top: 10px;" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="Arrow inside Circle">
                    </span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 fw-bold ">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/current-offers/">Offers</a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" id="dropdown01" href="#" data-bs-toggle="dropdown" aria-expanded="false" role="button">Services</a>
                            <ul class="dropdown-menu fw-bold " aria-labelledby="dropdown01">
                                <li><a class="dropdown-item  " href="/solar-panels/">Solar Panels</a></li>
                                <li><a class="dropdown-item" href="/roofing/">Roofing Services</a></li>
                                <li><a class="dropdown-item" href="/battery-storage/">Battery Storage</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-bs-toggle="dropdown" aria-expanded="false" role="button">About</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                <li><a class="dropdown-item" href="/about-us/">About Us</a></li>
                                <li><a class="dropdown-item" href="/meet-our-vets/"> Meet Ours Vets </a></li>
                                <li><a class="dropdown-item" href="/locations/"> Locations </a></li>
                                <li><a class="dropdown-item" href="https://www.sempersolaris.com/semper-cares-initiative/"> Semper Cares Initiative </a></li>
                                <li><a class="dropdown-item" href="/careers/"> Careers </a></li>
                                <li><a class="dropdown-item" href="/contact/"> Contact Us </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-bs-toggle="dropdown" aria-expanded="false" role="button">Resources</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                <li><a class="dropdown-item" href="/blog/">Blog</a></li>
                                <li><a class="dropdown-item" href="/frequently-asked-questions/">FAQs</a></li>
                                <li><a class="dropdown-item" href="/refer-friend/">Refer a Friend</a></li>
                                <li><a class="dropdown-item" href="/solar-101-solar-for-beginners-in-arizona/">Solar for beginners</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://help.sempersolaris.com/s/">Customer Support</a>
                        </li>

                    </ul>
                    <a class="text-decoration-none fw-bold text-black" href="tel:+14808630024">
                        <img style="vertical-align: sub;" src="/wp-content/themes/semper-arizona-child/assets/logo/SMP Phone Icon.svg" alt="Phone Icon to for service">
                        (480) 863-0024</a>

                    <a itemprop="url" href="https://appointment.sempersolaris.com/" class="d-none d-md-inline learn-more-btn mx-auto text-white text-decoration-none ">
                        <span class="learn-more-text ">Book Now</span>
                        <span class=" learn-more-icon">
                            <img style="margin-top: 10px;" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt=" White Arrow inside circle ">
                        </span>
                    </a>

                    <?php get_template_part("template-parts/search", "form"); ?>

                </div>
            </div>
        </nav>
        <?php get_template_part('template-parts/breaking', 'news-ticker'); ?>
    </header>