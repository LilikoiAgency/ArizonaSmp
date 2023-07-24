<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Semper_arizona
 */

if (stripos(get_the_title(), "thank") !== 0) :
    
?>

<!-- #post-<?php the_ID(); ?> -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <div class="row">

        <?php 
        
        the_title(sprintf('<h2 class="display-5 fw-bold"><a href="%s" rel="bookmark" class="text-decoration-none" style="color:var(--semper-blue)">', esc_url(get_permalink())), '</a> <small class="text-secondary text-capitalize fw-normal fst-italic fs-4">(' . get_post_type() . ')</small></h2>'); 

        ?>

        </div>

        <?php if ('post' === get_post_type()) : ?>

            <div class="entry-meta">

                <?php

                semper_arizona_posted_on();
                semper_arizona_posted_by();

                ?>

            </div><!-- .entry-meta -->

        <?php endif; ?>

    </header><!-- .entry-header -->

    <?php semper_arizona_post_thumbnail(); ?>

    <div class="entry-summary">

        <?php the_excerpt(); ?>

    </div><!-- .entry-summary -->

    <footer class="entry-footer">

        <?php semper_arizona_entry_footer(); ?>

    </footer><!-- .entry-footer -->
    <hr />
</article>
<!-- #post-<?php the_ID(); ?> -->

<?php

endif;

?>