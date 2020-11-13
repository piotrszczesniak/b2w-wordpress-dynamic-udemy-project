<?php
// Custom Fields - Hero banner 
$hero_title = get_post_meta(25, "hero_title", true);
$hero_subtitle = get_post_meta(25, "hero_subtitle", true);
$prelaunch_price = get_post_meta(25, "prelaunch_price", true);
$launch_price = get_post_meta(25, "launch_price", true);
$final_price = get_post_meta(25, "final_price", true);
$course_url = get_post_meta(25, 'course_url', true);
$button_text = get_post_meta(25, 'button_text', true);
?>

<!-- HERO ================================================== -->
<section id="hero">
	<article>
		<div class="container">
			<div class="row">
				<div class="col-md-5 d-flex align-items-center justify-content-center align-items-center">
					<img class="logo" src="<?php bloginfo("template_directory"); ?>/assets/img/logo-badge.png" alt="Bootstrap to WordPress" />
				</div>
				<div class="col-md-7 hero-text">
					<h1><?php echo $hero_title; ?></h1>
					<p class="lead">
						<?php echo $hero_subtitle; ?>
					</p>
					<div id="price-timeline">
						<div class="price active">
							<h4>Pre-Launch Price. <small>Ends soon!</small></h4>
							<span><?php echo $prelaunch_price; ?></span>
						</div>
						<div class="price">
							<h4>Launch Price. <small>Coming soon!</small></h4>
							<span><?php echo $launch_price; ?></span>
						</div>
						<div class="price">
							<h4>Final Price. <small>Coming soon!</small></h4>
							<span><?php echo $final_price; ?></span>
						</div>
					</div>
					<p><a href="<?php echo $course_url; ?>" class="btn btn-lg btn-danger" role="button" target="_blank"><?php echo $button_text; ?></a></p>
				</div>
			</div>
		</div>
	</article>
</section>