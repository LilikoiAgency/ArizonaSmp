<?php

/**
 * Template Name: Landing Page
 */
$block_array = parse_blocks(get_the_content());
global $content_array;
$content_array = [];
foreach ($block_array as $key => $value) {
    $class = @$value['attrs']['className'];
    $dom = new DOMDocument();
    @$dom->loadHTML($value['innerContent'][0]);
    $content_array[$class] = preg_replace('/<(?!(img|br|strong|a))(?!\/(img|br|strong|a)).+?>/', '', $dom->saveHTML());
}

get_header();

?>
<style>
    .hero-bg {
        background-image: url('/wp-content/uploads/2022/04/SMP-El-Cajon-hero-img.png');
        background-repeat: no-repeat;
        background-size: cover;
    }

    .hero-bg>div {
        background-color: rgba(255, 255, 255, .9);
    }

    .service-block {
        max-width: 200px;
    }

    .service-block:hover div>*:not(img, a) {
        background-color: rgba(0, 0, 0, .05);
    }
</style>
<header class="d-flex justify-content-center bg-primary">
    <div style="position: relative;">
        <picture style="max-width:1200px;">
            <source srcset="/wp-content/uploads/2022/02/SMP-All-Services-Image-Banner.png" media="(min-width: 800px)">
            <source srcset="/wp-content/uploads/2022/02/SMP-All-Services-Header-782.jpg" media="(max-width: 400px)">
            <img width="1200" src="/wp-content/uploads/2022/02/SMP-All-Services-Image-Banner.png" alt="Our Services">
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
            <a href="/heating-air-conditioning/">
                <div class="image-map-hvac"></div>
            </a>
        </div>
    </div>
</header>
<main>
    <div class="container row mx-auto">
        <article class="col-md-8">
            <section class="container my-5">
                <div class="col mx-auto">
                    <div class="row g-0 overflow-hidden flex-md-row mb-4 h-md-250 position-relative">
                        <div class="col pe-4 d-flex flex-column justify-content-center position-static">
                            <h2 class="display-6 text-end">Best City Location Evah</h2>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/main-location/SMP MainPg Header-02.jpg" class="rounded" />
                        </div>
                    </div>
                </div>
                <p class="card-text mb-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut sapien venenatis, bibendum diam vel, porttitor turpis. Maecenas venenatis ultrices molestie. Quisque sed cursus diam. Vestibulum quis orci vel urna aliquet condimentum id ut lorem. Proin a nunc est. Cras at ultrices leo. Maecenas imperdiet mollis mauris vitae efficitur. Quisque dignissim lectus at justo egestas posuere. Nam ut volutpat tellus. Vivamus nec erat eget odio venenatis mattis. Morbi lacinia nisl in nisl facilisis iaculis.</p>
            </section>
            <section>
                <h2 class="sectionTitle font-weight-light m-0 p-0"> OUR SERVICES</h2>
                <hr class="horizontalLine">

                <div class="d-flex flex-row justify-content-between text-center mb-4">
                    <div class="d-flex flex-column justify-content-between service-block border-line">
                        <div>
                            <img class="align-up slide-in" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP Icon Solar.svg" alt="">
                            <h3 class="rounded-top m-0 p-2">Solar Energy <br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : 'city-name' ?></h3>
                            <p class="rounded-bottom"><?= isset($content_array['solar-quick-description']) ? $content_array['solar-quick-description'] : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' ?></p>
                        </div>
                        <a itemprop="url" href="" class="learn-more-btn main-solar-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img loading="lazy" style="margin-top: 10px;" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP CTA Button Circle Arrow.svg" alt="">
                            </span>
                        </a>
                    </div>
                    <hr />
                    <div class="d-flex flex-column justify-content-between service-block border-line">
                        <div>
                            <img class="align-up slide-in" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP Icon Battery.svg" alt="">
                            <h3 class="rounded-top m-0 p-2">Battery Storage <br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : 'city-name' ?></h3>
                            <p class="rounded-bottom"><?= isset($content_array['battery-quick-description']) ? $content_array['battery-quick-description'] : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' ?></p>
                        </div>
                        <a id="" itemprop="url" href="" class="learn-more-btn main-battery-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img loading="lazy" style="margin-top: 10px;" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP CTA Button Circle Arrow.svg" alt="">

                            </span>
                        </a>
                    </div>
                    <hr />
                    <div class="d-flex flex-column justify-content-between service-block border-line">
                        <div>
                            <img class="align-up slide-in" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP Icon Roofing.svg" alt="">
                            <h3 class="rounded-top m-0 p-2">Roofing <br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : 'city-name' ?></h3>
                            <p class="rounded-bottom"><?= isset($content_array['roofing-quick-description']) ? $content_array['roofing-quick-description'] : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' ?></p>
                        </div>
                        <a itemprop="url" href="" class="learn-more-btn main-roofing-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img loading="lazy" style="margin-top: 10px;" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP CTA Button Circle Arrow.svg" alt="">
                            </span>
                        </a>
                    </div>
                    <hr />
                    <div class="d-flex flex-column justify-content-between service-block border-line">
                        <div>
                            <img class="align-up slide-in" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP Icon HVAC.svg" alt="">
                            <h3 class="rounded-top m-0 p-2">HVAC <br /> <?= isset($content_array['city-name']) ? $content_array['city-name'] : 'city-name' ?></h3>
                            <p class="rounded-bottom"><?= isset($content_array['hvac-quick-description']) ? $content_array['hvac-quick-description'] : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.' ?></p>
                        </div>
                        <a itemprop="url" href="<?= isset($hvac) ? $hvac : 'https://hvac.sempersolaris.com/'; ?>" class="learn-more-btn main-hvac-link">
                            <span class="learn-more-text ">LEARN MORE</span>
                            <span class=" learn-more-icon">
                                <img loading="lazy" style="margin-top: 10px;" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP CTA Button Circle Arrow.svg" alt="">
                            </span>
                        </a>
                    </div>
                </div>
                <hr />
            </section>
            <section class="d-flex flex-row gap-3 my-5">
                <article class="col-md-6">
                    <img loading="lazy" class="position-absolute" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/main-location/SMP Blue Solar Image Tag.svg" alt="">
                    <img loading="lazy" width="500" height="256" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/main-location/SMP MainPg Solar-03.jpg" alt="">
                    <h2><strong><?= isset($content_array['solar-title']) ? $content_array['solar-title'] : 'Solar Panel Installation You Can Trust' ?> </strong> </h2>
                    <p> <?php //echo isset($content_array['solar-title']) ? $content_array['solar-title'] : 'solor-article' 
                        ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut sapien venenatis, bibendum diam vel, porttitor turpis. Maecenas venenatis ultrices molestie. Quisque sed cursus diam. Vestibulum quis orci vel urna aliquet condimentum id ut lorem. Proin a nunc est. Cras at ultrices leo. Maecenas imperdiet mollis mauris vitae efficitur. Quisque dignissim lectus at justo egestas posuere. Nam ut volutpat tellus. Vivamus nec erat eget odio venenatis mattis. Morbi lacinia nisl in nisl facilisis iaculis.</p>
                    <a class="explore-button main-solar-link" href="#">
                        <button type="button" class="btn btn-danger px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.999" viewBox="0 0 20.001 19.999">
                                <path id="Subtraction_13" data-name="Subtraction 13" d="M7575,26a10,10,0,1,1,10-10A10.012,10.012,0,0,1,7575,26Zm-1.995-15a1.081,1.081,0,0,0-.71.253.807.807,0,0,0-.3.619.788.788,0,0,0,.3.6l4.258,3.638-4.154,3.638a.784.784,0,0,0,0,1.224,1.119,1.119,0,0,0,1.418,0l4.889-4.23a.793.793,0,0,0,.26-.6.81.81,0,0,0-.292-.6l-4.959-4.293A1.083,1.083,0,0,0,7573.006,11Z" transform="translate(-7564.999 -6)" fill="#CE0109" />
                            </svg>
                            <span>Explore Solar Panels </span>
                        </button>
                    </a>
                </article>


                <article class="col-md-6">
                    <img loading="lazy" class="position-absolute" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/main-location/SMP Blue Battery Image Tag.svg" alt="">
                    <img loading="lazy" width="500" height="256" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/main-location/SMP MainPg Battery-03.jpg" alt="">
                    <h2><strong> <?= isset($content_array['battery-title']) ? $content_array['battery-title'] : 'Reliable Battery Storage Installation' ?> </strong> </h2>
                    <p> <?php //echo $content_array['battery-article'] ?: 'battery-article' 
                        ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut sapien venenatis, bibendum diam vel, porttitor turpis. Maecenas venenatis ultrices molestie. Quisque sed cursus diam. Vestibulum quis orci vel urna aliquet condimentum id ut lorem. Proin a nunc est. Cras at ultrices leo. Maecenas imperdiet mollis mauris vitae efficitur. Quisque dignissim lectus at justo egestas posuere. Nam ut volutpat tellus. Vivamus nec erat eget odio venenatis mattis. Morbi lacinia nisl in nisl facilisis iaculis.</p>
                    <a id="" class="explore-button main-battery-link" href="#">
                        <button type="button" class="btn btn-danger px-3 py-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.999" viewBox="0 0 20.001 19.999">
                                <path id="Subtraction_13" data-name="Subtraction 13" d="M7575,26a10,10,0,1,1,10-10A10.012,10.012,0,0,1,7575,26Zm-1.995-15a1.081,1.081,0,0,0-.71.253.807.807,0,0,0-.3.619.788.788,0,0,0,.3.6l4.258,3.638-4.154,3.638a.784.784,0,0,0,0,1.224,1.119,1.119,0,0,0,1.418,0l4.889-4.23a.793.793,0,0,0,.26-.6.81.81,0,0,0-.292-.6l-4.959-4.293A1.083,1.083,0,0,0,7573.006,11Z" transform="translate(-7564.999 -6)" fill="#CE0109" />
                            </svg>
                            <span>Explore Battery Storage </span>
                        </button>
                    </a>
                </article>
            </section>

        </article>
        <aside class="col-md-4">
            <?php

            get_sidebar();

            ?>
        </aside>
    </div>
    <!-- Contains Special Offers Section -->
    <section class="container-fluid rounded pb-4" style="background-color:#0C4E970D; margin: 40px 0;">
        <div class="container offer-wrapper">
            <h2 class="sectionTitle" style="margin:0;padding-top: 40px;margin-bottom: 5px;color: #004c97;">SPECIAL OFFERS <img loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP Special Offers Red Tag.svg"> </h2>
            <hr class="horizontalLine">
            <div class="d-flex justify-content-around flex-wrap  offer-holder">
                <img class="m-2" width="256" height="218" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/05 01 SMPCA Coupon Solar.svg" alt="solar coupon" />
                <img class="m-2" width="256" height="218" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/05 01 SMPCA Coupon Battery.svg" alt="solar coupon" />
                <img class="m-2" width="256" height="218" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/05 01 SMPCA Coupon Roofing.svg" alt="solar coupon" />
                <img class="m-2" width="256" height="218" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/05 01 SMPCA Coupon HVAC.svg" alt="solar coupon" />
            </div>
        </div>
    </section>
    <!-- Contains Special Offers Section END -->
    <section class="mb-5">
        <?php
        get_template_part("template-parts/horizontal", "form");
        ?>
    </section>
    <section class="container d-flex flex-row gap-3 my-5">
        <article class="col-md-6">
            <img loading="lazy" class="position-absolute" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/main-location/SMP Blue Roofing Image Tag.svg" alt="">
            <img loading="lazy" width="500" height="256" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/main-location/SMP MainPg Roofing-03.jpg" alt="">
            <h2><strong><?= isset($content_array['solar-title']) ? $content_array['solar-title'] : 'Keep Your Home Warm with Our Roofing Contractor' ?> </strong> </h2>
            <p> <?php //echo $content_array['solar-article'] ?: 'solor-article' 
                ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut sapien venenatis, bibendum diam vel, porttitor turpis. Maecenas venenatis ultrices molestie. Quisque sed cursus diam. Vestibulum quis orci vel urna aliquet condimentum id ut lorem. Proin a nunc est. Cras at ultrices leo. Maecenas imperdiet mollis mauris vitae efficitur. Quisque dignissim lectus at justo egestas posuere. Nam ut volutpat tellus. Vivamus nec erat eget odio venenatis mattis. Morbi lacinia nisl in nisl facilisis iaculis.</p>
            <a class="explore-button main-solar-link" href="#">
                <button type="button" class="btn btn-danger px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.999" viewBox="0 0 20.001 19.999">
                        <path id="Subtraction_13" data-name="Subtraction 13" d="M7575,26a10,10,0,1,1,10-10A10.012,10.012,0,0,1,7575,26Zm-1.995-15a1.081,1.081,0,0,0-.71.253.807.807,0,0,0-.3.619.788.788,0,0,0,.3.6l4.258,3.638-4.154,3.638a.784.784,0,0,0,0,1.224,1.119,1.119,0,0,0,1.418,0l4.889-4.23a.793.793,0,0,0,.26-.6.81.81,0,0,0-.292-.6l-4.959-4.293A1.083,1.083,0,0,0,7573.006,11Z" transform="translate(-7564.999 -6)" fill="#CE0109" />
                    </svg>
                    <span>Explore Solar Panels </span>
                </button>
            </a>
        </article>


        <article class="col-md-6">
            <img loading="lazy" class="position-absolute" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/main-location/SMP Blue HVAC Image Tag.svg" alt="">
            <img loading="lazy" width="500" height="256" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/main-location/SMP MainPg HVAC-03.jpg" alt="">
            <h2><strong> <?= isset($content_array['battery-title']) ? $content_array['battery-title'] : 'Quality HVAC Services for Every Home' ?> </strong> </h2>
            <p> <?php //echo $content_array['battery-article'] ?: 'battery-article' 
                ?> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut sapien venenatis, bibendum diam vel, porttitor turpis. Maecenas venenatis ultrices molestie. Quisque sed cursus diam. Vestibulum quis orci vel urna aliquet condimentum id ut lorem. Proin a nunc est. Cras at ultrices leo. Maecenas imperdiet mollis mauris vitae efficitur. Quisque dignissim lectus at justo egestas posuere. Nam ut volutpat tellus. Vivamus nec erat eget odio venenatis mattis. Morbi lacinia nisl in nisl facilisis iaculis.</p>
            <a id="" class="explore-button main-battery-link" href="#">
                <button type="button" class="btn btn-danger px-3 py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.999" viewBox="0 0 20.001 19.999">
                        <path id="Subtraction_13" data-name="Subtraction 13" d="M7575,26a10,10,0,1,1,10-10A10.012,10.012,0,0,1,7575,26Zm-1.995-15a1.081,1.081,0,0,0-.71.253.807.807,0,0,0-.3.619.788.788,0,0,0,.3.6l4.258,3.638-4.154,3.638a.784.784,0,0,0,0,1.224,1.119,1.119,0,0,0,1.418,0l4.889-4.23a.793.793,0,0,0,.26-.6.81.81,0,0,0-.292-.6l-4.959-4.293A1.083,1.083,0,0,0,7573.006,11Z" transform="translate(-7564.999 -6)" fill="#CE0109" />
                    </svg>
                    <span>Explore Battery Storage </span>
                </button>
            </a>
        </article>
    </section>
    <!-- Contains map & Semper Cares-->
    <div class="container map-wrapper" style="padding-bottom: 60px;">
        <h2 class="sectionTitle font-weight-light">IN YOUR COMMUNITY</h2>
        <hr class="horizontalLine">
        <div class="row m-auto locationDetails">
            <div class="w-100 switch-field ">
                <ul class="nav nav-pills mb-3 ms-0" id="pills_tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills_google_tab" data-bs-toggle="pill" data-bs-target="#pills_google" type="button" role="tab" aria-controls="pills_google" aria-selected="true">Google</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills_bing_tab" data-bs-toggle="pill" data-bs-target="#pills_bing" type="button" role="tab" aria-controls="pills_bing" aria-selected="false">Bing</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills_tabContent">
                    <div class="tab-pane fade show active" id="pills_google" role="tabpanel" aria-labelledby="pills_google_tab" tabindex="0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13003.17776258284!2d-119.071584!3d35.4351218!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb59a8590e5e1017!2sSemper%20Solaris!5e0!3m2!1sen!2sus!4v1650312640532!5m2!1sen!2sus" width="100%" height="450" style="border:0; max-height: 400px;" loading="lazy"></iframe>
                    </div>
                    <div class="tab-pane fade" id="pills_bing" role="tabpanel" aria-labelledby="pills_bing_tab" tabindex="0">
                        <div>
                            <iframe width="800" height="400" frameborder="0" src="https://www.bing.com/maps/embed?h=400&w=800&cp=32.82123582307179~-116.98435306549072&lvl=16&typ=d&sty=r&src=SHELL&FORM=MBEDV8" scrolling="no" style="width:100%">
                            </iframe>
                            <div style="white-space: nowrap; text-align: center; width: 100%; padding: 6px 0;">
                                <a id="largeMapLink" target="_blank" href="https://www.bing.com/maps?cp=32.82123582307179~-116.98435306549072&amp;sty=r&amp;lvl=16&amp;FORM=MBEDLD">View Larger Map</a> &nbsp; | &nbsp;
                                <a id="dirMapLink" target="_blank" href="https://www.bing.com/maps/directions?cp=32.82123582307179~-116.98435306549072&amp;sty=r&amp;lvl=16&amp;rtp=~pos.32.82123582307179_-116.98435306549072____&amp;FORM=MBEDLD">Get Directions</a>
                            </div>
                        </div>
                    </div>
                </div>


                <h4 class="location-detail-title location-info" style="color:var(--semperBlue) !important;"><strong>
                        <?php //echo $content_array['city-name'] 
                        ?> Office</strong>
                </h4>
            </div>
            <div class="col-5 locationDetails location-info" style="border-top: 2px solid lightgrey; border-right: 2px solid lightgrey; ">
                <img loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP Map Time Blue Icon.svg" alt="">
                <?php //echo $content_array['office-hours'] 
                ?>
            </div>
            <div class="col-4 locationDetails location-info" style="border-top: 2px solid lightgrey; border-right: 2px solid lightgrey;">
                <img loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP Map Location Blue Icon.svg" alt="">
                <?php //echo $content_array['office-address'] 
                ?>
            </div>
            <div class="col-3 locationDetails location-info" style="border-top: 2px solid lightgrey">
                <img loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP Map Phone Blue Icon.svg" alt="">
                <?php //echo $content_array['office-number'] 
                ?>
            </div>

        </div>
    </div>
</main>

<?php

get_footer();

?>