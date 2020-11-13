<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

?>

<article class="text-left post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h3><a href="<?php the_permalink() ?> "><?php the_title(); ?></a></h3>
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

		</div><!-- end of post details -->
	</header><!-- end of post header -->
	<?php if (has_post_thumbnail()) :; ?>
		<div class="post-image">
			<?php bootstrap2wordpress_post_thumbnail(); ?>
		</div>
		<!--end of post image -->
	<?php endif; ?>
	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- end of post-excerpt -->
</article><!-- #post-<?php the_ID(); ?> -->