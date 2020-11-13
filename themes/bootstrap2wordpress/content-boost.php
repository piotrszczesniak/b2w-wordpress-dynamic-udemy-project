<?php
// Custom Fields - Boost your income section
$income_image = get_field('income_feature_image');
$income_section_title = get_field('income_section_title');
$income_section_description = get_field('income_section_description');
$income_reason_1_title = get_field('reason_1_title');
$income_reason_1_description = get_field('reason_1_description');
$income_reason_2_title = get_field('reason_2_title');
$income_reason_2_description = get_field('reason_2_description');
?>

<!-- BOOST YOUR INCOME SECTION ================================================== -->
<section id="boost-income">
	<div class="container">
		<div class="row section-header">
			<div class="col d-flex flex-column justify-content-center align-items-center mt-5 mb-3">
				<?php if ($income_image) : ?>
					<img src="<?php echo $income_image["url"]; ?>" alt="<?php echo $income_image["alt"]; ?>" ; />
				<?php endif ?>
				<h2 class="mt-4 mb-3 text-center"><?php echo $income_section_title; ?></h2>
				<p class="lead">
					<?php echo $income_section_description; ?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md mb-3">
				<h3><?php echo $income_reason_1_title; ?></h3>
				<p><?php echo $income_reason_1_description; ?></p>
			</div>
			<div class="col-md mb-3">
				<h3><?php echo $income_reason_2_title; ?></h3>
				<p><?php echo $income_reason_2_description; ?></p>
			</div>
		</div>
	</div>
</section>