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
					<div class="row align-middle">
						<div class="column small-6 medium-4 large-3">
							<a href="/"><img class="e-header-logo" src="/assets/images/design/logo.png" alt="Bluespier Logo"></a>
						</div><div class="column p-header-navigation">
							<div class="row"><div class="column small-12">
						<nav>
							<ul class="menu simple">
								<li><a href="/">Home</a></li>
								<li><a href="/about-us">About Us</a></li>
								<li><a href="/software">Software</a></li>
								<li><a href="/news">News</a></li>
								<li><a href="/customer-centre">Customer Centre</a></li>
								<li><a href="/contact-us">Contact Us</a></li></ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="column small-6 medium-8 hide-for-large align-middle">
				<a href="#" data-responsive-menu-trigger="" style="float: right; padding: 10px;">
				<span class="burger-menu"></span>
				</a>
			</div>
		</div>
		
		<div class="row p-header-content align-center"><div class="column small-12 large-8 text-center"><h1>Theatre Management</h1><p>Integrated, effective theatre management</p></div></div></div>


					<div class="column small-12 large-8 text-center">
						<h1>Theatre Management</h1>
						<p>Integrated, effective theatre management</p>
					</div>
				</div>
			</div>

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
<?php
// get_sidebar();
get_footer();
