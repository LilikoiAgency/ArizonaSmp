<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Semper_Arizona
 */

$style = <<<STYLE
<style>
    .entry-title {
        font-weight: 500 !important;
    }

    .post-thumbnail {
        width: 100%;
    }

    #vertical_container>div {
        min-height: initial !important;
    }

    .nav-links {
        background-color: #f3f6fa;
        padding: 5px 10px;
    }
</style>
STYLE;
new Page_CSS($style);

get_header();

?>
<div id="primary" class=" row container mx-auto p-2 justify-content-center">
    <main id="main" class="col px-md-2">

        <?php

        if (has_post_thumbnail()) {
            the_post_thumbnail();
        }
        get_template_part("template-parts/share", "buttons");

        ?>

        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>

                <h2 class="h1"><?php the_title(); ?></h2>
                <?php

                the_tags();

                ?>
                <div class="entry pt-2">
                    <?php the_content(); ?>
                </div>
        <?php

            endwhile;
        endif;
        // the_post_navigation();
        the_post_navigation(array(
            'prev_text'        => sprintf( esc_html__( '%s %s', 'semper-arizona' ), '&#11164;', '%title' ),
            'next_text'        => sprintf( esc_html__( '%s %s', 'semper-arizona' ), '%title', '&#11166;' )
        ));

        ?>

    </main>

    <aside class="col-md-4 section-sm">
        <?php

        get_sidebar();

        ?>
    </aside>
</div><!-- #primary -->

<?php

wp_reset_postdata();
get_footer();
