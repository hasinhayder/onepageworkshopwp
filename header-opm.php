<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package OnePageMadness
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            </div>
            <div class="col-md-8">
                <div id="navigation">
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class'=>'pull-right list-inline' ) ); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner">
    <div class="wrap"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="bannerhead">
                    <h1><?php bloginfo( 'description' ); ?></h1>
                    <a href="#" class="bh-button">Know More</a>
                    <a href="#" class="bh-button">Contact</a>
                </div>
            </div>
        </div>
    </div>
</div>