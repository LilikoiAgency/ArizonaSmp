<?php

/**
 * Template Name: Blog Custom
 */

$style = <<<STYLE
<style class="page-css" type="text/css">
    article {
        -webkit-box-shadow: 0 0 0 transparent;
        box-shadow: 0 0 0 transparent;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
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
        height: 130px;
    }
</style>
STYLE;
new Page_CSS($style);

get_header();

?>
<main id="primary" class="container">
    <div class="row">
        <section class="col-md-8 ">
            <div class="container">
                <h2 class="display-4 pb-0 px-3 mt-3 mb-0">Latest News</h2>
                <?php
                // the query
                $the_query = new WP_Query(array(
                    'posts_per_page' => 4,
                ));

                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) :

                    ?>
                        <article class="bg-white m-3 mb-5 pb-2 d-flex flex-column rounded">
                            <?php
                            $the_query->the_post();
                            $post_link = get_permalink();
                            ?>
                            <a href="<?php echo $post_link; ?>">
                                <?php
                                if (get_the_post_thumbnail_url()) :
                                ?>
                                    <div class="post-image rounded-top" style="background:#f2f2f2 url('<?php the_post_thumbnail_url(); ?>') center no-repeat;background-size:cover;"></div>
                                <?php
                                else :
                                ?>
                                    <div class="post-image rounded-top" style="background:#f2f2f2 url('<?php echo "/wp-content/uploads/2021/02/smpair-logo-horizontal-color.png"; ?>') center no-repeat;"></div>
                                <?php
                                endif;
                                ?>
                            </a>
                            <div class="pt-4 px-5">
                                <h2 class="font-weight-bold m-0"><a href="<?php echo $post_link; ?>"><?php echo get_the_title(); ?></a></h2>
                                <div><strong><em><?php echo get_the_date() ?></em></strong></div>
                                <div><?php echo substr(get_the_content(), 0, 500) . '... <a href="' . $post_link . '">Continue Reading</a>'; ?></div>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();

                else :
                    ?>
                    <h2 class="m-5 p-5 bg-light"><em><?php echo __('No news yet... it\'s being made!'); ?></em></h2>
                <?php
                endif;
                the_posts_navigation();
                ?>
            </div>
        </section>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</main>
<?php
get_footer();
