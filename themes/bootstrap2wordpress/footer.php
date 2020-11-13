<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>

<?php wp_footer(); ?>

<!-- SIGNUP ================================================== -->
<section id="signup">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-6 offset-md-3">
				<h3>Are you ready to take your coding skills to the <span>next level</span>?</h3>
				<p><a href="" class="btn btn-lg btn-block btn-success" data-toggle="modal" data-target="#subscribeModal">Yes, sign me up!</a></p>
			</div>
		</div>
	</div>
</section>

<!-- FOOTER ================================================== -->
<footer id="footer">
	<div class="container">
		<div class="row align-items-lg-center">
			<div class="col-lg-3 my-3">
				<p class="mb-0 text-center">
					<a href="<?php echo home_url() ?>"><img src="<?php bloginfo("template_directory"); ?>/assets/img/logo.png" alt="Wordpress to Bootstrap Logo" /></a>
				</p>
			</div>
			<div class="col-lg-6 my-3">
				<!-- NAV BAR ============================================ -->
				<nav class="navbar navbar-expand-lg justify-content-center navbar-dark role=" navigation">
					<div class="container text-center d-flex justify-content-center align-items-center">
						<?php
						wp_nav_menu(array(
							'theme_location'    => 'footer',
							'depth'             =>  1,
							'container'         => 'div',
							// 'container_class'   => 'collapse navbar-collapse',
							// 'container_id'      => 'navbarMobile',
							'menu_class'        => 'navbar-nav m-0 p-0',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						));
						?>
					</div><!-- end of container -->
				</nav><!-- end of nav -->
				<nav class="nav justify-content-center d-none">
					<a class="nav-link active" href="#">Home</a>
					<a class="nav-link" href="#">Blog</a>
					<a class="nav-link" href="#">Resuorces</a>
					<a class="nav-link" href="#">Contact</a>
					<a class="nav-link signup-link-red" href="#">Sign up now</a>
				</nav>
			</div>
			<div class="col-lg-3 my-3">
				<p class="mb-0 text-lg-right text-center">&#169; <?php echo date('Y') ?> by <?php the_author() ?></p>
			</div>
		</div>
	</div>
	<!--container-->
</footer>

<!-- MODAL POP UP ================================================== -->
<div class="modal fade" id="subscribeModal" tabindex="-1" aria-labelledby="subscribeModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="subscribeModal"><i class="fa fa-envelope"></i> Subscribe to our mailing list</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-justify">
					Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses,
					<em>for free!</em>
				</p>
				<?php echo do_shortcode('[contact-form-7 id="204" title="Subscribe Form"]'); ?>
			</div>
			<div class="modal-footer">
				<p class="text-justify">
					<small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br />No Spam. Just good
						stuff. We respect your privacy &amp; you may unsubscribe at any time.</small>
				</p>
			</div>
		</div>
	</div>
</div>

<!-- BOOTSTRAP CORE JAVASCRIPT ================================================== -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<!-- FontAwesome script ================================================== -->
<script src="https://kit.fontawesome.com/799212c64a.js" crossorigin="anonymous"></script>

<!-- Custom JS script ================================================== -->
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

<!-- TypeKit Fonts from Adobe ================================================== -->
<script type="text/javascript" src="//use.typekit.net/gla7wnd.js"></script>
<script type="text/javascript">
	try {
		Typekit.load();
	} catch (e) {}
</script>

</body>

</html>