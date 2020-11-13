<?php
/*
 Template Name: Full-width Template
*/

get_header();
?>

<!-- FEATURE IMAGE  ============================================ --->
<?php
if (has_post_thumbnail()) : ?>

	<!-- check if the thumbnail exists -->
	<section class="feature-image d-flex justify-content-center align-items-center" style="
		background-image: url('<?php the_post_thumbnail_url('large'); ?>'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>

<?php else : ?>

	<!-- fallback thumbnail if thumbnail doesn't exist -->
	<section class="feature-image feature-image-default d-flex justify-content-center align-items-center">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</section>

<?php
endif;
?>

<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-md-12">
			<section class="main-content">
				<?php while (have_posts()) : the_post();
					the_content();
				endwhile; ?>
			</section><!-- end of .main-content -->
		</div><!-- end of #content -->
	</div><!-- end of #primary -->
</div><!-- end of .container -->

<?php
get_footer();
?>