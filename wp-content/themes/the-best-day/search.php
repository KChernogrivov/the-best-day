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
        <?php get_search_form(); ?>
        <?php if (have_posts()) : ?>

            <?php

            $search_with_emotions = false;
            $search_with_company = false;
            // Получаем поисковый запрос из параметра "s", если он был введен
            $search_query = '';

            if (!empty($_GET['s'])) {
                $search_query = sanitize_text_field($_GET['s']);
            }

            // Если был введен поисковый запрос
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
                    'key' => 'time_start',
                    'value' => array($_GET['time_start'], $_GET['time_end']),
                    'type' => 'TIME',
                    'compare' => 'BETWEEN',
                ),
            );

            if (!empty($_GET['emotion'])) {
                // Получение строки эмоций, выбранных в форме поиска
                $search_with_emotions = true;
                $search_emotions = $_GET['emotion'];

                // Создание массивов meta_query для задания условии по поиску в метаполе
                $meta_query_emotions = array(
                    'relation' => 'OR', // возвращаем пост, если хотя бы одна эмоция будет найдена в поле 'emotions'
                );

                foreach ($search_emotions as $emotion) {
                    $meta_query_emotions[] = array(
                        'key' => 'emotions',
                        'value' => $emotion,
                        'compare' => 'LIKE'
                    );
                }
            }

            if(!empty($_GET['company'])) {
                $search_with_company = true;
                $search_company = $_GET['company'];

                // Создание массивов meta_query для задания условии по поиску в метаполе
                $meta_query_company = array(
                    'relation' => 'OR', // возвращаем пост, если хотя бы одна эмоция будет найдена в поле 'company'
                );

                foreach ($search_company as $company) {
                    $meta_query_company[] = array(
                        'key' => 'company',
                        'value' => $company,
                        'compare' => 'LIKE'
                    );
                }
            }

            $args = array(
                'post_type' => 'post',
                's' => $search_query,
                'meta_query' => array(
                    'relation' => 'AND',
                    $meta_query,
                )
            );

            if ($search_with_emotions) {
                $args['meta_query'][] = $meta_query_emotions;
            }
            if ($search_with_company) {
                $args['meta_query'][] = $meta_query_company;
            }

//				 Выполняем запрос и выводим результаты
            $query = new WP_Query($args);

            if ($query->have_posts()) { ?>
                <header class="page-header">
                    <h2 class="page-title">
                        Найденные события:
                    </h2>
                </header><!-- .page-header -->
                <div class="search-result">
            <?php } else {
                get_template_part('template-parts/content', 'none');
            }
        ;
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

            ?>
            </div>
        <?php
        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main><!-- #main -->

<?php
get_footer();
