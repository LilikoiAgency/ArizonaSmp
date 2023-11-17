<?php

/**
 *
 */
$style = <<<STYLE
<style class="page-css">
    article {
        -webkit-box-shadow: 0 0 0 transparent;
        box-shadow: 0 0 0 transparent;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        display: flex;
        align-items: stretch;
        position: relative;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid lightgray;
    }

    article:hover {
        -webkit-box-shadow: 0 3px 7px lightgray;
        box-shadow: 0 3px 7px lightgray;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }

    .learn-more-container > a {
        padding: 3px 20px 5px;
        background-color: #0c4e97;
        text-decoration: none;
        color: #fff !important;
        font-weight: bold;
		border-radius: 8px;
    }

    .temporal-meta,
    .temporal-meta:visited {
        color: black;
        text-decoration: none;
    }

    .nav-links {
        margin-bottom: 40px;
        padding: 0 20px;
    }
</style>
STYLE;
new Page_CSS($style);

get_header();

?>

<!-- <section id="primary" class="content-area d-lg-flex col col-12 col-lg-8 mx-auto" style="max-width:1200px;">
		<div id="main" class="site-main px-3" role="main"> -->
<main id="primary" class="container">
    <h2 class="py-3 px-2 px-md-4 mt-3 fs-1">Learn all about solar and more!</h2>
    <div class="row">
        <section class="col-md-8">
            <div class="container cards-container">

                <?php
                if (have_posts()) :

                    if (is_home() && !is_front_page()) : ?>
                        <header>
                            <h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
                        </header>

                <?php
                    endif;

                    /* Start the Loop */
                    while (have_posts()) :
                        the_post();

                        /**
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part('template-parts/content', get_post_format());

                    endwhile;

                    the_posts_navigation(array(
                        'prev_text'        => '&#11164; Previous <span style="visibility:hidden;position:absolute;z-index:0">Dive into the past!</span>',
                        'next_text'        => 'Next &#11166; <span style="visibility:hidden;position:absolute;z-index:0">Leap into the future!</span>'
                    ));

                else :

                    get_template_part('template-parts/content', 'none');

                endif; ?>
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
