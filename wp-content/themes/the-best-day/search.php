<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package the-best-day
 */

get_header();
?>

    <main id="primary" class="site-main">

        <?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="page-title">
                    <?php
                    /* translators: %s: search query. */
                    printf(esc_html__('Search Results for: %s', 'the-best-day'), '<span>' . get_search_query() . '</span>');
                    ?>
                </h1>
            </header><!-- .page-header -->

            <?php

            $has_search_query = true;

            // Получаем поисковый запрос из параметра "s", если он был введен
            $search_query = '';

            if (!empty($_GET['s'])) {
                $search_query = sanitize_text_field($_GET['s']);
                $has_search_query = true;
            }

            // Если был введен поисковый запрос
            if ($has_search_query) {
                // Добавляем метапараметры для поиска в нескольких полях
                $meta_query = array(
                    'relation' => 'AND',
                    array(
                        'key' => 'cost',
                        'value' => array($_GET['money_start'], $_GET['money_end']),
                        'type' => 'NUMERIC',
                        'compare' => 'BETWEEN',
                    ),
                    array(
                        'key' => 'time_to_come',
                        'value' => array($_GET['time_start'], $_GET['time_end']),
                        'type' => 'TIME',
                        'compare' => 'BETWEEN',
                    ),
                );
                var_dump($_GET['emotion']);
                if (!empty($_GET['emotion'])) {
                    $meta_query[] = array(
                        'key' => array('emotion_1', 'emotion_2'),
                        'value' => $_GET['emotion'],
                        'compare' => 'IN',
                    );
                }

                // Создаем основной аргумент запроса, включая метапараметры и поисковый запрос
                $args = array(
                    'post_type' => 'post',
                    's' => $search_query,
                    'meta_query' => $meta_query,
                );

//				 Выполняем запрос и выводим результаты
                $query = new WP_Query($args);
            }

            /* Start the Loop */
            while ($query->have_posts()) :
                $query->the_post();

                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part('template-parts/content', 'search');

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main><!-- #main -->

<?php
get_footer();
