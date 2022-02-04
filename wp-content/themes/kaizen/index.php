<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

    <main class="index">
        <div class="container">
            <h1>Heading 1</h1>
            <h2>Heading 1</h2>
            <h3>Heading 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et lobortis tortor. Nulla malesuada nec mi at lobortis. Phasellus convallis lacus ut egestas euismod. Nullam non congue lorem. Suspendisse cursus ipsum lectus, in auctor urna suscipit bibendum. Nulla facilisi. Nam aliquam eleifend odio, non pretium risus tincidunt laoreet. Vivamus in posuere urna. Morbi suscipit urna libero, nec dapibus eros pellentesque finibus. Nulla ut ligula et urna pellentesque scelerisque. Vivamus ultricies quam felis, non tincidunt quam consequat non.

                Nulla lobortis neque at sapien pharetra, vel egestas diam elementum. Vivamus ex diam, ornare eget accumsan quis, ornare sed elit. Nunc porta sed nunc at aliquam. Integer egestas maximus elit, in faucibus velit mollis ut. Suspendisse mattis ex id nulla eleifend, id mattis justo maximus. Etiam lobortis fringilla nulla, nec auctor libero venenatis ut. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed in erat dictum, cursus nisi nec, finibus neque.</p>

            <label>label</label>
            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et lobortis tortor. Nulla malesuada nec mi at lobortis. Phasellus convallis lacus ut egestas euismod. Nullam non congue lorem. Suspendisse cursus ipsum lectus, in auctor urna suscipit bibendum. Nulla facilisi. Nam aliquam eleifend odio, non pretium risus tincidunt laoreet. Vivamus in posuere urna. Morbi suscipit urna libero, nec dapibus eros pellentesque finibus. Nulla ut ligula et urna pellentesque scelerisque. Vivamus ultricies quam felis, non tincidunt quam consequat non.</blockquote>

            <ol class="theme--light-blue">
                <li><strong>Eenmanszaak</strong><br/>Number one</li>
                <li><strong>Vof</strong><br/>Number two</li>
                <li>Number three</li>
            </ol>

            <ol class="theme--orange">
                <li><strong>Eenmanszaak</strong><br/>Number one</li>
                <li><strong>Vof</strong><br/>Number two</li>
                <li>Number three</li>
                <li>Number four</li>
                <li>Fusce magna metus, finibus eget sagittis id, sodales vitae sapien. Nam ultrices nisi non metus mattis lobortis.</li>
            </ol>

            <h2>test</h2>

            <ul class="theme--orange">
                <li><strong>Eenmanszaak</strong><br/>Number one</li>
                <li><strong>Vof</strong><br/>Number two</li>
                <li>Number three</li>
                <li>Number four</li>
                <li>Fusce magna metus, finibus eget sagittis id, sodales vitae sapien. Nam ultrices nisi non metus mattis lobortis.</li>
            </ul>

            <p class="text--small">Fusce est leo, fermentum et tristique id, pellentesque non ex. Fusce magna metus, finibus eget sagittis id, sodales vitae sapien. Nam ultrices nisi non metus mattis lobortis. Duis a auctor leo. Donec efficitur magna mauris, nec sagittis ante porta ac. Aliquam erat volutpat. Donec at faucibus orci.</p>
            <p class="text--tiny">Fusce est leo, fermentum et tristique id, pellentesque non ex. Fusce magna metus, finibus eget sagittis id, sodales vitae sapien. Nam ultrices nisi non metus mattis lobortis. Duis a auctor leo. Donec efficitur magna mauris, nec sagittis ante porta ac. Aliquam erat volutpat. Donec at faucibus orci.</p>
            <div class="text--tiny text--upper">17 Mei 2020</div>

            <a href="#">Een anchor element</a>
        </div>

        <?php
        if (have_posts()) {

            // Load posts loop.
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/content/content');
            }

            // Previous/next page navigation.
            twentynineteen_the_posts_navigation();

        } else {

            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content/content', 'none');

        }
        ?>
    </main>
<?php
get_footer();
