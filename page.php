<?php

get_header();

?>
<!-- hello world -->
<div id="primary" class=" row container mx-auto p-2 justify-content-center">
    <main id="main" class="col-md-8 p-0 m-auto">
		
        <?php
		
        while (have_posts()) :
            the_post();
			the_post_thumbnail();
			the_content();
        endwhile;
		
        ?>
		
    </main>
    <?php

    if (stripos(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/thank') === false) :

    ?>
        <aside class="col-md-4 section-sm">
            <?php

            get_sidebar();

            ?>
        </aside>
    <?php

    endif;

    ?>
</div><!-- #primary -->

<?php

wp_reset_postdata();
get_footer();

?>