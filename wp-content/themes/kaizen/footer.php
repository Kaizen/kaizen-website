<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
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

    <footer id="footer" class="d-block">
        <div class="container">
            <div class="row flex-column flex-sm-row-reverse justify-content-sm-center">

                <!-- Join the club -->
                <div class="footer__address-social-wrapper col-12 offset-sm-0 col-sm-4 col-md-4 col-lg-4 col-xl-5">

                    <!-- Contact -->
                    <div class="contact d-flex flex-wrap justify-content-start justify-content-md-end text-md-right">
                        <a href="/<?= ICL_LANGUAGE_CODE ?>" class="logo d-block">
                            <img alt="logo" src="<?php echo get_theme_file_uri() . "/images/founders-logo.svg" ?>"/>
                        </a>
                        <div class="font-weight-bold"><?= __('Founders Finance B.V.', 'founders_footer'); ?></div>
                        <div><a href="mailto:<?= __('info@founders.nl', 'founders_footer'); ?>" target="_blank"><?= __('info@founders.nl', 'founders_footer'); ?></a></div>
                        <div><a href="tel:<?= __('020-7550066', 'founders_footer'); ?>"><?= __('020-7550066', 'founders_footer'); ?></a></div>
                    </div>

                    <!-- Social -->
                    <div class="social w-100 offset-lg-0 d-flex align-items-center justify-content-start justify-content-md-end text-md-right">
                        <a class="facebook mr-3" href="<?= get_field('facebook', 'option'); ?>" target="_blank">
                            <img alt="Facebook" src="<?php echo get_template_directory_uri() . '/images/Facebook.svg' ?>"/>
                            <img class="social-hover" alt="Facebook" src="<?php echo get_template_directory_uri() . '/images/Facebook-hover.svg' ?>"/>
                        </a>
                        <a class="instagram mr-3" href="<?= get_field('instagram', 'option'); ?>" target="_blank">
                            <img alt="Instagram" src="<?php echo get_template_directory_uri() . '/images/Instagram.svg' ?>"/>
                            <img class="social-hover" alt="Instagram" src="<?php echo get_template_directory_uri() . '/images/Instagram-hover.svg' ?>"/>
                        </a>
                        <a class="linkedin mr-3" href="<?= get_field('linkedin', 'option'); ?>" target="_blank">
                            <img alt="LinkedIn" src="<?php echo get_template_directory_uri() . '/images/LinkedIn.svg' ?>"/>
                            <img class="social-hover" alt="LinkedIn" src="<?php echo get_template_directory_uri() . '/images/LinkedIn-hover.svg' ?>"/>
                        </a>
                        <a class="youtube" href="<?= get_field('youtube', 'option'); ?>" target="_blank">
                            <img alt="Youtube" src="<?php echo get_template_directory_uri() . '/images/Youtube.svg' ?>"/>
                            <img class="social-hover" alt="Youtube" src="<?php echo get_template_directory_uri() . '/images/Youtube-hover.svg' ?>"/>
                        </a>
                    </div>

                    <!-- Legal/Privacy -->
                    <div class="legal w-100 d-flex flex-column justify-content-start justify-content-md-end text-md-right">
                        <div class="footer-secondary-link mb-2"><a class="theme-color--mystic cookie-preferences" href=""><?= __('Cookie instellingen', 'founders_footer'); ?></a></div>
                        <div class="footer-secondary-link mb-2"><a class="theme-color--mystic" href="<?= wp_get_attachment_url(get_field('terms_and_conditions', 'option')['ID']); ?>" target="_blank"><?= __('Algemene voorwaarden', 'founders_footer'); ?></a></div>
                        <div class="footer-secondary-link"><a class="theme-color--mystic" href="<?= wp_get_attachment_url(get_field('privacy_statement', 'option')['ID']); ?>" target="_blank"><?= __('Privacystatement', 'founders_footer'); ?></a></div>
                    </div>
                </div>

                <!-- Menu and location -->
                <div class="col-12 offset-sm-0 col-sm-8 col-md-6 offset-lg-1 col-lg-6 offset-xl-0 col-xl-7 d-flex flex-column flex-sm-row">

                    <!-- Menu items -->
                    <div class="col-sm-5 px-0">
                        <?php locate_template(['footer-menu.php'], true); ?>
                    </div>

                    <!-- Locations -->
                    <div class="col-12 col-sm-7 d-flex">
                        <div class="row offices flex-row">
                            <div class="col-12 col-md-4 mb-3 mb-md-0 px-0 px-md-1">
                                <h4 class="text-uppercase offices__title"><?=__('Locaties', 'founders_footer'); ?></h4>
                            </div>
                            <div class="col-12 col-md-8 px-0 px-md-1">

                                <?php
                                $addresses = get_field('addresses', 'option');
                                foreach ($addresses as &$address) {
                                    ?>
                                    <address>
                                        <div class="city menu-link"><?php echo $address['city'] ?></div>
                                        <div class="phone small">
                                            <a href="tel:<?php echo $address['phone'] ?>" target="_blank"><?php echo $address['phone'] ?></a>
                                        </div>
                                        <a href="<?php echo $address['map_url'] ?>" target="_blank">
                                            <div class="address small"><?php echo $address['address'] ?></div>
                                            <div class="postalcode small"><?php echo $address['postalcode'] ?></div>
                                        </a>
                                    </address>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div><!-- #page -->


    <?php wp_footer(); ?>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal">
        <div class="modal__background"></div>
        <div class="modal__content d-flex justify-content-center align-items-center">

        </div>
        <div class="modal__close">
            <svg version="1.1" id="Laag_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                    <style type="text/css">
                        .st0{fill:#FFFFFF;}
                    </style>
                <rect x="14.5" y="2.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.5748 15.9853)" class="st0" width="3" height="27.7"/>
                <rect x="2.1" y="14.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.642 15.9473)" class="st0" width="27.7" height="3"/>
                </svg>
        </div>
    </div>

    <?php  include 'gdpr.php'; ?>
    <?php include get_template_directory() . '/template-parts/generic/cookie-message.php'; ?>
</body>
</html>
