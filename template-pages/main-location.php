<?php

/**
 * Template Name: parent main Location Page 
 * Template Post Type: page, post, location_page 
 */

get_header();

$block_array = parse_blocks(get_the_content());
global $content_array;
$content_array = [];
foreach ($block_array as $key => $value) {
    $class = @$value['attrs']['className'];
    $dom = new DOMDocument();
    @$dom->loadHTML($value['innerContent'][0]);
    $content_array[$class] = preg_replace('/<(?!(img|br|strong|a))(?!\/(img|br|strong|a)).+?>/', '', $dom->saveHTML());
}
add_image_size('full-width', 450, 255, true);
?>
<link href="/wp-content/themes/semper-arizona-child/css/location-pages.min.css" rel="stylesheet" />
<!-- Hero Area -->
<header class="d-flex justify-content-center header-wrapper">
    <div style="position: relative;">
        <picture style="max-width:1432px;">
            <source srcset="/wp-content/uploads/2022/05/05-13-SMPTX-All-Services-Banner-Home-Pg.png" media="(min-width: 800px)">
            <source srcset="/wp-content/uploads/2022/05/05-13-SMPTX-All-Services-Banner-Home-Pg.png" media="(min-width: 400px)">
            <source srcset="/wp-content/uploads/2022/05/05-13-SMPTX-All-Services-Banner-Mobile-Home-Pg-2.jpg" media="(max-width: 399px)">
            <img src="/wp-content/uploads/2022/05/05-13-SMPTX-All-Services-Banner-Mobile-Home-Pg-2.jpg" alt="Our Services" />
        </picture>
        <div class="container-image-map">
            <a href="/solar-panels/">
                <div class="image-map-solar"></div>
            </a>
            <a href="/battery-storage/">
                <div class="image-map-battery"></div>
            </a>
            <a href="/roofing/">
                <div class="image-map-roofing"></div>
            </a>
            <!-- <a href="/heating-air-conditioning/">
                    <div class="image-map-hvac"></div>
                </a> -->
        </div>
    </div>
</header>
<!-- Hero Area END-->


<?php get_template_part('template-parts/location', 'banner-#1'); ?>


<!-- TOP TEXT SECTION -->
<section class="container text-center top-text-area" style="margin-bottom: 40px;">
    <?php
    the_title('<h2 class="h3 font-weight-bold pb-4">', '</h2>');
    ?>
    <article>
        <p>
            <?= $content_array['top-article']; ?>
        </p>
        <img class="align-right slide-in" <?php if (wp_is_mobile()) : echo 'loading="lazy"';
                                            endif;  ?> style="overflow:visible; border-radius:0;" width="601" height="390" src="/wp-content/uploads/2023/04/best-solar-company-in-phoenix-arizona.jpeg" alt="Best Solar, Battery, Roofing in arizona">
    </article>
</section>

<!-- TOP TEXT SECTION END-->

<?php

if (wp_is_mobile()) :

    get_template_part('template-parts/horizontal', 'form');

endif;

?>

<!-- Choose Your City List END  -->

<div class="container service-wrapper w-1100">
    <h2 class="sectionTitle font-weight-light m-0 p-0">OUR SERVICES</h2>
    <hr class="horizontalLine">
    <div class="text-center servicesHolder justify-content-evenly">
        <div class="flex-wrap-wrap service-block border-line">
            <img class="align-up slide-in" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/img/location/SMP Icon Solar.svg" alt="Solar icon">
            <h3>Solar Services <br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : 'city-name' ?></h3>
            <p><?= isset($content_array['solar-quick-description']) ? $content_array['solar-quick-description'] : 'solar-quick-description' ?></p>
            <a itemprop="url" href="/" class="learn-more-btn main-solar-link">
                <span class="learn-more-text ">LEARN MORE</span>
                <span class=" learn-more-icon">
                    <img loading="lazy" style="margin-top: 10px;" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="white arrow icon">
                </span>
            </a>
        </div>
        <hr class="verticalLine">
        <div class="flex-wrap-wrap service-block border-line-4">
            <img class="align-up slide-in" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/img/location/SMP-Icon-Battery.svg" alt="battery icon">
            <h3>Battery Storage <br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : 'city-name' ?></h3>
            <p><?= isset($content_array['battery-quick-description']) ? $content_array['battery-quick-description'] : 'battery-quick-description' ?></p>
            <a id="" itemprop="url" href="/" class="learn-more-btn main-battery-link">
                <span class="learn-more-text ">LEARN MORE</span>
                <span class=" learn-more-icon">
                    <img loading="lazy" style="margin-top: 10px;" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="white arrow icon">

                </span>
            </a>
        </div>
        <hr class="verticalLine">
        <div class="flex-wrap-wrap service-block ">
            <img class="align-up slide-in" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/img/location/SMP-Icon-Roofing.svg" alt="Roofing icon">
            <h3>Roofing <br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : 'city-name' ?></h3>
            <p><?= isset($content_array['roofing-quick-description']) ? $content_array['roofing-quick-description'] : 'roofing-quick-description' ?></p>
            <a itemprop="url" href="/" class="learn-more-btn main-roofing-link">
                <span class="learn-more-text ">LEARN MORE</span>
                <span class=" learn-more-icon">
                    <img loading="lazy" style="margin-top: 10px;" src="/wp-content/themes/semper-arizona-child/assets/icons/horizontal form/SMP CTA Button Circle Arrow.svg" alt="button circle icon">
                </span>
            </a>
        </div>
        <hr class="verticalLine ">
        <!-- <div class="flex-wrap-wrap service-block border-line-2">
            <img class="align-up slide-in" loading="lazy" src="/wp-content/themes/semper-arizona-child/assets/img/location/SMP Icon HVAC.svg" alt="">
            <h3>HVAC <br/> <?= isset($content_array['city-name']) ? $content_array['city-name'] : 'city-name' ?></h3>
            <p><?= isset($content_array['hvac-quick-description']) ? $content_array['hvac-quick-description'] : 'hvac-quick-description' ?></p>

            <a itemprop="url" href="<?php /*echo $hvac;*/ ?>" class="learn-more-btn main-hvac-link">
                <span class="learn-more-text ">LEARN MORE</span>
                <span class=" learn-more-icon">
                <img loading="lazy" style="margin-top: 10px;" src="<?= echoDomainName(); ?>/wp-content/themes/semper-arizona-child/assets/img/location/SMP CTA Button Circle Arrow.svg" alt="">
                </span>
            </a>
            
           
        </div> -->
    </div>
</div>

<!-- Desktop Form  -->
<?php if (!wp_is_mobile()) : ?>
    <div class="container my-5 pb-5">
        <?php

        get_template_part('template-parts/horizontal', 'form');

        ?>
    </div>
<?php endif; ?>
<!-- Desktop Form END -->


<!-- 2nd Text Section -->
<section class="services-text-section">
    <article>
        <img loading="lazy" class="img-banner" src="/wp-content/themes/semper-arizona-child/assets/img/main-location/SMP Blue Solar Image Tag.svg" alt="blue solar header">
        <img loading="lazy" width="500" height="256" src="/wp-content/themes/semper-arizona-child/assets/img/main-location/SMP MainPg Solar-03.jpg" alt="solar panels">
        <h2><strong><?= isset($content_array['solar-title']) ? $content_array['solar-title'] : 'solor-title' ?> </strong> </h2>
        <p> <?= isset($content_array['solar-article']) ? $content_array['solar-article'] : 'solor-article' ?> </p>
        <a class="explore-button main-solar-link" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.999" viewBox="0 0 20.001 19.999">
                <path id="Subtraction_13" data-name="Subtraction 13" d="M7575,26a10,10,0,1,1,10-10A10.012,10.012,0,0,1,7575,26Zm-1.995-15a1.081,1.081,0,0,0-.71.253.807.807,0,0,0-.3.619.788.788,0,0,0,.3.6l4.258,3.638-4.154,3.638a.784.784,0,0,0,0,1.224,1.119,1.119,0,0,0,1.418,0l4.889-4.23a.793.793,0,0,0,.26-.6.81.81,0,0,0-.292-.6l-4.959-4.293A1.083,1.083,0,0,0,7573.006,11Z" transform="translate(-7564.999 -6)" fill="#CE0109" />
            </svg>
            <span>Explore Solar Panels </span>
        </a>
    </article>


    <article>
        <img loading="lazy" class="img-banner" src="/wp-content/themes/semper-arizona-child/assets/img/main-location/SMP Blue Battery Image Tag.svg" alt="blue battery header">
        <img loading="lazy" width="500" height="256" src="/wp-content/themes/semper-arizona-child/assets/img/main-location/SMP MainPg Battery-03.jpg" alt=" battery storage, tesla powerwall">
        <h2><strong> <?= isset($content_array['battery-title']) ? $content_array['battery-title'] : 'battery-title' ?> </strong> </h2>
        <p> <?= isset($content_array['battery-article']) ? $content_array['battery-article'] : 'battery-article' ?> </p>
        <a id="" class="explore-button main-battery-link" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.999" viewBox="0 0 20.001 19.999">
                <path id="Subtraction_13" data-name="Subtraction 13" d="M7575,26a10,10,0,1,1,10-10A10.012,10.012,0,0,1,7575,26Zm-1.995-15a1.081,1.081,0,0,0-.71.253.807.807,0,0,0-.3.619.788.788,0,0,0,.3.6l4.258,3.638-4.154,3.638a.784.784,0,0,0,0,1.224,1.119,1.119,0,0,0,1.418,0l4.889-4.23a.793.793,0,0,0,.26-.6.81.81,0,0,0-.292-.6l-4.959-4.293A1.083,1.083,0,0,0,7573.006,11Z" transform="translate(-7564.999 -6)" fill="#CE0109" />
            </svg>
            <span>Explore Battery Storage </span>
        </a>
    </article>

    <article>
        <img loading="lazy" class="img-banner" src="/wp-content/themes/semper-arizona-child/assets/img/main-location/SMP Blue Roofing Image Tag.svg" alt="roofing header">
        <img loading="lazy" width="500" height="256" src="/wp-content/uploads/2023/04/top_roofers_in_az_1_501x257.jpg" alt="roof ">
        <h2><strong> <?= isset($content_array['roofing-title']) ? $content_array['roofing-title'] : 'roofing-title' ?> </strong> </h2>
        <p><?= isset($content_array['roofing-article']) ? $content_array['roofing-article'] : 'roofing-article' ?></p>
        <a class="explore-button main-roofing-link" href="/">
            <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.999" viewBox="0 0 20.001 19.999">
                <path id="Subtraction_13" data-name="Subtraction 13" d="M7575,26a10,10,0,1,1,10-10A10.012,10.012,0,0,1,7575,26Zm-1.995-15a1.081,1.081,0,0,0-.71.253.807.807,0,0,0-.3.619.788.788,0,0,0,.3.6l4.258,3.638-4.154,3.638a.784.784,0,0,0,0,1.224,1.119,1.119,0,0,0,1.418,0l4.889-4.23a.793.793,0,0,0,.26-.6.81.81,0,0,0-.292-.6l-4.959-4.293A1.083,1.083,0,0,0,7573.006,11Z" transform="translate(-7564.999 -6)" fill="#CE0109" />
            </svg>
            <span>Explore Roofing </span>
        </a>
    </article>
</section>




<!-- Contains Special Offers Section -->
<?php get_template_part('template-parts/special', 'offer') ?>
<!-- Contains Special Offers Section END -->


<!-- 3rd Text Section -->
<!-- <section class="services-text-section w-1100">
    <article>
        <img loading="lazy" class="img-banner" src="/wp-content/themes/semper-arizona-child/assets/img/main-location/SMP Blue Roofing Image Tag.svg" alt="">
        <img loading="lazy" width="500" height="256" src="/wp-content/themes/semper-arizona-child/assets/img/main-location/SMP MainPg Roofing-03.jpg" alt="">
        <h2><strong> <?= isset($content_array['roofing-title']) ? $content_array['roofing-title'] : 'roofing-title' ?> </strong> </h2>
        <p><?= isset($content_array['roofing-article']) ? $content_array['roofing-article'] : 'roofing-article' ?></p>
        <a class="explore-button main-roofing-link" href="/"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.999" viewBox="0 0 20.001 19.999">
                <path id="Subtraction_13" data-name="Subtraction 13" d="M7575,26a10,10,0,1,1,10-10A10.012,10.012,0,0,1,7575,26Zm-1.995-15a1.081,1.081,0,0,0-.71.253.807.807,0,0,0-.3.619.788.788,0,0,0,.3.6l4.258,3.638-4.154,3.638a.784.784,0,0,0,0,1.224,1.119,1.119,0,0,0,1.418,0l4.889-4.23a.793.793,0,0,0,.26-.6.81.81,0,0,0-.292-.6l-4.959-4.293A1.083,1.083,0,0,0,7573.006,11Z" transform="translate(-7564.999 -6)" fill="#CE0109"/>
            </svg>
            <span>Explore Roofing </span>
        </a>
    </article>

    
    <article>
        <img loading="lazy" class="img-banner" src="/wp-content/themes/semper-arizona-child/assets/img/main-location/SMP Blue HVAC Image Tag.svg" alt="">
        <img loading="lazy" width="500" height="256" src="/wp-content/themes/semper-arizona-child/assets/img/main-location/SMP MainPg HVAC-03.jpg" alt="">
        <h2><strong><?= isset($content_array['hvac-title']) ? $content_array['hvac-title'] : 'hvac-title' ?></strong> </h2>
        <p><?= isset($content_array['hvac-article']) ? $content_array['hvac-article'] : 'hvac-article' ?></p>
        <a class="explore-button main-hvac-link" href="/"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.999" viewBox="0 0 20.001 19.999">
                <path id="Subtraction_13" data-name="Subtraction 13" d="M7575,26a10,10,0,1,1,10-10A10.012,10.012,0,0,1,7575,26Zm-1.995-15a1.081,1.081,0,0,0-.71.253.807.807,0,0,0-.3.619.788.788,0,0,0,.3.6l4.258,3.638-4.154,3.638a.784.784,0,0,0,0,1.224,1.119,1.119,0,0,0,1.418,0l4.889-4.23a.793.793,0,0,0,.26-.6.81.81,0,0,0-.292-.6l-4.959-4.293A1.083,1.083,0,0,0,7573.006,11Z" transform="translate(-7564.999 -6)" fill="#CE0109"/>
            </svg>
            <span>Explore HVAC </span>
        </a>
    </article>
</section> -->

<!-- 3rd Text Section END -->


<!-- Contains map & Semper Cares-->

<?php get_template_part('template-parts/location', 'map'); ?>

<?php
get_footer();
?>


<script defer>
    var roof = document.getElementById("footer-roofing-link").getAttribute("href");
    var solar = document.getElementById("footer-solar-link").getAttribute("href");
    // var hvac = document.getElementById("footer-hvac-link").getAttribute("href");
    var battery = document.getElementById("footer-battery-link").getAttribute("href");

    // const setHvac = document.getElementsByClassName("main-hvac-link");
    const setRoofing = document.getElementsByClassName("main-roofing-link");
    const setSolar = document.getElementsByClassName("main-solar-link");
    const setBattery = document.getElementsByClassName('main-battery-link');

    for (let i = 0; i < setSolar.length; i++) {
        setSolar[i].setAttribute("href", solar);
        setBattery[i].setAttribute("href", battery);
        // setHvac[i].setAttribute("href", hvac);
        setRoofing[i].setAttribute("href", roof);
    }
</script>

<script async>
    const frames = document.querySelectorAll('iframe');
    const config = {
        rootMargin: '0px',
        threshold: [0]
    };

    let observer = new IntersectionObserver(function(entries, self) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                preloadFrame(entry.target);
                self.unobserve(entry.target);
            }
        });
    }, config);

    frames.forEach(image => {
        observer.observe(image);
    });

    function preloadFrame(e) {
        const src = e.getAttribute('data-src');
        if (!src) {
            return;
        }
        e.src = src;
    }
</script>