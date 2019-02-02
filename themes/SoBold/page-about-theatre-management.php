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
 * @package _s
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div id="panel-265" class="p-header just-banner" style="background-image: url();">
				<div class="blue-background overlay-blue"></div>
				<div class="background-logo overlay-blue-shape"></div>
				<div class="subnav-container"></div>
				
					
				<div class=" page-title p-header-content align-center">		
					<h1><?php $the_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
								$slug = $the_page->post_name;
					echo substr(strtoupper(str_replace ('-',' ', $slug)), 6);
					
					?></h1>
					<p>Integrated, effective theatre management</p>
				</div>
			</div>
		</div>
		<div class="tab thing"></div>

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
