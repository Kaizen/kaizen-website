<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?><!doctype html>
<html lang="<?= ICL_LANGUAGE_CODE; ?>">

<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>

    <link rel="stylesheet" href="https://use.typekit.net/ikh5aun.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="layout-container">
<div class="layout-wrapper">
    <header class="header-menu w-100">

        <!--  Mobile  -->
        <div class="main-menu__mobile d-flex justify-content-between d-md-none ">
            <a href="/<?= ICL_LANGUAGE_CODE ?>" class="logo d-block">
                <img alt="logo" src="<?php echo get_theme_file_uri() . "/images/founders-logo.svg" ?>"/>
            </a>
            <div class="menu-toggle menu-link">
                <span class="menu-toggle__open">
                    <?= __('<- Menu', 'founders_header'); ?>
                </span>
                <span class="menu-toggle__close">
                    <?= __('Menu ->', 'founders_header'); ?>
                </span>
            </div>
        </div>

        <!--  Desktop  -->
        <div class="main-menu-wrapper d-none d-md-flex justify-content-between flex-row">

            <div class="col-4 col-md-6 col-lg-4 px-0">
                <a href="/<?= ICL_LANGUAGE_CODE ?>" class="logo d-block">
                    <img alt="logo" src="<?php echo get_theme_file_uri() . "/images/founders-logo.svg" ?>"/>
                </a>
            </div>

            <div class="header__middle d-flex align-items-center justify-content-center col-4 d-md-none d-lg-flex px-0">
                <a class="contact menu-link" href="#contact" target="_self"><?= __('Neem contact op ↓', 'founders_header'); ?></a>
            </div>

            <div class="header__right d-flex align-items-center justify-content-md-end col-4 col-md-6 col-lg-4 px-0">
                <?php get_template_part('template-parts/header/language-switch'); ?>
                <?php get_template_part('template-parts/header/login-cta'); ?>
            </div>
        </div>

        <!-- Main menu  -->
        <div class="container main-menu__container">
            <?php locate_template( ['main-menu.php'], true );?>
        </div>
    </header>

    <div id="page" class="main-content">
