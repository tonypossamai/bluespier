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
				<div class="overlay-blue"></div>
				<div class="overlay-blue-shape"></div>
				<div class="subnav-container"></div>
				<div class="column small-12 logo-navigation">

					<div class="nav-menu alignment">
						<div class="main-logo">
							<a href="https://www.bluespier.com">
								<img class="e-header-logo" src="<?php echo get_template_directory_uri(); ?>/images/logo-2.png" alt="Bluespier Logo">
							</a>
						</div>

						<div class="column p-header-navigation">
							<div class="row">
								<div class="tablet-menu desktop-menu column small-12">
									<?php
										wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									) );
									?>
								</div>
							</div>
						</div>	
						<div class="mobile-menu column small-6 medium-8 hide-for-large align-middle">
							<a href="#" class="data-responsive-menu-trigger" style="float: right; padding: 10px;">
								<span class="burger-menu"></span>
							</a>
						</div>
					</div>
				
					
				<div class="row p-header-content align-center">
					<div class="column small-12 large-8 text-center">
						<h1><?php $the_page = sanitize_post( $GLOBALS['wp_the_query']->get_queried_object() );
									$slug = $the_page->post_name;
						echo strtoupper(str_replace ('-',' ', $slug));
						?></h1>
						<p>Integrated, effective theatre management</p>
					</div>
				</div>
			</div>
		</div>
		<div class="thing"></div>


			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
