<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

<!-- Footer -->


<?php get_sidebar();?>
<?php get_sidebar('secondary');?>
<?php get_sidebar('third');?>

<div id="panel-256" class="p-footer">
	<div class="row p-footer-items">


	</div>

				<div class="p-footer-copyright">
					<div class="row">
						<div class="column small-12 medium-12 large-6">
							<span>© Copyright Bluespier 2019. </span> 
							<a href="https://sobold.com/" target="_blank">Web Management by SoBold</a>
						</div>
						<div class="column small-12 medium-12 large-6 text-right links">
							<a href="https://www.clanwilliamgroup.com/" target="_blank">Clanwilliam Group</a>
							<a href="https://www.bluespier.com/cookies">Cookies</a>
							<a href="https://www.bluespier.com/terms">Terms</a>
							<a href="https://www.bluespier.com/privacy-statement">Privacy Statement</a>
						</div>
					</div>
				</div>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
