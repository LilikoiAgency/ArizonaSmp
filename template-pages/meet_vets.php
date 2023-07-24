<?php

/**
 * Template Name: Meet Our Vets
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
        }

        .inner-content-holder {
            padding: 15px;
        }
    }
</style>
STYLE;
new Page_CSS($style);

$block_array = parse_blocks(get_the_content());
global $content_array;
$content_array = [];
foreach ($block_array as $key => $value) {
    $class = @$value['attrs']['className'];
    $dom = new DOMDocument();
    @$dom->loadHTML($value['innerContent'][0]);
    $content_array[$class] = preg_replace('/<(?!(br|strong|a|img|iframe))(?!\/(br|strong|a|img|iframe)).+?>/', '', $dom->saveHTML());
};

get_header();

?>
<!-- HERO START  -->
<section class="container-sm header">
    <div class="overlay position-absolute w-100"></div>
    <article class="inner-content-wrapper">
        <?php

        if (!empty($content_array['mobile-featured-img'])) :
            echo '<div class="mw-100 text-center" > ';
            echo $content_array['mobile-featured-img'];
            echo '</div>';
        else :
            echo '<img class="mx-auto" src="' . $thumb . '" alt="veteran collage">';
        endif;

        ?>
        <div class="inner-content-holder">
            <?php the_title('<h2 class="fw-bold">', '</h2>'); ?>
            <p><?php echo isset($content_array['hero-article']) ? $content_array['hero-article'] : 'At Semper Solaris, we are focused on employing individuals from our military as they normally share a similar trustworthiness, devotion, and obligation found at the center of our organization. These colleagues keep on increasing the value of Semper Solaris and the clients we serve. ' ?></p>
        </div>
    </article>
</section>

<div class="bottom-border mb-5"></div>
<section>
    <div class="container my-5 pb-4">
        <?php

        get_template_part('template-parts/horizontal', 'form');
        
        ?>
    </div>
</section>
<div class="bottom-border mb-5"></div>

<main>
    <section class="container d-flex justify-content-around flex-wrap" style="max-width: 1000px;">
        <?php

        get_template_part('template-parts/veteran', 'array');

        ?>
    </section>
</main>
<?php

get_footer();
