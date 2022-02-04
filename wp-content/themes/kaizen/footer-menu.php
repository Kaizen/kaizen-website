<nav class="footer-menu" role="navigation">
    <?php
    wp_nav_menu(
        array(
            'menu' => 'footer-menu',
            'container' => '',
            'show_toggles' => true,
            'theme_location' => 'expanded',
            'menu_class' => 'footer-menu menu-link'
        )
    );
    ?>
</nav>

