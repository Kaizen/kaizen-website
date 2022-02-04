<?php

$pages = get_posts([
    'post_type' => 'page',
    'post_status' => 'publish',
    'meta_query' => [
        [
            'key' => '_wp_page_template',
            'value' => 'make-appointment-page.php',
            'compare' => '='
        ]
    ]
]);
if(!empty($pages))
{
    $makeAppointmentPageUrl = get_permalink($pages[0]->ID);
}

?>

<nav class="main-menu row flex-column flex-md-row justify-content-md-end" role="navigation">

    <div class="d-flex d-md-none justify-content-end">
        <?php get_template_part('template-parts/header/login-cta'); ?>
    </div>

    <?php wp_nav_menu(
        array(
            'menu' => 'main-menu',
            'container' => 'ul',
            'show_toggles' => true,
            'theme_location' => 'expanded',
            'menu_class' => 'main-menu-list d-flex flex-column align-items-end',
            'container_class' => 'my_extra_menu_class',
        )
    ); ?>

    <div class="d-flex d-md-none justify-content-end">
        <?php get_template_part('template-parts/header/language-switch'); ?>
    </div>

    <div class="main-menu__make-appointment d-flex d-md-none justify-content-end">
        <a class="btn button" href="<?= $makeAppointmentPageUrl; ?>"> <?= __('Plan gesprek', 'founders-hero-widget') ?></a>
    </div>
</nav>

