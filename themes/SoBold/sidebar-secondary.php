<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-sidebar-2') ) : 
endif; 

?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'secondary' ); ?>
</aside><!-- #secondary -->
