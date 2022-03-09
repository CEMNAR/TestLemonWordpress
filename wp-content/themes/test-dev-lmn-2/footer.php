<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-dev-lmn-2
 */

?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

	<footer id="colophon" class="site-footer">
        <div class="footer-cntc">
            <div class="footer-mail">
                <i class="fa-solid fa-envelope"><span>hello@lemon.ch</span></i>
            </div>
            <div class="footer-phone">
                <i class="fa-solid fa-phone"><span>+41 32 730 40 20</span></i>
            </div>
        </div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>
