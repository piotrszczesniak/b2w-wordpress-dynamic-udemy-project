<?php
/*
Template Name: Resources Page
*/
get_header();
?>

<!-- FEATURE IMAGE  ============================================ --->
<?php
if (has_post_thumbnail()) : ?>

	<!-- check if the thumbnail exists -->
	<section class="feature-image d-flex justify-content-center align-items-center" style="
		background-image: url('<?php echo the_post_thumbnail_url('large'); ?>'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;">
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

<?php

if (have_posts()) : while (have_posts()) : ?>

		<div class="container">
			<div class="row" id="primary">
				<div id="content" class="col-md-12">
					<section class="main-content">

						<?php
						the_post();
						the_content();
						?>

						<hr />

						<div class="resurce-row row">
							<?php
							$resources = new WP_Query(array(
								'post_type' => 'useful_resources',
								'orderby' => 'id'
							));

							if ($resources->have_posts()) :
								while ($resources->have_posts()) : $resources->the_post();
									$resources_cta_button_link = get_field('resources_cta_button_link');
									$resources_cta_button_text = get_field('resources_cta_button_text');
							?>
									<div class="col-md-6 col-lg-4 mb-5">
										<a href="<?php the_permalink(); ?>">
											<img src="<?php echo the_post_thumbnail_url(); ?>" alt="Just Host logo" />
											<!-- how to get post_thumbnail alt -->
										</a>
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<?php the_content(); ?>
										<a href="<?php echo $resources_cta_button_link; ?>" class="btn btn-success"><?php echo $resources_cta_button_text; ?></a>
									</div><!-- end of column -->
							<?php
								endwhile;
							endif;
							wp_reset_postdata();
							?>
						</div>
					</section><!-- end of main content -->
				</div><!-- end of id content -->
			</div><!-- end of row id=primary -->
		</div><!-- end of container -->


<?php
	endwhile;
endif;
?>



<!-- MAIN CONTENT ============================================ -->
<div class="container d-none">
	<div class="row" id="primary">
		<div id="content" class="col-md-12">
			<section class="main-content">
				<p class="lead">
					Welcome to the Bootstrap to WordPress resources page! On this page, I will provide you with useful resources, plugins, tools,
					applications, and websites to help make your life as a coder a little bit easier.
					<strong> I recommend adding this page to your bookmarks for convenient future reference.</strong>
				</p>
				<p>
					<em>Please keep in mind that some of the following resources are my affiliate links, and should you decide to make a purchase,
						I will earn a small commission — at no extra cost to you! I am recommending these resources only because I have found them
						to be incredibly helpful. Don’t spend your money on any products or resources unless you think they will benefit you.</em>
				</p>
				<hr />
				<div class="resurce-row row">
					<div class="col-md-6 col-lg-4 mb-5">
						<a href="">
							<img src="./assets/img/justhost-logo.jpg" alt="Just Host logo" />
						</a>
						<h3><a href="">JustHost</a></h3>
						<p>
							When I made my very first website about 7 years ago, I signed up with Justhost — and I’ve never looked back! Since then,
							I’ve built hundreds of websites with Justhost as my only hosting provider. I recommend these guys to all of my clients, my
							students, my family and friends.
						</p>
						<p>
							If you’re looking to start your very first website, or are looking for a reliable hosting provider — look no further. You
							get a free domain name for life, great customer service, unlimited domains, unlimited email accounts, unlimited GBs of
							space, an anytime money back guarantee and my favourite part: You can set up a blog website in minutes with 1-click
							WordPress Install. These guys are awesome! Get started with Justhost.
						</p>
						<a href="" class="btn btn-success">Get started with JustHost</a>
					</div><!-- end of column -->
					<div class="col-md-6 col-lg-4 mb-5">
						<a href="">
							<img src="./assets/img/coda2-logo.jpg" alt="Cod2 logo" />
						</a>
						<h3><a href="">Coda2</a></h3>
						<p>
							If you’re serious about coding, or you want to start out with a solid tool to code with, I strongly recommend Coda 2 for
							Mac. A beautiful User Interface with tabbed navigation, a super sidebar, and a simple layout. The features are outrageous
							and extensive, with code folding, smart complete, auto indentation, GIT integration, a built-in terminal, iCloud support —
							to name a few. The features seem to be endless.
						</p>
						<p>
							I use Coda 2 for all of my courses & tutorials, and if you decide to use Coda 2 as your editor of choice, it would greatly
							benefit you when taking my courses. The price of the editor weighs in at $75, but it’s worth every penny — in my honest
							opinion.
						</p>
						<a href="" class="btn btn-success">Check out Coda2</a>
					</div><!-- end of column -->
					<div class="col-md-6 col-lg-4 mb-5">
						<a href="">
							<img src="./assets/img/dropbox-logo.jpg" alt="DropBox logo" />
						</a>
						<h3><a href="">DropBox</a></h3>
						<p>
							This tool should go without saying. But if I have to explain — you <strong>need</strong> this tool. I use it 24/7 —
							literally. Dropbox is where I store my personal & business related data. It's accessible anywhere, and regularly backs up
							my important information.
						</p>
						<p>
							Because my data is accessible anywhere, Dropbox allows me to work on a client project at home, on the bus, in a coffee
							shop, or at a friend's house. It's truly a gem of a tool, and I think you'll believe me.
						</p>
						<a href="" class="btn btn-success">Try DropBox for free</a>
					</div><!-- end of column -->
					<div class="col-md-6 col-lg-4 mb-5">
						<a href="">
							<img src="./assets/img/dropbox-logo.jpg" alt="DropBox logo" />
						</a>
						<h3><a href="">DropBox</a></h3>
						<p>
							This tool should go without saying. But if I have to explain — you <strong>need</strong> this tool. I use it 24/7 —
							literally. Dropbox is where I store my personal & business related data. It's accessible anywhere, and regularly backs up
							my important information.
						</p>
						<p>
							Because my data is accessible anywhere, Dropbox allows me to work on a client project at home, on the bus, in a coffee
							shop, or at a friend's house. It's truly a gem of a tool, and I think you'll believe me.
						</p>
						<a href="" class="btn btn-success">Try DropBox for free</a>
					</div><!-- end of column -->
				</div><!-- end of resource row -->
			</section><!-- end of main content -->
		</div><!-- end of id content -->
	</div><!-- end of row id=primary -->
</div><!-- end of container -->

<?php
get_footer();
