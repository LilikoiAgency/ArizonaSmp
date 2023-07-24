<?php
/*
Template Name: Gutenberg Block Template
*/

get_header();

// Retrieve the Gutenberg block content
$block_content = get_the_content();

// Display the block content
echo '<div class="gutenberg-block">';
echo $block_content;
echo '</div>';

get_footer();