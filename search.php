<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Semper_arizona
 */
echo "<script>console.log('it's the tag');</script>";
get_header();

?>

<main id="primary" class="container">

    <?php if (have_posts()) : ?>

        <header class="page-header">
            <h2 class="page-title mt-5">

                <?php

                printf(esc_html__('Search Results for: %s', 'semper-arizona'), '<span class="bg-light px-4 pb-2 rounded" style="color:var(--semper-blue);"><i>' . get_search_query() . '</i></span>');

                ?>

            </h2>
            <hr class="border rounded m-0 mb-5" style="height:5px" />
        </header>

        <div class="row">
            <section class="col-md-8">

            <?php

            /* Start the Loop */
            while (have_posts()) :

                the_post();

                get_template_part('template-parts/content', 'search');

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');

        endif;

            ?>

            </section>
            <aside class="col-md-4">

                <?php get_sidebar(); ?>

            </aside>
        </div>
</main>

<?php

get_footer();
