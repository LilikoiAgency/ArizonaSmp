<?php
/* Template Name: Tesla Ecosystem Page 
 * Template Post Type: page, post, location_page */

add_action( 'wp_head', function () {
    echo <<<STYLES
    <link rel="stylesheet" href="/wp-content/themes/semper-arizona-child/css/tesla-ecosystem.css">
    STYLES;
});

global $content_array;
$block_array = parse_blocks(get_the_content());
$content_array = [];
foreach ($block_array as $key => $value) {
    $class = isset($value['attrs']['className']) ? $value['attrs']['className'] : '';
    $dom = new DOMDocument();
    @$dom->loadHTML($value['innerContent'][0]);
    $content_array[$class] = preg_replace('/<(?!(br|strong|a|img|iframe))(?!\/(br|strong|a|img|iframe)).+?>/', '', $dom->saveHTML());
};
get_header();
?>

<main class="mx-auto overflow-hidden">

    <!-- Page Hero START -->
    <section class="hero-container px-0 pt-md-2 mx-auto text-center" style="max-width:1600px; ">
        <picture>
            <source width="1600 "srcset="/wp-content/uploads/2023/05/tesla-powerwall-installer-in-arizona.jpg" media="(min-width: 500px)">
            <img class="rounded-0" width="600" src="/wp-content/uploads/2022/12/12-09-22-SMPAZ-Hero-Battery-Desktop-Image-Dec2022-e1672179547100.jpg" alt="Tesla All in one Ecosystem, Tesla with EV Charger, Tesla Powerwall battery storage and Solar Panels" />
        </picture>
    </section>
    <!-- Page Hero End -->
    <section class="top-content-section mx-auto text-center mb-md-5">
        <h2 class="mx-auto text-white fw-bold h1">Tesla Ecosystem Now <br>Available <?php if (wp_is_mobile()) : echo '';
                                                                endif; ?>  In Arizona</h2>

        <div class="mobile-top-header p-2" style="display:none;">
            <h3 class="text-white p-2 py-5 h5 rounded-3">SOLAR <br> INVERTER</h3>
            <h3 class="text-white p-2 h5 rounded-3"> BATTERY BACKUP</h3>
            <h3 class=" text-white p-2 h5 rounded-3">EV <br> CHARGING </h3>

        </div>

        <div class="d-flex flex-row justify-content-center gap-md-4 flex-wrap ">

            <div class="quick-fact-container " style="max-width: 235px;">
                <h3 class="blue-box-with-border text-white p-2 h5 rounded-3">SOLAR <br> INVERTER</h3>
                <img class="pt-3 my-auto" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/01-23-SMP-Tesla-Inverter-Icon-Jan2023.svg" alt="Tesla Solar Inverter">
                <p class="pt-4"><a href="https://en.wikipedia.org/wiki/Tesla,_Inc." target="_blank">Tesla</a> Solar Inverter offers improved aesthetics, reliability and native integration with the Tesla ecosystem.</p>
            </div>

            <hr class="verticalLine">

            <div class=" quick-fact-container " style="max-width: 235px;">
                <h3 class="blue-box-with-border text-white p-2 h5 rounded-3"> <span> POWERWALL <br></span> BATTERY BACKUP</h3>
                <img class="pt-md-4" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla Battery Service Icon.svg" alt="Tesla Powerwall Best Certified installer">
                <p class="pt-4">Powerwall is an integrated battery system that stores your solar energy for backup protection.</p>
            </div>
            <hr class="verticalLine">

            <div class="quick-fact-container  " style="max-width: 235px;">
                <h3 class="blue-box-with-border text-white p-2 h5 rounded-3">EV CHARGING <span><br> STATION </span> </h3>
                <img class="pt-md-3" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla Car Charger Service Icon.svg" alt="Tesla car charger">
                <p class="pt-4 ">The most convenient charging solution for houses,<br> apartments, hospitality properties and workplaces.</p>
            </div>

        </div>
        <p class="p-2 yellow-container rounded m-3 mt-md-5 mx-md-auto"> <b>Bundling all Tesla products:</b> Solar energy is an Arizona homeowner's ultimate dream come true. The Copper State boasts an abundance of sunshine, positioning it as an ideal destination for harnessing this plentiful and environmentally-friendly energy source. By embracing solar power and selecting a solar inverter with battery storage, Arizonans can attain energy independence and free themselves from the constant weight of escalating energy expenses.</p>
    </section>	
    <div class=" container p-0 mb-0 pb-0 pb-md-5 mb-md-4 mb-md-5" style="max-width: 1140px; ">
        <style>
            #location-form-wrapper>div.container.d-flex.flex-row.w-100.justify-content-between.position-absolute.text-white.hideSection {
                max-width: 1140px;
            }
        </style>
        <?php get_template_part('template-parts/horizontal', 'form'); ?>
    </div>
    <section class="row tesla-inverter-wrapper">

            <div class="d-md-none text-center pt-4 tesla-inverter-mobile" style="background-color:#353839; color:white">
                <h3 >Tesla Solar Inverter</h3>
                <h5 >Maximum Solar Production</h5>
            </div>

            <figure class="col-md m-0 p-0 "><img style="width:100%; max-height:1100px;" src="https://smpbackup.wpengine.com/wp-content/uploads/2023/02/01-23-SMP-Tesla-Inverter-Jan2023.jpg" alt="Tesla powerwall certified installer, Tesla Solar Inverter for Solar Panels"></figure>

            <article class="col-md about-tesla-solar-inverter">
                <div class="solar-inverter-content p-3 ps-md-4">

                    <h3 class="d-none d-md-block">Tesla Solar Inverter</h3>
                    <h5 class="d-none d-md-block">Maximum Solar Production</h5>
                    <p>Tesla Solar Inverter is a game-changer for Arizona homeowners with its enhanced style, dependability, and seamless integration with the Tesla ecosystem. This includes solar panels, Powerwall battery storage, and the EV car charger, all in one. The inverter converts DC power from <a href="/solar-panels/">solar panels</a> into usable AC power for your home's consumption. And with Powerwall+, you'll have an integrated solar inverter and Gateway for a smooth backup transition and superior off-grid efficiency, all with that iconic Tesla flair.</p>

                    <h6 class>Key Features</h6>
                    <ul class="key-features-ul">
                        <li><span> Built on Powerwall technology for exceptional efficiency and proven reliability</span></li>
                        <li><span> Over-the-air updates and monitoring via Wi-Fi, Ethernet and cellular connectivity</span></li>
                        <li><span> Native integration with the Tesla ecosystem (Tesla app, Powerwall, Wall Connector)</span></li>
                        <li><span> 3.8 kW and 7.6 kW models available</span></li>
                    </ul>  
                </div>
                
            </article>
    </section>

  <!-- CTA START -->
    <div class="d-md-flex justify-content-center flex-wrap p-4 cta-midde-flow-map" style="align-items: center;font-size: 20px; background-color: #F5F5F573; gap: 2%;">
        <STRONG style="font-size:22px;">Claim Your FREE Estimate Today?</STRONG>
        <a class="orange-cta-btn-2" href="#location-form-wrapper" style="max-width:100%; margin-left:0px !important; margin-right:0px !important;">
            <img width="21px" height="21px" loading="lazy" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP CTA White Arrow.svg" alt="white arrow icon" />
            REQUEST FREE QUOTE
        </a>
    </div>
<!-- CTA END -->

    <section class="about-powerwall-plus py-md-5">
            <article>
                <h3>Tesla Powerwall</h3>
                <h6>Outage Protection</h6>
                <!-- <img class="m-auto" width="225" src="https://smpbackup.wpengine.com/wp-content/uploads/2023/02/SMP-Trust-Logo-Tesla-Installer.png" alt=""> -->
                <br class="d-none d-md-block"><br>
                <div class="powerwall-callouts">
                    <div>
                        <p>Child And Pet Friendly With No Exposed Wires Or Hot Vents</p>
                        <hr>
                    </div>
                    <div>
                        <p>Stack Up To 10 Powerwalls Together To Meet Your Needs</p>
                        <hr>
                    </div>
                    <div>
                        <p>Water Resistant And Tough For All Weather Conditions</p>
                        <hr>
                    </div>
                </div>

                <div class="powerwall-breakdown-wrapper">
                    <div class="powerwall-breakdown ">
                        <figure>
                            <h4>Powerwall</h4>
                            <img src="https://smpbackup.wpengine.com/wp-content/uploads/2023/02/01-23-SMP-Tesla-Powerwall-Jan2023.png" alt="Tesla Powerwall Certified installer in Arizona">
                        </figure>
                        <div>
                            <p> 
                                <b>Energy Capacity</b> 
                                <br> 13.5 kWh* <br><br> 
                                <b>On-Grid Power</b> <br> 7.6kVA / 5.8kVA continuous <br><br>
                                <b>Backup Power </b> <br>
                                10kW peak <br> 
                                106A LRA start <br class="d-none d-md-block"> 
                                Seamless backup transition <br> <br>
                                <b>Installation</b> <br>  
                                Floor or wall mounted<br> 
                                Indoor or outdoor Up to 10 Powerwalls<br class="d-none d-md-block"> 
                                -4°F to 122°F<br > 
                                Water and dust resistance
                            </p>
                        </div>
                    </div>
                    <div class="powerwall-plus-breakdown">
                        <div>
                            <p>
                                <b>Energy Capacity</b><br>  
                                13.5 kWh*<br><br>

                                <b>On-Grid Power</b><br>
                                 7.6kVA / 5.8kVA continuous<br>
                                 
                                <b> Backup Power</b><br>
                                9.6kW / 7kW continuous<br> 
                                22kW / 10kW peak<br> 
                                118A max LRA start<br> 
                                Seamless backup transition<br> <br> 

                                <b>Inverter</b> <br> 
                                Efficiency 97.5%<br> 
                                Maximum Power Point<br> 
                                Trackers: 4 Solar Input <br> <br> 
                                  
                                <b>Installation</b> <br>  
                                Integrated inverter and <br> 
                                system controller <br> 
                                -4°F to 122°F <br> 
                                Water and dust resistance
                            </p>
                        </div>

                        <figure>
                            <h4>Powerwall+</h4>
                            <img src="https://smpbackup.wpengine.com/wp-content/uploads/2023/02/01-23-SMP-Tesla-Powerwall-Plus-Jan2023.png" alt="Tesla Powerwall certified installer in Arizona">
                        </figure>
                    </div>
                </div>
            </article>
    </section>

    <section class="mx-auto text-center ">
        <article class="whats-teslapw">
            <div class="what-is-a-pw-text">
                <h4> <b>So, what is Tesla Powerwall?</b></h4>
                <p>It is a Battery backup that stores excess electricity generated by solar panels, or from the grid during times when electricity rates are low, and can be used as a backup power supply during outages or when energy demand is high.</p>
            </div>

            <div class="whats-tesla-pw-callouts">
                <div>
                    <img class="mb-2 d-none d-md-block m-auto" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla Lighting Circle Icon.svg" alt="tesla installers">
                    <h4><img class="mb-2 me-1 d-md-none" width="30" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla Lighting Circle Icon.svg" alt="charging icon"> Blackout Protection</h4>
                    <p>Protect your Arizona home from unexpected power outages with a trustworthy battery backup.</p>
                </div>
                <div>
                    <img class="mb-1 d-none d-md-block m-auto" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla Lighting Circle Icon.svg" alt="charging icon">
                    <h4><img class="mb-2 me-1 d-md-none" width="30" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla Lighting Circle Icon.svg" alt=""> Storm Watch</h4>
                    <p>Tesla Powerwall will connect to the National Weather Service and reserve energy for incoming severe weather.</p>
                </div>
                <div>
                    <img class="mb-2 d-none d-md-block m-auto" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla Lighting Circle Icon.svg" alt="">
                    <h4><img class="mb-2 me-1 d-md-none" width="30" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla Lighting Circle Icon.svg" alt="charging icon"> 24/7 Backup Energy</h4>
                    <p>Use solar and Powerwall to reduce reliance on the grid and run your home off solar day and night</p>
                </div>
            </div>
    
        </article>

        <figure class="tesla-battery mb-0">
            <figcaption class=" home-battery-holder" style="">
                <h3 class=""> <strong> Powerwall+ </strong> </h3>
                <h5> Complete All-In-One Solar Energy Storage System</h5>
                <p class="" style="font-size:18px;    margin-bottom: -8px;">Powerwall+ is an advanced rechargeable home battery solution that features a built-in Tesla Solar Inverter and system controller. This cutting-edge technology allows you to conveniently store your solar energy to use at any time.</p>
            </figcaption>
            <img class="tesla-battery-img w-100" src="<?php if (wp_is_mobile()) : echo "https://www.sempersolaris.com/wp-content/uploads/2023/02/01-23-SMP-Tesla-Powerwall-Plus-Mobile-Jan2023.jpg";
                                                        else : echo "https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla Battery Backup.jpg";
                                                        endif; ?>" alt="How does a tesla powerwall look installed">
           
        </figure>

        <div class="d-flex justify-content-center flex-wrap p-2 p-md-5 " style="align-items: center; font-size: 20px;  gap: 2%;">
            <STRONG style="font-size:22px;">Claim Your FREE Estimate Today?</STRONG>
            <a class="orange-cta-btn-2" href="#location-form-wrapper" style="max-width:100%; margin-left:0px !important; margin-right:0px !important;">
                <img width="21px" height="21px" loading="lazy" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP CTA White Arrow.svg" alt="Arrow" />
                REQUEST FREE QUOTE
            </a>
        </div>

        <article class="tesla-mobile-app-wrapper ">
            <h3>Stay In The Know</h3>
            <h5>24/7 Monitoring</h5>

            <div class="tesla-app-text pt-md-5">
                <div class="me-md-3">
                    <p>Thanks to the Tesla app, you can keep a close eye on your Arizona home solar energy usage in real-time. With the ability to customize your preferences, you can easily prioritize your energy independence, prepare for outages, or maximize your savings. Plus, with remote access and real-time alerts, you can conveniently control your system from anywhere, at any time.</p>
                    <h6 >Key Features</h6>
                    <ul>
                        <li><span> Monitoring Energy Consumption</span></li>
                        <li><span> Storm Watch</span></li>
                        <li><span> Time Based Control</span></li>
                        <li><span> Vehicle Charging During Power Outage </span></li>
                        <li><span> Setting Backup Reserve for Grid Outages</span></li>
                    </ul>  
                </div>

                <img src="https://smpbackup.wpengine.com/wp-content/uploads/2023/02/01-23-SMP-Tesla-Mobile-App-Desktop-Jan2023.png" alt="download the tesla mobile app">
            </div>
        </article>

        <div class="position-relative overflow-hidden" style="background: transparent linear-gradient(197deg, #FFFFFF99 0%, #D1D0D0 100%) 0% 0% no-repeat padding-box; width: 100%; height: 700px;  ">
            <div class="text-start mx-auto pt-5" style="max-width:455px ">
                <h2 class="text-center fw-bold pt-md-5">EV Charging Station </h2>
                <p class="ev-p">The most convenient charging solution for houses, <br> apartments, hospitality properties and workplaces</p>
            </div>
            <div class="d-flex flex-direction-row gap-4 justify-content-center pt-3 ">

                <img class="tesla-desktop" style="height: 400px;" src="https://smpbackup.wpengine.com/wp-content/uploads/2023/02/02-23-SMP-Tesla-EV-Charger-Product-Feb2023.png" alt="Charger Image">
                <p class="fw-md-lighter text-end ev-wall-connector-p" style="margin-left:-220px;max-width: 180px;">Wall Connector can adapt to most home electrical systems, with customizable power levels on a range of circuit breakers. This versatility allows installation in most homes, apartments, condos and workplaces. <br><br> <span> The lightweight 24-foot (7.3 meter) cable allows the Mobile Connector to be left in the car</span></p>
                <img class="tesla-mobile" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla EV Charger Car Image w-Bullet Point.png" alt="Tesla Ev Charger">
                <img class="tesla-ev-charger" width="286" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/tesla-ecosystem/06 15 SMP Tesla EV Charger Product.png" alt="Tesla Ev Charger">

            </div>

        </div>
        <p class="mobile-carging-cable-p">The lightweight 24-foot (7.3 meter) cable allows the Mobile Connector to be left in the car</p>

        <div class="d-flex justify-content-center flex-wrap p-2 p-md-5 " style="align-items: center; font-size: 20px;  gap: 2%;">
            <STRONG style="font-size:22px;">Get Your FREE Estimate Today?</STRONG>
            <a class="orange-cta-btn-2" href="#location-form-wrapper" style="max-width:100%; margin-left:0px !important; margin-right:0px !important;">
                <img width="21px" height="21px" loading="lazy" src="https://smpbackup.wpengine.com/wp-content/themes/semper-solaris/assets/img/location/SMP CTA White Arrow.svg" alt="Arrow" />
                REQUEST FREE QUOTE
            </a>
        </div>

        <!-- FAQ SECTION -->

        <div class="bg-light p-3 p-md-5 faq-section">
            <h3 class="fw-bold mt-md-4">Frequently Asked Questions About <br> All-In-One Tesla Ecosystem</h3>

            <div class="col-md-7 py-4  mx-auto text-start mb-md-4">
                <div class="accordion rounded" id="faq_accordion_battery">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingbattery_1">
                            <button class="accordion-button p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebattery_1" aria-expanded="true" aria-controls="collapsebattery_1">
                                <strong>What is a Tesla Powerwall?</strong>
                            </button>
                        </h2>
                        <div id="collapsebattery_1" class="accordion-collapse collapse show" aria-labelledby="headingbattery_1" data-bs-parent="#faq_accordion_battery">
                            <div class="accordion-body">
                                 Tesla Powerwall is a state-of-the-art <a href="/battery-storage/">Battery storage</a> system designed to complement solar panel installations. Created by Tesla, a leading innovator in renewable energy technology, the Powerwall allows homeowners to store excess energy generated by their solar panels during the day and use it later when the sun is not shining or during periods of high energy demand.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingbattery_2">
                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebattery_2" aria-expanded="true" aria-controls="collapsebattery_2">
                                <strong>Why should I choose a Tesla Powerwall?</strong>
                            </button>
                        </h2>
                        <div id="collapsebattery_2" class="accordion-collapse collapse " aria-labelledby="headingbattery_2" data-bs-parent="#faq_accordion_battery">
                            <div class="accordion-body">
                               While there are other battery storage options available in the market, the Tesla Powerwall distinguishes itself through its advanced technology, scalability, integration capabilities, user-friendly interface, backup power capability, appealing design, and the support of the Tesla brand. These factors collectively make the Powerwall a top choice for homeowners seeking a high-performance, reliable, and efficient battery storage solution for their solar energy systems. </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingbattery_3">
                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebattery_3" aria-expanded="true" aria-controls="collapsebattery_3">
                                <strong>What types of battery storage does Semper carry?</strong>
                            </button>
                        </h2>
                        <div id="collapsebattery_3" class="accordion-collapse collapse " aria-labelledby="headingbattery_3" data-bs-parent="#faq_accordion_battery">
                            <div class="accordion-body">
                                At Semper Solaris, we carry <a href="/battery-storage/tesla-powerwall/">Tesla Powerwall</a>, and introducing the cutting-edge <a href="/battery-storage/enphase/">Enphase battery series</a>. Both solar batteries are designed to store energy to be used at your discretion whenever necessary. Though, each solar battery does have its own unique qualities for storage. So call today and ask your sales rep which solar battery storage is right for your home. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingbattery_4">
                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebattery_4" aria-expanded="true" aria-controls="collapsebattery_4">
                                <strong>How does battery storage work?</strong>
                            </button>
                        </h2>
                        <div id="collapsebattery_4" class="accordion-collapse collapse " aria-labelledby="headingbattery_4" data-bs-parent="#faq_accordion_battery">
                            <div class="accordion-body">
                                The electricity that is stored in your battery is consumed after sundown, during energy demand peaks, or during a <a href="https://poweroutage.us/" target="_blank"> power outage</a>. The battery will continue to power your home despite the lack of energy from the electric company. </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingbattery_5">
                            <button class="accordion-button collapsed p-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapsebattery_5" aria-expanded="true" aria-controls="collapsebattery_5">
                                <strong>What Is The Difference Between Full &amp; Partial Home Backup?</strong>
                            </button>
                        </h2>
                        <div id="collapsebattery_5" class="accordion-collapse collapse " aria-labelledby="headingbattery_5" data-bs-parent="#faq_accordion_battery">
                            <div class="accordion-body">
                                If you have an existing <a href="/solar-panels/">solar panel system</a> and you don't currently have a battery, one of the great things you can do with the <a href="/battery-storage/tesla-powerwall/">Tesla Powerwall</a> is you can install two or more power walls and do what's called whole-home backup.<br><br>When you do a whole home back up what we do is we take all the circuits in your existing main service panel and we move it to a dedicated sub-panel. We then install your gateway and what will happen is that if the power goes out all the circuits in your home will be backed up, which means that you can run anything in your home on the powerwalls for as long as the powerwalls have power.<br><br>If you only have one Tesla Powerwall we can do what's called a partial home backup. We would take certain circuits out of your main service panel and put it into a dedicated load center. Whenever the power would go out that power wall would then power those dedicated circuits.<br><br>Typical circuits that people backup would be refrigerators, deep freezes, maybe basic lights in the bathroom or the kitchen, alarm systems, internet, computer or entertainment systems.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ END -->
       
    </section>
   <?php
   /*
    get_template_part("template-parts/special-offers"); 
    */
    ?> 
</main>
<?php if(isset($content_array['seo-content-title-1'])) :?>
<section class="py-5" style="background: transparent linear-gradient(197deg, #FFFFFF99 0%, #D1D0D0 100%) 0% 0% no-repeat padding-box;">
	<article class="container row m-auto py-5 px-md-0">
		<div class="col-md pe-md-5">
			<h3 class="fw-bold h2 mb-md-5">
				<?= isset($content_array['seo-content-title-1']) ? $content_array['seo-content-title-1'] : '' ?>
			</h3>
			<p style="font-size: 16px !important;">
				<?= isset($content_array['seo-content-1']) ? $content_array['seo-content-1'] : '' ?>
			</p>
		</div>
		
		<div class="col-md ps-md-5">
			<h3 class="fw-bold h2 mb-md-5">
				<?= isset($content_array['seo-content-title-2']) ? $content_array['seo-content-title-2'] : '' ?>
			</h3>
			<p style="font-size: 16px !important;">
				<?= isset($content_array['seo-content-2']) ? $content_array['seo-content-2'] : '' ?>
			</p>		
		</div>
	</article>
	
</section>
<?php endif;?>
<?php

get_footer();
