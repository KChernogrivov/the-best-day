<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-best-day
 */

?>

<article id="post-<?php the_ID(); ?>" class="search-post">
	<div class="search-post__image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
	<div class="search-post__information">
		<?php the_title( sprintf( '<h2 class="search-post__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></p>' ); ?>
		<p><svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M5.07812 1.25V2.9375M14.9219 1.25V2.9375M1.5625 13.0625V4.625C1.5625 4.17745 1.78474 3.74823 2.18032 3.43176C2.57591 3.11529 3.11243 2.9375 3.67188 2.9375H16.3281C16.8876 2.9375 17.4241 3.11529 17.8197 3.43176C18.2153 3.74823 18.4375 4.17745 18.4375 4.625V13.0625M1.5625 13.0625C1.5625 13.5101 1.78474 13.9393 2.18032 14.2557C2.57591 14.5722 3.11243 14.75 3.67188 14.75H16.3281C16.8876 14.75 17.4241 14.5722 17.8197 14.2557C18.2153 13.9393 18.4375 13.5101 18.4375 13.0625M1.5625 13.0625V7.4375C1.5625 6.98995 1.78474 6.56073 2.18032 6.24426C2.57591 5.92779 3.11243 5.75 3.67188 5.75H16.3281C16.8876 5.75 17.4241 5.92779 17.8197 6.24426C18.2153 6.56073 18.4375 6.98995 18.4375 7.4375V13.0625" stroke="black" stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
			</svg>
			<?php the_date() ?></p>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->