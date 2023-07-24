<?php
/* Template Name: Enphase Main Page 
 * Template Post Type: page, post, location_page */

$style = <<<STYLE
<style class="page-css" type="text/css">
    .iqdisclaimer{
        font-size: 10px;
        vertical-align: super;
    }
</style>
STYLE;
new Page_CSS($style);
add_action( 'wp_head', function () {
    echo <<<STYLES
    <link rel="stylesheet" href="/wp-content/themes/semper-arizona-child/css/enphase-page.css" media="print" onload="this.media='all'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
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
<section class="hero-img-wrapper" style="max-width:2200px; margin:auto;">
    <?php if (wp_is_mobile()) : ?>
        <img width="375" height="278" style="width: 100vw; border-radius:0 !important; " src="/wp-content/uploads/2023/06/best-battery-backup-for-Arizona.jpg" alt="Solar Powered home with Enphase Battery Storage" />
    <?php else : ?>
	<style> .hero-img-wrapper{display: flex;align-items: center;justify-content: center; max-height:60vh;overflow:hidden;} .hero-img-wrapper .enphase-hero-img{margin:initial;} </style>
        <img width="1400" height="573" class="enphase-hero-img" src="/wp-content/uploads/2023/06/solar-battery-backup-in-Arizona-scaled.jpg" alt="Enphase Battery Back up System" />
    <?php endif; ?>
</section>

<section class="battery-title-wrapper ">
    <?php if (wp_is_mobile()) : ?>
        <img width="264" height="194" class="battery-img" src="/wp-content/uploads/2023/05/arizona-battery-back-up-system.png" alt="Enphase Battery storage" />
    <?php else : ?>
        <img width="415" height="300" class="battery-img" src="/wp-content/uploads/2023/05/arizona-battery-back-up-system.png" alt="Enphase Battery storage" />

    <?php endif; ?>
    <div>
        <?php if (wp_is_mobile()) : ?>
            <img width="375" height="53" style="padding-bottom:15px" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Header-Tagline-Mobile-Icon.svg" alt="Enphase powered by Semper Solaris" />
        <?php else : ?>
            <img width="663" height="28" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Hero-Header-Icon.svg" alt="Enphase powered by semper solaris" />
        <?php endif; ?>
        <div>
            <h2 style="padding-top:5px;"><strong>The Best Home Battery back Up for Arizona</strong></h2>
            <p>The <strong>Enphase</strong> Encharge uses reliable and innovative microinverter<span class="iqdisclaimer">¥</span> technology in its storage system. By placing multiple microinverters<span class="iqdisclaimer">¥</span>  in every battery, the power stays flowing and the lights stay on when you need them the most. Making it perfect for <a href="https://en.wikipedia.org/wiki/arizona">Arizona</a> extreme weather condition.</p>
        </div>
    </div>
</section>


<?php if (wp_is_mobile()) : ?>
    <div class="container p-0">
        <?php get_template_part('template-parts/horizontal', 'form'); ?>
    </div>
<?php endif; ?>

<div class="legend-wrapper">
    <fieldset class="fieldset-border">
        <legend align="center" class="legendStyle">
            <?php if (wp_is_mobile()) : ?>
                <img width="65" height="67" class="legend-img" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Solar-Down-Arrow-Icon.svg" alt="arrow pointing down with sun" />
            <?php endif; ?>
        </legend>
        <p>
In the Grand Canyon State of Arizona, where the sun blazes with intensity, the vision of harnessing clean and renewable solar power becomes a tangible achievement for homeowners. The residents of Arizona are presented with a special chance to embrace self-sufficiency in energy by utilizing the plentiful sunlight that blesses our stunning state. By incorporating a solar energy system with battery storage, you not only tap into this remarkable resource but also shield yourself from the ever-increasing burden of energy expenses.        </p>
        <?php if (!wp_is_mobile()) : ?>
            <img width="65" height="67" class="legend-img " loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Solar-Down-Arrow-Icon.svg" alt="Solar down arrow" />
        <?php endif; ?>
    </fieldset>
</div>


<?php if (!wp_is_mobile()) : ?>
    <div class="container">
        <?php get_template_part('template-parts/horizontal', 'form') ?>
    </div>
<?php endif; ?>




<div class="cards-wrapper lazy-background one">

    <h4 class="h4-titles-style" style="color:white; text-align:center; padding:40px 40px; text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.70);"><strong>Turn The <span style="color:#FFEB00">Sun</span> Into Your Energy</strong></h4>
    <div class="card-container">
        <div class="cards">
            <div class="card-img-wrapper">
                <img width="240" height="290" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-InnovateDesign.jpg" alt="innovative Solar panels on house" />
            </div>

            <h3> Innovative Design</h3>
            <p>Microinverters<span class="iqdisclaimer">¥</span>  are embedded in the battery itself and are “Hotswappable” meaning they can be individually replaced if one goes bad. This design eliminates the possibility of a single point of failure, ensuring uninterrupted power supply.</p>
        </div>
        <div class="cards">
            <div class="card-img-wrapper">
                <img width="240" height="290" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Self-Powered-Home.jpg" alt="Enphase batery storage installation" />
            </div>
            <h3> A Self-Powered Home</h3>
            <p>When you have an Enphase <a href="/battery-storage/">Battery Storage</a>  you have a self-powered home. By pairing it with solar panels you can store surplus solar energy. Or you can simply charge your battery from the grid and use it as a back up generator.</p>
        </div>
        <div class="cards">
            <div class="card-img-wrapper">
                <img width="240" height="290" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-1.webp" alt="Enphase phone application User interface" />
            </div>
            <h3> Power In Your Hand</h3>
            <p>If you like to be in control then you can effortlessly access your system with the Enlighten app. There you can actively monitor both your solar and storage as one. That's one system, one app, and one call for support.</p>
        </div>
    </div>
</div>

<?php if (wp_is_mobile()) : ?>

    <div class="cta-wrapper" style="background-color:whitesmoke;">
        <p><strong>Ready For 24/7 Backup Energy? </strong> </p>
        <a class="enphase-cta-btn" href="#location-form-wrapper"> <img width="21" height="27" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP-CTA-White-Arrow.svg" alt="white arrow icon" />
            <p>REQUEST A FREE QUOTE</p>
        </a>
    </div>

<?php endif; ?>



<div class="quick-facts-wrapper">
    <div class="quick-facts-container">
        <img width="176" height="164" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-LongTermBenefit-Icon.svg" alt="Dollar symbol on top of hand." />
        <h3>Long-Term Benefits</h3>
        <p>With a solar system, you get power that pays for itself</p>
    </div>
    <div class="quick-facts-container">
        <img width="176" height="164" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-SaveMoney-Icon.svg" alt="Piggy bank with money dropping in." />
        <h3>Save Money</h3>
        <p>An energy independent home adds up to thousands of dollars saved per year</p>
    </div>
    <div class="quick-facts-container">
        <img width="176" height="164" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-TaxCredits-Icon.svg" alt="Document icon." />
        <h3>Tax Credits</h3>
        <p>You may be eligible to earn tax credits for going solar and battery*</p>
    </div>
</div>


<h4 class="card-title-enphase" style="text-align:center; margin-bottom:0px; padding: 0px 20px;"><strong>Why Choose Enphase In Arizona? </strong></h4>

<div class="enphase-card-outer-wrapper lazy-background two">
    <div class="outer-container">


        <div class="enphase-cards-wrapper">
            <div class="second-cards">
                <h3><strong>24/7 Backup Energy</strong> </h3>
                <div class="img-wrapper-second-cards">
                    <img loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Backup-Energy.png" alt="home power stays on due to battery storage" />
                </div>
                <p>Whether it be an energy emergency, or you simply wish to independently run your appliances at night, Enphase keeps you prepared.</p>
                <img loading="lazy" class="lightningBolt" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Rows-Lighting-Bolt-Icon.svg" alt="ligntning bolt" />
            </div>
            <div class="second-cards">
                <h3><strong>Blackout Protection </strong> </h3>
                <div class="img-wrapper-second-cards">
                    <img loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Blackout-Protection.png" alt="flashlight" />
                </div>
                <p>During a blackout in Arizona, your system will detect the issue, disconnect from the grid, and shift your power supply through the Enpower Smart Switch.</p>
                <img loading="lazy" class="lightningBolt" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Rows-Lighting-Bolt-Icon.svg" alt="ligntning bolt" />
            </div>
            <div class="second-cards">
                <h3> <strong>Tested Durability </strong> </h3>
                <div class="img-wrapper-second-cards">
                    <img loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP Enphase Tested Durability.png" alt="Home in extreme weather condition equiped with battery storage" />
                </div>
                <p>Whether you're faced with a sudden energy crisis or just want to power your appliances independently at night, Enphase keeps you fully equipped and ready to go.</p>
                <img loading="lazy" class="lightningBolt" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Rows-Lighting-Bolt-Icon.svg" alt="ligntning bolt" />
            </div>
        </div>
        <div class="text-wrapper-cards">
            <h3><strong>Keep Calm, Even In The Storm </strong> </h3>
            <p>Enphase Storage is NEMA 3R rated, so it can keep delivering power even in harsh weather conditions, like rain, sleet, snow, and ice.</p>
        </div>
    </div>
</div>

<div class="cta-wrapper" style=" background-color:whitesmoke">
    <p><strong>Ready For 24/7 Backup Energy? </strong> </p>
    <a class="enphase-cta-btn" href="#location-form-wrapper"> <img width="21" height="27" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP-CTA-White-Arrow.svg" alt="white arrow" />
        <p>REQUEST A FREE QUOTE</p>
    </a>
</div>

<div class="wrapper-for-house-and-battery lazy-background three">
    <h3> <strong>Why Do I Need Battery Storage? <?php if (!wp_is_mobile()) : ?> <br> <?php endif; ?> What If I Already Have Solar Panels? </strong></h3>
</div>
<div class="enphase-encharge-10">
    <div class="ligtning-circle-holder" style="text-align:center;">
        <img loading="lazy" height="82" width="82" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Circle-Lighting-Bolt-Icon.svg" alt="Lightning Bolt Icon" />
        <p>Battery storage is like a protective wall between your Arizona home and the power grid, seamlessly plugging into your electrical system to maximize your daily energy consumption and serve as a reliable backup during a grid failure. It works by capturing power from either the grid or your solar panels and intelligently distributing it to power up your home.</p>
    </div>
    <div class="encharge-10-holder">
        <img loading="lazy" height="369" width="508" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Battery-Front-Face.png" alt="Enphase battery storage Encharge 10" />
        <h4 style="margin-top: 15px; "> <strong>ENPHASE ENCHARGE 10 </strong> </h4>
    </div>
</div>


<div class="family-outter-wrapper">
    <div class="family-wrapper">
        <p class="p-style">With the presence of a battery storage system, you can be free from concerns about losing access to vital devices such as your refrigerator, emergency medical equipment, or internet router. This guarantees that during a grid outage, you will have power supply through your battery functioning as an "off-grid" system.</p>
        <div class="dyk-holder">
            <?php if (wp_is_mobile()) : ?>
                <img loading="lazy" width="237" height="70" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-DidYouKnow-Mobile-Icon.svg" alt="did you know icon" />
            <?php else : ?>
                <img loading="lazy" width="161" height="108" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-DidYouKnow-Desktop-Icon.svg" alt="did you know icon" />

            <?php endif; ?>
            <p>The only real way to be energy independent is by adding battery storage to your existing solar system. This duo allows you the freedom to run your solar panels even during an outage and provides continuous power to your home.</p>
        </div>

        <div class="cta-wrapper" style="text-align:center;">
            <p><strong>Ready For 24/7 Backup Energy? </strong> </p>
            <a class="enphase-cta-btn" href="#location-form-wrapper"> <img width="21" height="27" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP-CTA-White-Arrow.svg" alt="white arrow" />
                <p>REQUEST A FREE QUOTE</p>
            </a>
        </div>
    </div>
    <img loading="lazy" class="family-img" width="486" height="459" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Family-251530589.png" alt="family happy to have an enphase battery storage unit" />
</div>



<div class="iq8-outter-wrapper lazy-background four">
    <div class="iq8-wrapper">
        <h4 class="h4-titles-style mobile-style-iq8" style="padding-top:75px"> The World's Only <span style="color:#FF9300">Microinverter<span class="iqdisclaimer">¥</span> </span> That Provides Instant Energy Backup During An Outage! </h4>
        <div class="iq8-img-title">
            <img loading="lazy" class="iq8-product-img" width="347" height="415" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/11-30-22-SMP-Enphase-IQ8+-Microinverter-Angle-Orange.webp" alt="Enphase Microinverter" />
            <div class="iq8-title-wrapper">
                <img loading="lazy" class="iq8-product-title" width="470" height="109" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/11-29-22-SMP-Enphase-Microinverter-Header.svg" alt="Enphase powered by Semper Solaris" />
            </div>
        </div>
    </div>
</div>

<div class="enphase-iq-graphic lazy-background five">
    <div class="info-holder">
        <h4 class="h4-titles-style">The Brains Of The System, Now Even Brainier </h4>
        <p>Our pioneering Enphase IQ Microinverter<span class="iqdisclaimer">¥</span>  performs a seemingly impossible feat with brilliant simplicity.</p>
        <?php if (wp_is_mobile()) : ?>
            <img loading="lazy" width="375" height="280" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/11-29-22-SMP-Enphase-Microinverter-Yellow-Box-Header-Mobile.svg" alt="IQ8 quick fact" />
        <?php else : ?>
            <img loading="lazy" width="554" height="248" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/11-29-22-SMP-Enphase-Microinverter-Yellow-Box-Header.svg" alt="IQ8 mircroinverter facts" />
        <?php endif; ?>
    </div>
</div>



<div class="phone-yellow-wrapper">
    <img loading="lazy" class="phone-svg" style="position:relative" width="268" height="517" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Mobile-App-2-V3.png" alt="Enphase mobile app" />
    <div class="img-p-yellow-holder">
        <?php if (wp_is_mobile()) : ?>
            <img loading="lazy" width="62" height="32" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP Enphase White Arrow Mobile Icon.svg" alt="large white arrow" />
        <?php else : ?>
            <img loading="lazy" width="47" height="93" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-White-Arrow-Icon.svg" alt="white arrow icon" />
        <?php endif; ?>
        <p>Enphase Energy Systems are managed by our beautifully designed app, meaning you’re just a tap away from tracking how much energy you’re producing, how much you’re using, and more.</p>
    </div>
</div>




<div class="enphase-quick-facts-wrapper">

    <div class="fact-holder border-r">
        <div class="fact-square bottom-border">
            <h3>Smart Power</h3>
            <p style="padding-bottom:50px;">Enphase Energy Systems are smart enough to update themselves automatically over the internet to receive the latest software and new features.</p>
            <img loading="lazy" width="324" height="261" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/01-28-22-SMP-Enphase-IQ8-No-Shadow.png" alt="Enphase microinverter" />
        </div>

        <div class="fact-square top-border bottom-br">
            <h3>Responsive and Responsible</h3>
            <p>Enphase Energy Systems include built-in Rapid Shutdown so that, in the event of an emergency, your solar power can be turned off instantly and easily, keeping utility workers and first responders safe.</p>
            <img loading="lazy" width="458" height="251" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Responsive-FirstResponders.jpg" alt="Firefighter" />

        </div>
    </div>

    <div class="fact-holder left-border">
        <div class="fact-square bottom-border">
            <h3>Seamless Switching On Or Off Grid</h3>
            <p>IQ8, our most powerful software—defined microinverter<span class="iqdisclaimer">¥</span>  ever, is powered by a proprietary, intelligent chip, that makes switching between on or off grid virtually seamless.</p>
            <img loading="lazy" style="padding-top:50px;" width="525" height="261" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/17-SMP-Microinverter-Chip-Background.jpg" alt="Enphase microinverter chip " />
        </div>

        <div class="fact-square top-border">
            <h3>A Bright Idea, Even In Low Light</h3>
            <p>Enphase Energy Systems use our breakthrough Burst Mode technology to capture energy in low-light conditions, such as when there are shadows or clouds passing over the solar array.</p>
            <img loading="lazy" width="506" height="241" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-Burst-Mode-V3.jpg" alt="solar panel burst mode" />
        </div>
    </div>

</div>



<div class="cta-wrapper" style="text-align:center; background-color:whitesmoke;">
    <p><strong>Ready For 24/7 Backup Energy? </strong> </p>
    <a class="enphase-cta-btn" href="#location-form-wrapper"> <img width="21" height="27" loading="lazy" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/location/SMP-CTA-White-Arrow.svg" alt="white arrow" />
        <p>REQUEST A FREE QUOTE</p>
    </a>
</div>

<div class="powered-by-smper-wrapper">
    <?php if (wp_is_mobile()) : ?>
        <img loading="lazy" width="375" height="115" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-LocalVeteranOwned-Header-Mobile-Icon-(1).svg" alt="Enphase header" />
    <?php else : ?>
        <img loading="lazy" width="854" height="108" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Enphase-LocalVeteranOwned-Header-Icon.svg" alt="Enphase powered by Semper Solaris" />
    <?php endif; ?>

    <h3><strong>Local & Veteran Owned</strong> </h3>
    <p>We endeavor to embody our strong military values in order to be the greatest Solar and Battery contractor in Arizona. We make every effort to use American manufacturing, hire as many veterans as possible, and give back to the wounded soldiers among us who have sacrificed so much.</p>

    <div class="veteran-cols">
        <div class="owners-smp">
            <div style="max-height:210px; overflow:hidden">
                <img loading="lazy" width="321" height="210" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Kelly-Family-Photo-Jan-2020.jpg" alt="best solar installer" />
            </div>

            <p>
                <strong>CO-OWNER FORMER USMC OFFICER <br> KELLY SHAWHAN AND HIS FAMILY </strong>
            </p>
        </div>

        <div class="owners-smp">
            <div style="max-height:210px; overflow:hidden">
                <img loading="lazy" width="321" height="220" src="https://www.sempersolaris.com/wp-content/themes/semper-solaris/assets/img/enphase/SMP-Main-Family-Photo-for-Almond's.jpg" alt="best company for solar" />
            </div>

            <p> <strong>
                    CO-OWNER JOHN ALMOND <br> AND HIS FAMILY
                </strong>
            </p>
        </div>

    </div>

</div>


<?php if (!wp_is_mobile()) : ?>
    <div style="max-width:1110px; margin:auto;">
        <h2 class="sectionTitle">SEMPER CARES INITIATIVE</h2>
        <hr class="horizontalLine">
    </div>
<?php endif; ?>
<section class="container">
    <style>
        #enphase_yt {
            width: 100%;
            height: calc((100vw - 30px) * (315 / 560));
        }

        @media (min-width: 768px) {
            #enphase_yt {
                width: 100%;
                height: calc(720px * (315 / 560));
            }
        }

        @media (min-width: 992px) {
            #enphase_yt {
                width: 100%;
                height: calc(960px * (315 / 560));
            }
        }

        @media (min-width: 1200px) {
            #enphase_yt {
                width: 100%;
                height: calc(1140px * (315 / 560));
            }
        }
    </style>
    <div class="flex-basic">
        <iframe id="enphase_yt" width="560" height="315" src="https://www.youtube.com/embed/GcHIhQHuaqw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</section>

<?php if(isset($content_array['seo-content-title-1'])) :?>
<section class="py-5" style="background: transparent linear-gradient(197deg, #FFFFFF99 0%, #D1D0D0 100%) 0% 0% no-repeat padding-box;">
	<article class="container row m-auto py-5 px-md-0">
		<div class="col-md pe-md-5">
			<h3 class="fw-bold h2 mb-md-5">
				<?= isset($content_array['seo-content-title-1']) ? $content_array['seo-content-title-1'] : '' ?>
			</h3>
			<p class="small">
				<?= isset($content_array['seo-content-1']) ? $content_array['seo-content-1'] : '' ?>
			</p>
		</div>
		
		<div class="col-md ps-md-5">
			<h3 class="fw-bold h2 mb-md-5">
				<?= isset($content_array['seo-content-title-2']) ? $content_array['seo-content-title-2'] : '' ?>
			</h3>
			<p class="small">
				<?= isset($content_array['seo-content-2']) ? $content_array['seo-content-2'] : '' ?>
			</p>		
		</div>
	</article>
	
</section>
<?php endif;?>

<?php
get_footer();
?>



<script defer>
    document.addEventListener("DOMContentLoaded", function() {
        var lazyBackgrounds = [].slice.call(document.querySelectorAll(".lazy-background"));

        if ("IntersectionObserver" in window && "IntersectionObserverEntry" in window && "intersectionRatio" in window.IntersectionObserverEntry.prototype) {
            let lazyBackgroundObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        lazyBackgroundObserver.unobserve(entry.target);
                    }
                });
            });

            lazyBackgrounds.forEach(function(lazyBackground) {
                lazyBackgroundObserver.observe(lazyBackground);
            });
        }
    });
</script>