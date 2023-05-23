<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-best-day
 */

?>

<?php get_search_form(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h2 class="page-title">
            Найденные события:
        </h2>
        <?php
        if (is_singular()) :
            the_title('<h1 class="entry-title">', '</h1>');
        else :
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;
       ?>
    </header><!-- .entry-header -->

    <?php the_best_day_post_thumbnail(); ?>

</article><!-- #post-<?php the_ID(); ?> -->
