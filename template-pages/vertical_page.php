<?php

/**
 * Template Name: Main Vertical Page
 */

$thumb = get_the_post_thumbnail_url();
$style = <<<STYLE
<style class="page-css" type="text/css">
    .header {
        background: url('{$thumb}') 80% 50% no-repeat;
        background-color: darkgrey;
        background-size: cover;
        padding-left: 0 !important;
        max-width: 1200px !important;
        margin-top: 25px;
    }

    .inner-content-wrapper {
        background-color: rgb(61, 61, 61, 0.95);
        color: white;
        width: 33%;
        padding: 15px;
    }

    .inner-content-wrapper a {
        color: white !important;
    }

    .inner-content-holder {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    .inner-content-wrapper img {
        display: none;
    }

    @media screen and (max-width:660px) {
        .header {
            background: none;
            background-color: none;
            margin-top: 0;
            padding: 0;
        }

        .img-width {
            display: none;
        }

        .inner-content-wrapper a {
            color: black !important;
        }

        .inner-content-wrapper {
            color: black;
            background-color: white;
            width: 100%;
            padding: 0;
        }

        .inner-content-wrapper img {
            display: inline-block;
        }

        .inner-content-holder {
            padding: 15px;
        }
    }

    a.book-appointment {
        cursor: pointer;
        background-color: #ce0109 !important;
        color: white !important;
        font-weight: 700 !important;
        padding: 4px 24px !important;
        font-size: 19px;
        border-radius: 3px;
        max-height: 39px;
        max-width: 200px;
    }

    .hero-black-box-container {
        color: white;
        background: #171717CC 0% 0% no-repeat padding-box;
        padding: 20px 80px;
        width: fit-content;
        margin: auto;
        position: relative;
        line-height: 40px;
        margin-top: -435px;
        margin-bottom: 115px;
    }

    .font-size-36 {
        font-size: 36px;
    }

    .font-size-66 {
        font-size: 66px;
        font-weight: 500;
    }

    .font-size-28 {
        font-size: 28px;
    }

    .red-banner-container {
        text-decoration: none;
        color: white !important;
        background-color: #CE0109;
        width: 250px;
        height: 45px;
        margin: auto;
        text-align: center;
        font-size: 22px;
        display: flex;
        justify-content: center;
        clip-path: polygon(0 0, 100% 0, 90% 100%, 10% 100%);
    }

    #location-form-wrapper {
        background-color: #fff;
    }

    .card-seperator {
        height: 100px;
    }

    .other-vertical-cards {
        border-left: solid 6px white;
        border-top: solid 6px white;
        border-right: solid 6px white;
    }

    .br {
        display: none
    }

    .solar-header {
        background-image: url('{$thumb}');
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 600px;
    }

    @media only screen and (max-width: 1900px) {
        .hero-black-box-container {
            margin-top: -30%;
        }

        .card-seperator {
            height: 100px;
        }
    }

    @media only screen and (max-width: 1600px) {
        .hero-black-box-container {
            margin-top: -31%;
        }

        .card-seperator {
            height: 90px;
        }

        .other-vertical-cards {
            width: 490px;
        }
    }

    @media (max-width: 600px) {
        .solar-header {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 420px;
        }

        .hero-black-box-container {
            color: white;
            background: #171717CC 0% 0% no-repeat padding-box;
            padding: 20px 10px;
            padding-bottom: 20px;
            width: fit-content;
            line-height: 20px;
            margin-top: -305px;
            width: 90%;

        }

        .font-size-36 {
            font-size: 20px;
            margin-bottom: 6px;
            display: none;
        }

        .font-size-66 {
            font-size: 30px;
            margin-bottom: 8px;
            line-height: 32px;
        }

        .font-size-28 {
            font-size: 19px;
            margin-bottom: 0px;
            line-height: 24px;
        }

        .font-size-28 a {
            font-size: 22px;
        }

        .red-banner-container {
            width: 162px;
            height: 33px;
            font-size: 17px;
        }

        .red-banner-container img {
            width: 18px;
            font-size: 18px;
            margin-right: 2px;
            vertical-align: sub;
        }

        body>main>section.mx-auto>div:nth-child(1)>a {
            width: 200px;
        }

        .card-seperator {
            height: 80px;
        }

        .other-vertical-cards {
            border-left: solid 4px white;
            border-top: solid 4px white;
            border-right: solid 4px white;
            width: 170px;
        }

        .other-vertical-cards picture img {
            width: 100%;
        }

        .br {
            display: block
        }

        .red-banner-container p {
            font-size: 14px;
        }
    }

    @media screen and (min-width: 1200px) {
        .hero-black-box-container {
            margin-top: -515px;
        }
    }
</style>
STYLE;
new Page_CSS($style);

include ABSPATH . "/wp-content/themes/semper-arizona-child/template-parts/faq-array.php";

$block_array = parse_blocks(get_the_content());
global $content_array, $parent_id;
$content_array = [];
foreach ($block_array as $key => $value) {
    $class = @$value['attrs']['className'];
    $dom = new DOMDocument();
    @$dom->loadHTML($value['innerContent'][0]);
    $content_array[$class] = preg_replace('/<(?!(br|strong|a|img|iframe))(?!\/(br|strong|a|img|iframe)).+?>/', '', $dom->saveHTML());
};

switch (get_post_field('post_name', get_post($parent_id))):
    case 'solar-panels':
        $service = 'solar';
        $cta_text = 'Discover Solar Manufacturers!';
        $cta_href = '/solar-panels/solar-manufacturers/';
        break;
    case 'battery-storage':
        $service = 'battery';
        $cta_href = '/battery-storage/enphase/';
        $cta_text = 'Discover Enphase';
        break;
    case 'roofing':
        $service = 'roofing';
        break;
    case 'heating-air-conditioning':
        $service = 'hvac';
        break;
    case null:
        $service = 'misc';
        break;
endswitch;

get_header();

?>

<section class="mx-auto" style="text-align:center;font-family: 'Barlow';">
    <div>
        <div class="solar-header" title="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true); ?>"></div>
        <?php /*
		<?php if(strpos($_SERVER['REQUEST_URI'], "roofing") !== FALSE || strpos($_SERVER['REQUEST_URI'], "battery") !== FALSE) : ?>
			<div class="hero-black-box-container">
				<p class="font-size-36">Start saving today!</p>
				<p class="font-size-66"> <?php the_title(); ?> </p>
				<p class="font-size-28">Get A FREE Consultation <br class="br"> <a style="color:#f78000; text-decoration:none; border-bottom:solid 3px #f78000;" href="https://appointment.sempersolaris.com/">Schedule Today!</a></p>
			</div>
		<?php else: ?>
		<style> 
		    .solar-header {
				 background:linear-gradient(0deg, rgba(0, 0, 0, 0.15), rgba(0, 0, 0, 0.15)), url('<?php echo $thumb;?>');
				background-size: cover;
			}
		</style>
		<div class="hero-black-box-container" style="padding:0px;">
			
			<?php if(wp_is_mobile()):?>
           <img width="800" src="/wp-content/uploads/2023/05/05-23-SMP-Website_hero-mobiletransparent-.jpg" alt="Huge Pre Summers Savings, Instant cash rebate!* Buy 10 Panels get $500 back, Buy 20 Panels get $1000 back, Buy 30 Panels get $1500 back"/>
			<?php else: ?>
			<img width="800" src="/wp-content/uploads/2023/05/05-23-SMP-Website-May-2023-_banner.png" alt="Huge Pre Summers Savings, Instant cash rebate!* Buy 10 Panels get $500 back, Buy 20 Panels get $1000 back, Buy 30 Panels get $1500 back"/>
			<?php endif; ?>

        </div>
		<?php endif; ?>
	*/ ?>
        <div class="hero-black-box-container">
            <p class="font-size-36">Start saving today!</p>
            <p class="font-size-66"> <?php the_title(); ?> </p>
 
            <p class="font-size-28">Get A FREE Consultation <br class="br"><a style="color:#f78000; text-decoration:none; border-bottom:solid 3px #f78000;" href="https://appointment.sempersolaris.com/">Schedule Today!</a></p>
        </div>
    </div>
</section>


<!-- HERO END -->

<main>
    <!-- FORM START -->
    <div class="bottom-border mb-5"></div>
    <section>
        <div class="container my-5 pb-4">
            <?php
            get_template_part('template-parts/horizontal', 'form')
            ?>
        </div>
    </section>
    <div class="bottom-border mb-5"></div>
    <!-- FORM END -->

    <!-- TOP ARTICLE START -->
    <section style="max-width:1100px; margin:auto;">
        <div class="container p-2">
            <article class="border-top border-bottom text-center pt-4">
                <h2><strong><?= isset($content_array['top-article-title']) ? $content_array['top-article-title'] : 'top-article-title' ?></strong></h2>
                <p>
                    <?= isset($content_array['top-article']) ? $content_array['top-article'] : 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore dolor eum assumenda praesentium minima saepe et debitis eos odio? Accusamus iure, maiores odio debitis quisquam dolorum reprehenderit commodi vero asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat tempore, nam sunt repellendus eius exercitationem dolorum, laudantium ipsam eligendi laboriosam nulla, debitis illum consequuntur vitae quibusdam similique deserunt doloribus accusamus. orem ipsum dolor sit amet consectetur, adipisicing elit. Tempore dolor eum assumenda praesentium minima saepe et debitis eos odio? Accusamus iure, maiores odio debitis quisquam dolorum reprehenderit commodi vero asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat tempore,' ?>
                </p>
            </article>
        </div>
    </section>
    <br>
    <!-- TOP ARTICLE END -->
    <section>
        <div class="container" style="max-width:1100px">
            <div class="card mb-3" style="border:none !important;">
                <div class="row no-gutters">
                    <div class="col-md-6 order-2 mx-auto">
                        <article class="card-body p-0 py-2">
                            <!-- <h3 class="card-title text-uppercase">  </h3> -->
                            <p class="card-text ">
                                <?= isset($content_array['text-image']) ? $content_array['text-image'] : '' ?>
                            </p>
                            <a class="btn-red mx-auto" style="padding: 10px 15px 10px 15px;" href="<?php echo isset($cta_href) ? $cta_href : "#location-form-wrapper"; ?>" role="button">
                                <?php echo isset($cta_text) ? $cta_text : "Get Free Estimate!"; ?>
                            </a>
                        </article>
                    </div>
                    <div class=" col-md-6 rounded order-md-1 overflow-hidden ">
                        <?= isset($content_array['text-image-url']) ? $content_array['text-image-url'] : '' ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (isset($content_array['text-image-url-2'])) : ?>
        <section class="pt-5">
            <div class="container" style="max-width:1100px">
                <div class="card mb-3" style="border:none !important;">
                    <div class="d-flex row no-gutters ">
                        <div class="order-2 col-md-6 ">
                            <article class="card-body">
                                <h3 class="card-title text-uppercase"> </h3>
                                <p class="card-text"><?= $content_array['text-image-2']; ?></p>
                                <a class="btn-red" style="padding: 10px 15px 10px 15px;" href="<?php echo ($service = 'battery') ? '/battery-storage/tesla-powerwall/' : '#location-form-wrapper'; ?>" role="button"> <?php echo ($service = 'battery') ? 'EXPLORE TESLA POWERWALL' : 'Get Free Estimate' ?> </a>
                            </article>
                        </div>
                        <div class=" col-md-6 p-0 rounded overflow-hidden order-md-2">
                            <?= $content_array['text-image-url-2'] ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- IMAGE NEXT TO TEXT END -->
    <div class="bottom-border mb-5"></div>
    <!-- Awards BANNER START -->

    <?php get_template_part('template-parts/vertical', 'awards') ?>

    <!-- Awards BANNER END -->
    <div class="bottom-border mb-5"></div>
    <!-- FEATUREND VIDEO START -->
    <section class="text-center mx-auto p-2">
        <h4 class="mb-5"> <?= isset($content_array['video-title']) ? $content_array['video-title'] : '' ?> </h4>
        <div class="mx-auto embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsice-item rounded" width="560" height="315" src="<?= "https://www.youtube.com/embed/" . trim(isset($content_array['video-iframe']) ? $content_array['video-iframe'] : '') ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
        </div>
    </section>
    <!-- FEATURED VIDEO END -->
    <div class="bottom-border mb-5"></div>

    <!-- MAIN ARTICLE  -->
    <section>
        <article class="text-left mx-auto p-2" style="max-width:800px;">
            <h2><?= isset($content_array['main-content-header']) ? $content_array['main-content-header'] : '' ?></h2>
            <p>
                <?= isset($content_array['main-content']) ? $content_array['main-content'] : '' ?>
            </p>
            <div class="rounded text-center p-0 m-2 overflow-hidden">
                <?= isset($content_array['bottom-img']) ? $content_array['bottom-img'] : '' ?>
            </div>
        </article>
    </section>
    <!-- MAIN ARTICLE END -->
    <hr>
    <!-- FAQ START -->
    <div class="container d-flex flex-wrap m-auto justify-content-center">
        <aside class=" col-md-6 mt-5 p-2 order-1" style="max-width:400px;">
            <h3>Frequently Asked <br> Questions</h3>
            <p>We have the answers to all of your questions about solar panels. Here are a few frequently asked questions that we receive. There are even more questions on our FAQ page.</p>
            <a class="btn-red book-appointment btn btn-lg py-3 px-5 mb-4 font-weight-bold text-uppercase text-white bg-semper-red" href="/frequently-asked-questions/" target="_blank" role="button">VIEW FAQs</a>
        </aside>
        <div class="col-md-6 order-md-1">
            <?php

            returnFAQsByCategory($service, $categories, $all_faqs, 5);

            ?>
        </div>
    </div>

    <!-- FAQ EMD -->
    <!-- FEATURED OFFERS START -->
    <div class="bottom-border mb-5"></div>

    <section>
        <div class="text-center">
            <?php

            echo '<div class="container section-sm">';
            get_template_part('template-parts/service', 'offers');
            echo '</div>';

            ?>
        </div>
    </section>
    <!-- FEATURED OFFERS END -->
    <div class="bottom-border mb-5"></div>
</main>


<?php if (isset($content_array['seo-content-title-1'])) : ?>
    <section class="py-5" style="background:transparent linear-gradient(197deg, #FFFFFF99 0%, #D1D0D0 100%) 0% 0% no-repeat padding-box;">
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
<?php endif; ?>
<?php

get_footer();
