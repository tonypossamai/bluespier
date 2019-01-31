<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */


if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar-3') ) : 
endif; 
?>

<aside id="third" class="widget-area">
	<?php dynamic_sidebar( 'third' ); ?>
</aside><!-- #secondary -->

<?php ?>
<?php ?>

