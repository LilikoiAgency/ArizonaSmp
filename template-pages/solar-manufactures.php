<?php

/**
 * Template Name: solar manufactures Page
 */

get_header();

$block_array = parse_blocks(get_the_content());
global $content_array, $parent_id;
$content_array = [];
foreach ($block_array as $key => $value) {
    $class = isset($value['attrs']['className']) ? $value['attrs']['className'] : '';
    $dom = new DOMDocument();
    @$dom->loadHTML($value['innerContent'][0]);
    $content_array[$class] = preg_replace('/<(?!(br|strong|a|img|iframe))(?!\/(br|strong|a|img|iframe)).+?>/', '', $dom->saveHTML());
};

switch (get_post_field('post_name', get_post($parent_id))):
    case 'solar-panels':
        $service = 'solar';
        break;
    case 'battery-storage':
        $service = 'battery';
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
include ABSPATH . "/wp-content/themes/semper-arizona-child/template-parts/faq-array.php";

?>
<style>
    .inner-content-wrapper {
        background-color: rgba(255, 255, 255, .9);
        color: black;
        width: 33%;
        padding: 15px;
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

        .inner-content-wrapper {
            background-color: none;
            width: 100%;
            padding: 0;
        }

        .inner-content-wrapper img {
            display: inline-block;
            /* height: 200px; */
        }

        .inner-content-holder {
            padding: 15px;
        }
    }
</style>
<!-- HERO START  -->
<section class="container-sm ">
    <div class="mx-auto mt-3">
        <div class="justify-content-center row no-gutters">
            <div class="col-md-4 order-2 order-lg-1 bg-light">
                <div class="card-body">
                    <?php the_title('<h2 class="fw-bold">', '</h2>'); ?>
                    <p class="card-text"> <?= $content_array['hero-article'] ?: ' {hero-article} Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt tempora molestias iure molestiae cupiditate unde animi non ullam in saepe sint consectetur voluptate odio ratione, quia vel mollitia nostrum rerum? e unde animi non ullam in saepe sint consectetur voluptate odio ratione, quia vel mollitia nostrum rerum? consectetur voluptate odio ratione, quia vel mollitia nostrum rerum? e unde animi non ullam in saepe sint consectetur voluptate odio ratione, quia vel mollitia nostrum rerum?' ?></p>

                </div>
            </div>
            <div class="col-md-6 p-0 order-1 order-lg-2">
                <?php

                if (!empty($content_array['mobile-featured-img'])) :
                    echo '<div class="mw-100 text-center" > ';
                    echo $content_array['mobile-featured-img'];
                    echo '</div>';
                else :
                    echo '<img class="mx-auto" src="' . get_the_post_thumbnail_url() . '" alt="solar manufacture image">';
                endif;

                ?>
            </div>
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
                <h3><?= $content_array['top-article-title'] ?: 'top-article-title' ?> </h3>
                <p class="mx-auto" style="max-width: 500px">
                    <?= $content_array['top-article'] ?: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempore dolor eum assumenda praesentium minima saepe et debitis eos odio? Accusamus iure, maiores odio debitis quisquam dolorum reprehenderit commodi vero asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat tempore, nam sunt repellendus eius exercitationem dolorum, laudantium ipsam eligendi laboriosam nulla, debitis illum consequuntur vitae quibusdam similique deserunt doloribus accusamus. orem ipsum dolor sit amet consectetur, adipisicing elit. Tempore dolor eum assumenda praesentium minima saepe et debitis eos odio? Accusamus iure, maiores odio debitis quisquam dolorum reprehenderit commodi vero asperiores! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat tempore,' ?>
                </p>
            </article>
        </div>
    </section>
    <!-- TOP ARTICLE END -->
    <div class="bottom-border mb-5"></div>

    <!-- IMAGE NEXT TO TEXT START -->
    <div class="container row mx-auto justify-content-between" style="max-width:1100px">
        <section class="col-md-6">
            <div class="">
                <div class="card mb-3" style="border:none !important;">
                    <div class="">
                        <div class=" rounded overflow-hidden ">
                            <?= $content_array['text-image-url'] ?>
                        </div>
                        <div class=" mx-auto">
                            <article class="card-body p-0 py-2">
                                <!-- <h3 class="card-title text-uppercase">  </h3> -->
                                <p class="card-text text-start">
                                    <?= $content_array['text-image'] ?>
                                </p>
                                <a class="btn-red mx-auto" style="padding: 10px 15px 10px 15px;" href="https://www.sempersolaris.com/solar-panels/solar-panel-manufacturers/silfab-solar-modules/" role="button">
                                    Explore Silfab
                                </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-md-6">
            <div class="" style="max-width:1100px">
                <div class="" style="border:none !important;">
                    <div class=" ">
                        <div class=" p-0 rounded overflow-hidden">
                            <?= $content_array['text-image-url-2'] ?>
                        </div>
                        <div class=" ">
                            <article class="">
                                <h3 class=" text-uppercase"> </h3>
                                <p class="">
                                    <?= $content_array['text-image-2'] ?> </p>
                                <a class="btn-red" style="padding: 10px 15px 10px 15px;" href="https://www.sempersolaris.com/solar-panels/solar-panel-manufacturers/q-cells-solar-panels/" role="button"> Explore Qcells </a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- IMAGE NEXT TO TEXT END -->
    <div class="bottom-border mb-5"></div>
    <!-- Awards BANNER START -->
    <?php get_template_part('template-parts/vertical', 'awards') ?>
    <!-- Awards BANNER END -->
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
<?php

get_footer();
