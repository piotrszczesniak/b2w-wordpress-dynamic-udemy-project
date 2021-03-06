<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bootstrap_to_WordPress
 */

get_header();
?>

<div class="container">
	<div class="row" id="primary">
		<div id="content" class="col-md-8">
			<article class="post">
				<header>
					<h3><?php the_title(); ?></h3>
					<div class="post-details">
						<i class="fa fa-user"></i> <?php the_author(); ?>
						<i class="fa fa-clock-o"></i> <time> <?php echo get_the_date(); ?></time>
						<i class="fa fa-folder"></i> <?php the_category(', '); ?>
						<?php echo the_tags('<i class="fa fa-tag"></i> ', ', ', ''); ?>
						<div class="post-comments-badge">
							<a href="<?php comments_link() ?>">
								<i class="fa fa-comments"></i>
								<p class="lead"><?php comments_number(0, 1, '%') ?> </p>
							</a>
						</div><!-- end of post comments -->
						<?php edit_post_link(' Edit post', '<i class="fa fa-pencil" aria-hidden="true"></i>', ''); ?>

					</div><!-- end of .post-details -->
				</header><!-- end of post header -->

				<?php if (has_post_thumbnail()) :; ?>
					<div class="post-image">
						<?php bootstrap2wordpress_post_thumbnail(); ?>
					</div>
					<!--end of .post-image -->
				<?php endif; ?>
				<div class="post-body">
					<?php the_content(); ?>
				</div><!-- end of .post-body -->
			</article><!-- end of .post -->

			<div id="comments">
				<div class="comments-wrap">

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>
				</div><!-- end of commentsw-wrap -->
			</div><!-- end of comments -->
		</div><!-- end of #content -->
		<aside class="col-md-4">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>
<?php

get_footer();
