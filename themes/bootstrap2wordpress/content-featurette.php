<?php
// Custome Fields - Video section
$video_embed_code = get_field('promo_video');
$video_cta_slogan = get_field('video_cta_slogan');
?>
<!-- VIDEO FEATURES ================================================== -->
<section id="video-features">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<h2 class="text-center"><?php echo $video_cta_slogan; ?></h2>
				<?php echo $video_embed_code; ?>
			</div>
		</div>
	</div>
</section>