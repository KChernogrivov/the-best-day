<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package the-best-day
 */

?>

<section class="no-results not-found">
    <header class="page-header">

        <?php
        if (!is_search()) {
            get_search_form();
        }
        ?>
        <h1 class="page-title"><?php esc_html_e('Ничего не найдено', 'the-best-day'); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) :

            printf(
                '<p>' . wp_kses(
                /* translators: 1: link to WP admin new post page. */
                    __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'the-best-day'),
                    array(
                        'a' => array(
                            'href' => array(),
                        ),
                    )
                ) . '</p>',
                esc_url(admin_url('post-new.php'))
            );

        elseif (is_search()) :
            ?>

            <p><?php esc_html_e('По данным параметрам поиска ничего не найдено.', 'the-best-day'); ?></p>
        <?php

        else :
            ?>

            <p><?php esc_html_e('По данной категории ничего не найдено.', 'the-best-day'); ?></p>
        <?php

        endif;
        ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->
