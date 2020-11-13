<!-- TESTIMONIALS ================================================== -->
<section id="testimonials">
	<div class="container">
		<div class="row section-header text-center">
			<div class="col d-flex flex-column justify-content-center align-items-center">
				<h2 class="mt-4 mb-5">What People Are Saying About Brad</h2>
			</div>
		</div><!-- row section header-->
		<div class="row">
			<div class="col-md-8 offset-md-2">

				<?php
				$customerReview = new WP_Query(array(
					'post_type' => 'customer_review',
					'orderby' => 'id',
					'order' => 'ASC',
					'posts_per_page' => 4
				));
				?>
				<?php if ($customerReview->have_posts()) :
					while ($customerReview->have_posts()) : $customerReview->the_post(); ?>

						<!-- Custom Fields -->
						<?php
						$review_body = get_field('review_body');
						$customer_image = get_field('customer_image');
						?>
						<div class="row testimonial my-5">
							<div class="col-lg-4 d-flex justify-content-center align-items-start">
								<img class="rounded-circle my-3" src="<?php echo $customer_image['url']; ?>" alt="<?php echo $customer_image['alt']; ?>">
							</div>
							<div class="col-lg-8">
								<blockquote class="blockquote text-md-center text-lg-left">
									<p class="font-italic">
										<?php echo $review_body; ?>
									</p>
									<cite class="text-muted">&mdash; <?php echo the_title(); ?></cite>
								</blockquote>
							</div>
						</div>
						<!--row testimonial-->
				<?php endwhile;
				endif;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<!--container -->
</section>