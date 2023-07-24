<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Semper_Arizona
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class("container"); ?>>
    <article >
        <div class="entry-content">
            <div class="">
                <div class="content-image as-center">
                    <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                        <?php

                        if (has_post_thumbnail()) :
                            the_post_thumbnail('feat-post', array(
                                'alt' => the_title_attribute(
                                    array(
                                        'echo' => false,
                                    )
                                ),
                                'class' => 'center-block'
                            ));
                        else :
                            echo wp_get_attachment_image(3030, 'feat-post', array('class' => 'center-block'));
                        endif;

                        ?>
                    </a>
                </div>
                <footer class="entry-footer p-2">
                    <?php semper_arizona_entry_footer(); ?>
                </footer><!-- .entry-footer -->
                <div class="content-details as-center section-sm js-left">
                    <?php

                    echo '<a class="text-decoration-none" href="' . get_permalink() . '" rel="bookmark">';
                    the_title('<h2 class="entry-title">', '</h2>');
                    echo '</a>';

                    ?>
                    <p><?php semper_arizona_posted_on(); ?></p>
                </div>
            </div>
            <p style="max-height:100px;overflow:hidden;margin:0 20px"><?= (wp_strip_all_tags((get_post(get_the_ID(), ARRAY_A)['post_content']))); ?></p>
            <div class="learn-more-container"><?= '<a href="' . get_permalink() . '"><em>Learn More!</em></a>'; ?></div>
        </div><!-- .entry-content -->
    </article>

</section><!-- #post-<?php the_ID(); ?> -->