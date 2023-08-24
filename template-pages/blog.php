<?php
/**
 * Template Name: Blog Custom
 * Template Post Type: page, post, location_page
 */

$style = <<<STYLE
<style class="page-css" type="text/css">
    article {
        -webkit-box-shadow: 0 0 0 transparent;
        box-shadow: 0 0 0 transparent;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        display: flex;
        align-items: stretch;
        position: relative;
    }

    article:hover {
        -webkit-box-shadow: 0 3px 7px lightgray;
        box-shadow: 0 3px 7px lightgray;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }

    .post-image {
        width: 100%;
        max-height: 450px;
        flex-shrink: 0;
     	border-radius:8px;
    }

    .post-details {
        flex-grow: 1;
    }

    .continue-reading {
        position: absolute;
        bottom: 10px;
        right: 10px;
        background-color: #0c4e97;
        padding: 5px 10px;
        text-decoration: none;
        color: #fff !important;
        font-weight: bold;
		border-radius: 8px;
    }

    /* Additional styles to ensure equal height for cards */
    .cards-container {
        display: flex;
        flex-wrap: wrap;
    }

    .card {
        flex-grow: 1;
    }
</style>
STYLE;
new Page_CSS($style);

// The query
$the_query = new WP_Query(array(
    'posts_per_page' => 6,
));

get_header();
?>

<main id="primary" class="container">
	<h2 class=" px-2 px-md-4 mt-3">Learn all about solar and more!</h2>
    <div class="row">
        <section class="col-md-8">
			
            <div class="container cards-container">
               <?php
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :
                        $the_query->the_post();
                        $post_link = get_permalink();
                        $thumbnail_url = get_the_post_thumbnail_url() ?: "/wp-content/uploads/2021/02/smpair-logo-horizontal-color.png";
				        $post_content = strip_shortcodes(wp_strip_all_tags(get_the_content(), true));

                ?>
                        <article class="bg-white m-md-3 mb-5 pb-5 pb-md-3 card rounded overflow-hidden">
                            <a href="<?= $post_link; ?>" class="post-image">
                                <img src="<?= $thumbnail_url; ?>" alt="<?= get_the_title(); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                            </a>
                            <div class="post-details pt-4 px-3">
                                <h3 class="font-weight-bold m-0"><a href="<?= $post_link; ?>" style="color: #0c4e97 !important;"><?= get_the_title(); ?></a></h3>
                                <p><strong><em><?= get_the_date(); ?></em></strong></p>
                                <p><?= substr($post_content, 0, 500); ?>...</p>
                                <a href="<?= $post_link; ?>" class="continue-reading">Continue Reading</a>
                            </div>
                        </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                ?>
                    <h2 class="m-5 p-5 bg-light"><em><?= __('No news yet... it\'s being made!'); ?></em></h2>
                <?php
                endif;
                the_posts_navigation();
                ?>
            </div>
        </section>
        <div class="col-md-4">
            <?php
            get_sidebar();
            ?>
        </div>
    </div>
</main>
<?php
get_footer();