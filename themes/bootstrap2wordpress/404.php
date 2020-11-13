<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>

<section class="feature-image feature-image-default d-flex justify-content-center align-items-center">
	<h1 class="page-title">Bummer that page can't be found!</h1>
</section>

<div class="container">
	<div class="row" id="primary">
		<main id="content" class="col-md-8">
			<section class="error-404 not-found">


				<div class="page-content">

					<h2>No worries! I'll help you find your way out!</h2>

					<h3>Have a look at our pretty handsome resources: </h3>
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

					<?php
					the_widget('WP_Widget_Recent_Posts', 'title=Recently on our blog', 'before_title=<h4 class="widgettitle">', 'after_title=</h4>');
					?>

					<div class="widget widget_categories">
						<h4 class="widget-title"><?php esc_html_e('You might want to look at most read catogories', 'bootstrap2wordpress'); ?></h4>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* translators: %1$s: smiley */
					$bootstrap2wordpress_archive_content = '<p>' . sprintf(esc_html__('Try looking in the monthly archives. %1$s', 'bootstrap2wordpress'), convert_smilies(':)')) . '</p>';
					the_widget('WP_Widget_Archives',  'dropdown=0', 'before_title=<h4 class="widgettitle">', 'title=Dive into our archives', "after_title=</h4>, $bootstrap2wordpress_archive_content");

					// the_widget('WP_Widget_Tag_Cloud', 'before_title=<h4 class="widget-title">', 'after_title=</h4>');
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main>
		<aside class="col-md-4">
			<?php dynamic_sidebar('sidebar-2') ?>
		</aside>
	</div>
</div>

<?php
get_footer();
