<!-- INSTRUCTOR ================================================== -->
<section id="instructor">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-7 pr-md-3 column-white-overlay">
				<div class="row">
					<div class="col-lg-8">
						<h2><?php the_field('instructor_title'); ?> <small><?php the_field('instructor_name'); ?></small></h2>
					</div>
					<div class="col-lg-4 d-flex justify-content-lg-end">
						<a href="http://twitter.com/<?php the_field('twitter'); ?>" target="_blank" class="bagde social twitter"><i class="fa fa-twitter"></i></a>
						<a href="http://facebook.com/<?php the_field('facebook'); ?>" target="_blank" class="bagde social facebook"><i class="fa fa-facebook"></i></a>
						<a href="http://googleplus.com/<?php the_field('google_plus'); ?>" target="_blank" class="bagde social gplus"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
				<p class="lead">
					<?php the_field('short_bio'); ?>
				</p>
				<?php the_field('full_bio'); ?>

				<hr />

				<h3>The Numbers. <small>They don't lie.</small></h3>

				<div class="row">
					<div class="col">
						<div class="num d-flex justify-content-center align-items-center">
							<div class="num-cont"><?php the_field('number_students'); ?><span>students</span></div>
						</div>
					</div>
					<div class="col">
						<div class="num d-flex justify-content-center align-items-center">
							<div class="num-cont"><?php the_field('number_reviews'); ?> <span>reviews</span></div>
						</div>
					</div>
					<div class="col">
						<div class="num d-flex justify-content-center align-items-center">
							<div class="num-cont"><?php the_field('number_courses'); ?><span>courses</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>