<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>

<section class="feature-image feature-image-default feature-image-default-alt d-flex justify-content-center align-items-center">
	<div class="d-flex flex-column justify-content-center align-items-center">
		<?php
		the_archive_title('<h1 class="page-title">', '</h1>');
		the_archive_description('<small class="archive-description">', '</small>'); ?>
	</div>
</section>

<div class="container">
	<div class="row" id="primary">
		<main id="content" class="col-md-8" role="main">

			<?php if (have_posts()) : ?>

			<?php
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
					get_template_part('template-parts/content', get_post_type());

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
			?>

		</main><!-- #main -->

		<aside class="col-md-4">
			<?php get_sidebar(); ?>
		</aside><!-- end of aside -->

	</div><!-- end of .row #primary -->
</div><!-- end of .container -->

<?php
get_footer();
