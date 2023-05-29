<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package the-best-day
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php the_ID(); ?>
		<?php
		while ( have_posts() ) :
			the_post();
		?>
			<div class="post">
				<div class="post__image-wrapper">
					<div class="post__image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
				</div>
				<div class="post__information">
					<p class="post__type"><?php the_field('type_event'); ?></>
					<p class="post__title"><?php the_title()?></p>
					<p class="post__description"><?php echo get_the_content(); ?></p>
					<div class="time-price">
						<div class="group">
							<p class="group__title">Во сколько приходить</p>
							<p class="group__data"><?php the_field('time_to_come')?></p>
						</div>
						<div class="group">
							<p class="group__title">Примерно потратите</p>
							<p class="group__data"><?php the_field('cost') ?></p>
						</div>
					</div>
					<div class="post__place">
						<div class="group">
							<p class="group__title">Находится тут</p>
							<p class="group__data"><?php the_field('place') ?></p>
						</div>
					</div>
				</div>
			</div>

		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
