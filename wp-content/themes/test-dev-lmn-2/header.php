<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-dev-lmn-2
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<?php wp_body_open(); ?>
<div style="display: none">
    <?php
    include THEME_PATH.'/image/lemon.svg';
    include THEME_PATH.'/image/arrow.svg';
    ?>
</div>
<div id="page" class="site">
	<header id="masthead" class="site-header">
        <a href="<?= get_home_url()?>">
            <svg viewBox='0 0 116.64 30' width='70' height='50' class="svg-white">
                <use xlink:href='#logo'></use>
            </svg>
        </a>
        <div class="lang">
            <span class="lang-margin">EN</span>
            <span>FR</span>
        </div>
        <div class="right">
            <div class="wpnm-button">
                <div class="wpnm-button-inner-left"></div>
                <div class="wpnm-button-inner"></div>
            </div>
            <div class="menu-btn nav">
                <span class="text-mn">MENU</span>
                <div class="one"></div>
                <div class="two"></div>
                <div class="three"></div>
            </div>
            <div class="menu-btn-close">
                <span class="text-mn-close">MENU</span>
                <img src="<?= THEME_URI ?>/image/close.png">
            </div>
        </div>
        <div class="open-menu" style="display: none">
            <div class="open-menu-content">
                <div class="adrs">
                    <div class="adrs-title">LEMON</div>
                    <br>
                    <div class="adrs-adrs">
                        Raffinerie 4 <br>
                        2000 Neuchatel <br>
                        Switzerland <br>
                        <br>
                    </div>
                    <div class="adrs-contact">
                        +41 32 730 40 20 <br>
                        hello@lemon.ch
                    </div>
                    <br>
                    <div class="social-logo">
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-linkedin"></i>
                    </div>
                </div>
                <div class="space-btwn"></div>
                <div class="mn-list">
                    <nav id="site-navigation" class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'test-dev-lmn-2' ); ?></button>
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-1',
                                'menu_id'        => 'primary-menu',
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</div>
<script>

</script>