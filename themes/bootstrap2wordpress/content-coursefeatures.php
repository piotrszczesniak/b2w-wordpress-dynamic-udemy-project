<?php
// Custom Fields - Course features section
$features_section_image = get_field("features_section_image");
$features_section_title = get_field("features_section_title");
$features_section_body = get_field("features_section_body");
?>
<!-- OUR COURSE FEATURES ================================================== -->
<section id="course-features">
	<div class="container">
		<div class="row section-header">
			<div class="col d-flex flex-column justify-content-center align-items-center mt-5 mb-3">
				<img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']; ?>" />
				<h2 class="mt-4 mb-3 text-center"><?php echo $features_section_title; ?></h2>
				<?php if ($features_section_body) : ?>
					<p class="lead">
						<?php echo $features_section_body; ?>
					</p>
				<?php endif; ?>
			</div>
		</div>

		<div class="row text-center">

			<?php $courseIcons = new WP_Query(array(
				'post_type' => 'course_feature',
				'orderby' => 'post_id',
				'order' => 'ASC'
			));

			while ($courseIcons->have_posts()) : $courseIcons->the_post();

			?>


				<div class="col-lg-2 col-md-4 my-4">

					<i class="<?php the_field('course_feature_icon'); ?>"></i>
					<h5><?php the_title(); ?></h5>

				</div><!-- end col -->

			<?php endwhile;
			wp_reset_postdata();
			?>

		</div><!-- end of row -->
	</div><!-- end of container -->
</section>