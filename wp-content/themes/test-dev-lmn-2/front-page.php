<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test-dev-lmn-2
 */

get_header();
?>

	<main id="primary" class="site-main">
        <div class="image-back">
            <img src="<?= THEME_URI ?>/image/background_lemon.png">
<!-- position absolute svg-->
        </div>
        <div class="content-text">
            <?php
            while (have_posts()) {
                the_post();
                the_title();
                the_content();
            }
            ?>
        </div>
        <div class="image-arrow">
            <svg viewBox='0 0 11.23 34.99' width='30' height='30'>
                <use xlink:href='#arrow'></use>
            </svg>
        </div>
	</main><!-- #main -->

<?php
get_footer();
