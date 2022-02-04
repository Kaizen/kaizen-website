<?php

/**
 * Add options
 */
if( function_exists('acf_add_options_page')) {
    acf_add_options_page();
    acf_add_options_sub_page('Offices');
    acf_add_options_sub_page('Legal');
    acf_add_options_sub_page('Social');
    acf_add_options_sub_page('Other');
}

function acf_add_local_field_groups() {
    remove_filter('acf_the_content', 'wpautop' );
}

// Customise toolbar admin wysiwig
function appthemes_add_quicktags() {
    if (wp_script_is('quicktags')){
        ?>
        <script type="text/javascript">
            QTags.addButton( 'eg_h3', 'h3', '<h3>', '</h3>', 'h3', 'H3 tag', 1 );
            QTags.getButton('code').remove();
        </script>
        <?php
    }
}
add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );

// Register block types
if( function_exists('acf_register_block_type')) {
    add_action('acf/init', 'register_acf_block_types');
}

function register_acf_block_types() {
    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Header block',
                    'title' => __('Header block'),
                    'description' => __('KdB Header block'),
                    'render_template' => 'template-parts/blocks/header-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'header', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'List left block',
                    'title' => __('List left block'),
                    'description' => __('KdB List left block'),
                    'render_template' => 'template-parts/blocks/list-left-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'list', 'left' , 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'List right block',
                    'title' => __('List right block'),
                    'description' => __('KdB List right block'),
                    'render_template' => 'template-parts/blocks/list-right-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'list', 'right' , 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'CTA block',
                    'title' => __('CTA block'),
                    'description' => __('CTA block'),
                    'render_template' => 'template-parts/blocks/cta-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'cta', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Prices block',
                    'title' => __('Prices block'),
                    'description' => __('Prices block'),
                    'render_template' => 'template-parts/blocks/prices-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'prices', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Image block',
                    'title' => __('Image block'),
                    'description' => __('Image block'),
                    'render_template' => 'template-parts/blocks/image-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'image', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Quote block',
                    'title' => __('Quote block'),
                    'description' => __('Quote block'),
                    'render_template' => 'template-parts/blocks/quote-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'quote', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Text block',
                    'title' => __('Text block'),
                    'description' => __('Text block'),
                    'render_template' => 'template-parts/blocks/text-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'text', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Text image left block',
                    'title' => __('Text image left block'),
                    'description' => __('Text image left block'),
                    'render_template' => 'template-parts/blocks/text-image-left-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'text image left ', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Text image right block',
                    'title' => __('Text image right block'),
                    'description' => __('Text image right block'),
                    'render_template' => 'template-parts/blocks/text-image-right-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'text image right ', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Title block',
                    'title' => __('Title block'),
                    'description' => __('Title block'),
                    'render_template' => 'template-parts/blocks/title-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'title ', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Title right block',
                    'title' => __('Title right block'),
                    'description' => __('Title right block'),
                    'render_template' => 'template-parts/blocks/title-right-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'title ', 'block', 'right'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'List block',
                    'title' => __('List block'),
                    'description' => __('List block'),
                    'render_template' => 'template-parts/blocks/list-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'list ', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Latest news block',
                    'title' => __('Latest news block'),
                    'description' => __('Latest news block'),
                    'render_template' => 'template-parts/blocks/latest-news-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'latest ', 'news', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Video block',
                    'title' => __('Video block'),
                    'description' => __('Video block'),
                    'render_template' => 'template-parts/blocks/video-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'video ', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Contact form block',
                    'title' => __('Contact form block'),
                    'description' => __('Contact form block'),
                    'render_template' => 'template-parts/blocks/contact-form-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'contact form', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Contact form block 2',
                    'title' => __('Contact form block 2'),
                    'description' => __('Contact form block 2'),
                    'render_template' => 'template-parts/blocks/contact-form2-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'contact form', '2', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Job application form block',
                    'title' => __('Job application form block'),
                    'description' => __('Job application form block'),
                    'render_template' => 'template-parts/blocks/job-application-form-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'job form', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Job application external block',
                    'title' => __('Job application external block'),
                    'description' => __('Job application external block'),
                    'render_template' => 'template-parts/blocks/job-application-external-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'job external', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Jobs list block',
                    'title' => __('Job list block'),
                    'description' => __('Jobs list block'),
                    'render_template' => 'template-parts/blocks/jobs-list-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'jobs list', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Contact block',
                    'title' => __('Contact block'),
                    'description' => __('Contact block'),
                    'render_template' => 'template-parts/blocks/contact-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'contact', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Horizontal list block',
                    'title' => __('Horizontal list block'),
                    'description' => __('Horizontal list block'),
                    'render_template' => 'template-parts/blocks/horizontal-list-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('kdb', 'horizontal', 'list', 'block'),
            )
    );

    acf_register_block_type(
            array(
                    'mode' => 'edit',
                    'name' => 'Hero block',
                    'title' => __('Hero block'),
                    'description' => __('Hero block'),
                    'render_template' => 'template-parts/blocks/hero-block.php',
                    'icon' => 'editor-paste-text',
                    'keywords' => array('founders', 'hero', 'block'),
            )
    );
}

/**
 * Enqueue scripts and styles.
 */
function founders_scripts() {
	wp_enqueue_style( 'kdb-style', get_stylesheet_uri(), array(), VERSION );
	wp_style_add_data( 'kdb-style', 'rtl', 'replace' );
	wp_enqueue_style( 'kdb-print-style', get_template_directory_uri() . '/print.css', array(), VERSION, 'print' );
    wp_enqueue_script( 'kdb-scripts', get_template_directory_uri() . '/build/index.js', [], VERSION, true );
    wp_enqueue_script('vimeo', 'https://player.vimeo.com/api/player.js', [], VERSION, true);

}
add_action( 'wp_enqueue_scripts', 'founders_scripts' );

/**
 *
 */
function my_acf_color_pallete_script() {
    ?>
    <script type="text/javascript">
        (function($){

            acf.add_filter('color_picker_args', function( args, $field ){

                // do something to args
                args.palettes = [ '#ffffff', '#F4F4F5', '#D5DCDF', '#E2F8F9', '#9BD1E5', '#FFE5D9', '#F15025'];

                console.log(args);
                // return
                return args;
            });

        })(jQuery);
    </script>
    <?php
}
add_action('acf/input/admin_footer', 'my_acf_color_pallete_script');

/**
 *
 */
function my_acf_color_pallete_css() {
    ?>
    <style>
        .acf-color_picker .iris-picker.iris-border{
            width: 200px !important;
            height: 10px !important;
        }
        .acf-color_picker .wp-picker-input-wrap,
        .acf-color_picker .iris-picker .iris-slider,
        .acf-color_picker .iris-picker .iris-square{
            display:none !important;
        }
    </style>
    <?php
}

add_action('acf/input/admin_head', 'my_acf_color_pallete_css');


//


add_filter('acf/settings/save_json', 'acf_json_save_point');
function acf_json_save_point($path)
{

    // update path
    $path = get_template_directory() . '/acf';


    // return
    return $path;
}


add_filter('acf/settings/load_json', 'acf_json_load_point');

function acf_json_load_point($paths)
{

    // remove original path (optional)
    unset($paths[0]);


    // append path
    $paths[] = get_template_directory() . '/acf';


    // return
    return $paths;

}

/**
 * @return string
 */
function GUID()
{
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

// Add menu-link class to main menu
function menu_item_classes( $classes, $item, $args ) {
    $classes[] = "menu-link";
    return $classes;
}
add_filter( 'nav_menu_css_class' , 'menu_item_classes', 10, 4);

// Add post ids to menu
add_filter('nav_menu_link_attributes', 'menu_post_ids');
function menu_post_ids($val){
    $postid = url_to_postid( $val['href'] );
    $templateSlug = get_page_template_slug($postid);
    $currentPostType = get_post_type();

    if($templateSlug == 'blog-overview-page.php' && $currentPostType === 'post') {
        $val['data-selected'] = true;
    }

    if($templateSlug == 'job-overview-page.php' && $currentPostType === 'vacature') {
        $val['data-selected'] = true;
    }

    if($templateSlug == 'job-overview-page.php') {
        $args = array(
            'post_type' => 'vacature',
            'orderby' => 'most_recent'
        );

        $vacaturePosts = new WP_Query($args);
        $val['data-count'] =  $vacaturePosts->post_count;
    }

    $val['data-postid'] = $postid;
    return $val;
}

// display featured post thumbnails in WordPress feeds
function wcs_post_thumbnails_in_feeds( $content ) {
    global $post;
    if( has_post_thumbnail( $post->ID ) ) {
        $content = '<p>' . get_the_post_thumbnail( $post->ID ) . '</p>' . $content;
    }
    return $content;
}
add_filter( 'the_excerpt_rss', 'wcs_post_thumbnails_in_feeds' );
add_filter( 'the_content_feed', 'wcs_post_thumbnails_in_feeds' );
add_theme_support('menus');

require_once('elementor/widgets.php');

//add_filter('jpeg_quality', function($arg){return 100;});
//add_filter( 'wp_editor_set_quality', function($arg){return 100;} );

function includeFileWithVariables($fileName, $variables) {
    extract($variables);
    include($fileName);
}

add_theme_support( 'post-thumbnails' );


function founders_custom_post_type_args( $args, $post_type ) {
    if ( $post_type == "post" ) {
        $args['rewrite'] = array(
            'slug' => 'news'
        );
    }

    return $args;
}
add_filter( 'register_post_type_args', 'founders_custom_post_type_args', 20, 2 );

// Remove margin-top for admin bar
add_action('get_header', 'my_filter_head');

function my_filter_head() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}