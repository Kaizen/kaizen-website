<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

    <main>

        <?php

        /* Start the Loop */
        while (have_posts()) :
            the_post();

            if(get_post_type() == 'post') {
                get_template_part('template-parts/content/content', 'single-blog');
            } else {
                get_template_part('template-parts/content/content', 'single');
            }
//            get_template_part('template-parts/blog/blog-latest-news');

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->

<?php
get_footer();
