<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package the-best-day
 */

get_header();
?>

    <main id="primary" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <?php get_search_form(); ?>
                <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'the-best-day'); ?></h1>
            </header><!-- .page-header -->
        </section><!-- .error-404 -->
    </main><!-- #main -->

<?php
get_footer();


$user_id = get_current_user_id();
$current_user = wp_get_current_user();
$is_moderator = $current_user->roles[0] == "administrator";
$row_number = 0;

if (array_key_exists('confirm', $_POST)) {
    confirm();
} else if (array_key_exists('trash', $_POST)) {
    trash();
} else if (array_key_exists('untrash', $_POST)) {
    untrash();
}
function confirm()
{
    wp_update_post([
        'ID' => $_POST["confirm"],
        'post_status' => 'publish',
    ]);
}

;
function untrash()
{
    wp_untrash_post($_POST["untrash"]);
    wp_publish_post($_POST["untrash"]);
}

;
function trash()
{
    wp_trash_post($_POST["trash"]);
}

;


if ($is_moderator) {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'post_status' => array('publish', 'pending', 'trash'),
    );
} else {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1,
        'author' => $user_id,
        'post_status' => array('publish', 'pending', 'trash'),
    );
};

$query = new WP_Query($args);

if ($query->have_posts()) {
    echo '<form method="post">';
    echo '<table class="events-table">';
    echo '<tr>';
    echo '<th class="events-table__title">№</th>';
    echo '<th class="events-table__title">Название</th>';
    echo '<th class="events-table__title">Статус</th>';
    echo '<th class="events-table__title">Дата закрытия</th>';
    echo '<th class="events-table__title">Взаимодействие</th>';
    echo '</tr>';

    while ($query->have_posts()) {
        $row_number++;
        $query->the_post();
        echo '<tr class="events-table__row">';
        echo '<td class="events-table__event-number">' . $row_number . '</td>';
        echo '<td class="events-table__event-title"><p>' . get_the_title() . '</p></td>';
        echo '<td class="events-table__event-status">';
        if (get_post_status() == "publish") {
            echo "<span class='events-table__event-status--publish'>Опубликовано</span>";
        } else if (get_post_status() == "pending") {
            echo "<span class='events-table__event-status--pending'>Модерация</span>";
        } else {
            echo "<span class='events-table__event-status--trash'>Удалено</span>";
        };
        echo '</td>';
        echo '<td class="events-table__event-finish">' . get_field("date_finish") . '</td>';
        echo '<td class="events-table__actions">';
        if ($is_moderator) {
            if (get_post_status() == "pending") {
                echo '<label for="confirm-' . get_the_ID() . '">
				<svg class="events-table__confirm-svg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="20" cy="20" r="20" fill="white"/>
					<circle cx="20" cy="20" r="19.5" stroke="black" stroke-opacity="0.3"/>
					<path d="M12.5 20.75L18.5 26.75L27.5 13.25" stroke="black" stroke-opacity="0.3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</label>
			<input type="submit" id="confirm-' . get_the_ID() . '" name="confirm"
					class="events-table__button" value="' . get_the_ID() . '" />';
            } else if (get_post_status() == "trash") {
                echo '<label for="untrash-' . get_the_ID() . '">
				<svg class="events-table__confirm-svg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="20" cy="20" r="20" fill="white"/>
					<circle cx="20" cy="20" r="19.5" stroke="black" stroke-opacity="0.3"/>
					<path d="M12.5 20.75L18.5 26.75L27.5 13.25" stroke="black" stroke-opacity="0.3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</label>
			<input type="submit" id="untrash-' . get_the_ID() . '" name="untrash"
					class="events-table__button" value="' . get_the_ID() . '" />';
            };
        };
        echo '
			<label for="trash-' . get_the_ID() . '">
				<svg class="events-table__trash-svg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="20" cy="20" r="20" fill="white"/>
					<circle cx="20" cy="20" r="19.5" stroke="black" stroke-opacity="0.3"/>
					<path d="M22.74 17L22.394 26M17.606 26L17.26 17M27.228 13.79C27.57 13.842 27.91 13.897 28.25 13.956M27.228 13.79L26.16 27.673C26.1164 28.2382 25.8611 28.7661 25.445 29.1512C25.029 29.5363 24.4829 29.7501 23.916 29.75H16.084C15.5171 29.7501 14.971 29.5363 14.555 29.1512C14.1389 28.7661 13.8836 28.2382 13.84 27.673L12.772 13.79M27.228 13.79C26.0739 13.6155 24.9138 13.4831 23.75 13.393M12.772 13.79C12.43 13.841 12.09 13.896 11.75 13.955M12.772 13.79C13.9261 13.6155 15.0862 13.4831 16.25 13.393M23.75 13.393V12.477C23.75 11.297 22.84 10.313 21.66 10.276C20.5536 10.2406 19.4464 10.2406 18.34 10.276C17.16 10.313 16.25 11.298 16.25 12.477V13.393M23.75 13.393C21.2537 13.2 18.7463 13.2 16.25 13.393" stroke="black" stroke-opacity="0.3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
			</label>
			<input type="submit" id="trash-' . get_the_ID() . '" name="trash"
					class="events-table__button" value="' . get_the_ID() . '" />
		</td>';
        echo '</tr>';
    }
    echo '</table></form>';

    echo '<form method="post">';
    echo '<div class="events--mobile">';
    while ($query->have_posts()) {
        $query->the_post();
        echo '<article class="events__card--mobile">';
        echo '<h2>' . get_the_title() . '</h2>';
        if (get_post_status() == "publish") {
            echo "<span class='events-table__event-status--publish'>Опубликовано</span>";
        } else if (get_post_status() == "pending") {
            echo "<span class='events-table__event-status--pending'>Модерация</span>";
        } else {
            echo "<span class='events-table__event-status--trash'>Удалено</span>";
        };
        echo '<span class="events-table__event-finish">' . get_field("date_finish") . '</span>';
        echo '<span class="events-table__actions">';
        if ($is_moderator) {
            if (get_post_status() == "pending") {
                echo '<label for="confirm-' . get_the_ID() . '">
				<svg class="events-table__confirm-svg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="20" cy="20" r="20" fill="white"/>
					<circle cx="20" cy="20" r="19.5" stroke="black" stroke-opacity="0.3"/>
					<path d="M12.5 20.75L18.5 26.75L27.5 13.25" stroke="black" stroke-opacity="0.3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</label>
			<input type="submit" id="confirm-' . get_the_ID() . '" name="confirm"
					class="events-table__button" value="' . get_the_ID() . '" />';
            } else if (get_post_status() == "trash") {
                echo '<label for="untrash-' . get_the_ID() . '">
				<svg class="events-table__confirm-svg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="20" cy="20" r="20" fill="white"/>
					<circle cx="20" cy="20" r="19.5" stroke="black" stroke-opacity="0.3"/>
					<path d="M12.5 20.75L18.5 26.75L27.5 13.25" stroke="black" stroke-opacity="0.3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</label>
			<input type="submit" id="untrash-' . get_the_ID() . '" name="untrash"
					class="events-table__button" value="' . get_the_ID() . '" />';
            };
        };
        echo '
			<label for="trash-' . get_the_ID() . '">
				<svg class="events-table__trash-svg" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
					<circle cx="20" cy="20" r="20" fill="white"/>
					<circle cx="20" cy="20" r="19.5" stroke="black" stroke-opacity="0.3"/>
					<path d="M22.74 17L22.394 26M17.606 26L17.26 17M27.228 13.79C27.57 13.842 27.91 13.897 28.25 13.956M27.228 13.79L26.16 27.673C26.1164 28.2382 25.8611 28.7661 25.445 29.1512C25.029 29.5363 24.4829 29.7501 23.916 29.75H16.084C15.5171 29.7501 14.971 29.5363 14.555 29.1512C14.1389 28.7661 13.8836 28.2382 13.84 27.673L12.772 13.79M27.228 13.79C26.0739 13.6155 24.9138 13.4831 23.75 13.393M12.772 13.79C12.43 13.841 12.09 13.896 11.75 13.955M12.772 13.79C13.9261 13.6155 15.0862 13.4831 16.25 13.393M23.75 13.393V12.477C23.75 11.297 22.84 10.313 21.66 10.276C20.5536 10.2406 19.4464 10.2406 18.34 10.276C17.16 10.313 16.25 11.298 16.25 12.477V13.393M23.75 13.393C21.2537 13.2 18.7463 13.2 16.25 13.393" stroke="black" stroke-opacity="0.3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
			</label>
			<input type="submit" id="trash-' . get_the_ID() . '" name="trash"
					class="events-table__button" value="' . get_the_ID() . '" />
		';
        echo '</article>';
    }
    echo '</div></form>';
} else {
    echo '<p>Ваш список плейсов пуст. Добавьте и увидите магию!)</p>';
}

wp_reset_postdata();
