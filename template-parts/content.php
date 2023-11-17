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
    <article>
        <div class="entry-content m-0">
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
                <div class="content-details as-center section-sm js-left p-3 pb-0">
                    <?php

                    echo '<a class="text-decoration-none" href="' . get_permalink() . '" rel="bookmark">';
                    the_title('<h2 class="entry-title">', '</h2>');
                    echo '</a>';

                    ?>
                    <p class="m-0 fw-bold fst-italic"><?php semper_arizona_posted_on(); ?></p>
                </div>
            </div>
            <p class="m-0 p-3 pb-0"><?= substr(wp_strip_all_tags((get_post(get_the_ID(), ARRAY_A)['post_content'])), 0, 520); ?> . . .</p>
            <div class="learn-more-container d-flex justify-content-end py-3 px-4"><?= '<a href="' . get_permalink() . '"><em>Continue Reading</em></a>'; ?></div>
        </div><!-- .entry-content -->
    </article>

</section><!-- #post-<?php the_ID(); ?> -->