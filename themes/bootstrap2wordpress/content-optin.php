<?php
// Custom Fields -  Call to action section
$cta_slogan_bold = get_post_meta(25, 'cta_slogan_bold', true);
$cta_slogan_thin = get_post_meta(25, 'cta_slogan_thin', true);
$cta_button_text = get_post_meta(25, 'cta_button_text', true);
?>

<!-- OPT IN SECION ================================================== -->
<section id="optin">
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="col-md-8">
				<p class="lead"><span><?php echo $cta_slogan_bold; ?></span> <?php echo $cta_slogan_thin; ?></p>
			</div>
			<div class="col-md-4">
				<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#subscribeModal"><?php echo $cta_button_text; ?></button>
			</div>
		</div>
	</div>
	<!-- end of  container -->
</section>