<?php
/**
 * the-best-day functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package the-best-day
 */

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_best_day_setup()
{
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on the-best-day, use a find and replace
        * to change 'the-best-day' to the name of your theme in all the template files.
        */
    load_theme_textdomain('the-best-day', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support('title-tag');

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'header-menu' => esc_html__('Header menu', 'the-best-day'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'the_best_day_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        )
    );
}

add_action('after_setup_theme', 'the_best_day_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_best_day_content_width()
{
    $GLOBALS['content_width'] = apply_filters('the_best_day_content_width', 640);
}

add_action('after_setup_theme', 'the_best_day_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_best_day_widgets_init()
{
    register_sidebar(
        array(
            'name' => esc_html__('Sidebar', 'the-best-day'),
            'id' => 'sidebar-1',
            'description' => esc_html__('Add widgets here.', 'the-best-day'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>',
        )
    );
}

add_action('widgets_init', 'the_best_day_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function the_best_day_scripts()
{
    wp_enqueue_style('the-best-day-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_enqueue_style('the-best-day-style__header', get_template_directory_uri() . "/assets/styles/header.css");
    wp_enqueue_style('the-best-day-style__footer', get_template_directory_uri() . "/assets/styles/footer.css");
    wp_enqueue_style('the-best-day-style__single', get_template_directory_uri() . "/assets/styles/single.css");
    wp_enqueue_style('the-best-day-style__search', get_template_directory_uri() . "/assets/styles/search.css");
    wp_enqueue_style('the-best-day-style__slider-text', get_template_directory_uri() . "/assets/styles/slider-text.css");

    wp_style_add_data('the-best-day-style', 'rtl', 'replace');

    wp_enqueue_script('the-best-day-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('the-best-day__search', get_template_directory_uri() . '/assets/js/search-form.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'the_best_day_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Extend WordPress search to include custom fields
 *
 * https://adambalee.com
 */

/**
 * Join posts and postmeta tables
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_join
 */

function cf_search_join($join)
{
    global $wpdb;
    if (is_search()) {
        $join .= ' LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    return $join;
}

add_filter('posts_join', 'cf_search_join');

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */

function cf_search_where($where)
{
    global $pagenow, $wpdb;
    if (is_search()) {
        $where = preg_replace(
            "/\(\s*" . $wpdb->posts . ".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(" . $wpdb->posts . ".post_title LIKE $1) OR (" . $wpdb->postmeta . ".meta_value LIKE $1)", $where);
    }
    return $where;
}

add_filter('posts_where', 'cf_search_where');

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */

function cf_search_distinct($where)
{
    global $wpdb;
    if (is_search()) {
        return "DISTINCT";
    }
    return $where;
}

add_filter('posts_distinct', 'cf_search_distinct');


// Функция поиска в WordPress
function custom_search_query()
{
    global $wpdb;

    // Устанавливаем флаг, который будет использоваться для проверки, был ли введен поисковый запрос
    $has_search_query = false;
    $params = array();

    // Создаем строку с названиями полей и их значениями, которые будут передаваться в URL с помощью функции add_query_arg()
    $query_args = '';

    // Проверяем, был ли введен поисковый запрос, используя значения полей
    if (!empty($_GET['time_start'])) {
        $params += ['time_start' => $_GET['time_start']];

        $query_args = add_query_arg('time_start', $_GET['time_start'], $query_args);
        $has_search_query = true;
    }

    if (!empty($_GET['money_start'])) {
        $params += ['money_start' => $_GET['money_start']];
        $query_args = add_query_arg('money_start', $_GET['money_start'], $query_args);
        $has_search_query = true;
    }

    // Получаем поисковый запрос из параметра "s", если он был введен
    $search_query = '';

    if (!empty($_GET['s'])) {
        $params += ['s' => $_GET['s']];
        $search_query = sanitize_text_field($_GET['s']);
        $has_search_query = true;
    }

    // Если был введен поисковый запрос
    if ($has_search_query) {
//        // Добавляем метапараметры для поиска в нескольких полях
//        $meta_query = array(
//            'relation' => 'AND',
//            array(
//                'key' => 'field1',
//                'value' => sanitize_text_field($_GET['field1']),
//                'compare' => '=',
//            ),
//        );
//
//        // Создаем основной аргумент запроса, включая метапараметры и поисковый запрос
//        $args = array(
//            'post_type' => 'post',
//            's' => $search_query,
//            'meta_query' => $meta_query,
//        );
        $query = "SELECT * FROM wp_posts WHERE";

        foreach ($params as $key => $value) {
//            var_export($params);
            $query .= " `" . $key . "`" . "=" . "`" . $value . "` ";
            $query .= ' AND';
        }
        $query = substr($query, 0, -4);

        print_r($wpdb->get_results($query));

        // Выполняем запрос и выводим результаты
//        $query = new WP_Query($args);

        // остальной код для вывода поиска на странице
//        $wpdb->get_results($query);
    }
}

add_action('pre_get_posts', 'custom_search_query');
