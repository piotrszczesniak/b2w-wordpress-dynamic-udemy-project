<?php
// Custom Fields - Final project features section
$final_project_section_title = get_field('final_project_section_title');
$final_project_section_body = get_field('final_project_section_body');
?>

<!-- PROJECT FEATURES ================================================== -->
<section id="project-features">
	<div class="container">
		<div class="row section-header text-center">
			<div class="col d-flex flex-column justify-content-center align-items-center">
				<h2 class="mt-4 mb-3"><?php echo $final_project_section_title; ?></h2>
				<p class="lead">
					<?php echo $final_project_section_body; ?>
				</p>
			</div>
		</div>

		<?php $projectFeatures = new WP_Query(array(
			'post_type' => 'project_feature',
			'orderby' => 'id',
			// 'order' => 'ASC',
			'posts_per_page' => 3
		));
		?>

		<div class="row text-center">
			<?php
			if ($projectFeatures->have_posts()) :
				while ($projectFeatures->have_posts()) : $projectFeatures->the_post();
					//retrieving custom field values
					$final_project_feature_image = get_field('final_project_feature_image');
					$final_project_feature_body = get_field('final_project_feature_body');
			?>
					<div class="col-md-4">
						<img class="mt-4 mb-5" src="<?php echo $final_project_feature_image['url']; ?>" alt="<?php echo $final_project_feature_image['alt']; ?>" />
						<h4><?php the_title(); ?></h4>
						<p><?php echo $final_project_feature_body; ?></p>
					</div>
			<?php endwhile;
			endif;
			wp_reset_postdata(); ?>
		</div>
	</div>
</section>