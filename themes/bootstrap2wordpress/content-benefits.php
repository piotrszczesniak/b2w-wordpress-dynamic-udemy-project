<?php
// Custom Fields - Who should take this course section
$who_section_image =  get_field("who_section_image");
$who_section_title =  get_field("who_section_title");
$who_section_body =  get_field("who_section_body");
?>
<!-- WHO BENEFITS ================================================== -->
<section id="who-benefits">
	<div class="container">
		<div class="row section-header">
			<div class="col d-flex flex-column justify-content-center align-items-center mt-5 mb-3">
				<?php if ($who_section_image) : ?>
					<img src="<?php echo $who_section_image['url']; ?>" alt="<?php echo $who_section_image['alt']; ?>" />
				<?php endif; ?>
				<?php if ($who_section_title) : ?>
					<h2 class="mt-4 mb-3 text-center"><?php echo $who_section_title; ?></h2>
				<?php endif; ?>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-md-12 mb-3">
				<?php if ($who_section_body) : ?>
					<?php echo $who_section_body; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>