<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', '127.0.0.1' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BR?=dB=~.ipd2p>,<lXj6-8HfzDci~ q|SBCVOO+4# !H0+=_&a9|jP#r,0yBdeB' );
define( 'SECURE_AUTH_KEY',  'HAV-z-^,}M9u<w1OUaPnzcOuLv:F:aWCw>a#$002X6NGk6f<Z9^fNk9(YcVc0%T3' );
define( 'LOGGED_IN_KEY',    'wT7< ufb@O~||~^~W]<`~c??>eVQUfTO)(|v;;ZqyJnx;CBEn(PC80oZ*7ZKtKlt' );
define( 'NONCE_KEY',        '3;|k.LkM9[r&1daH*`~p/9GR4o%7xY>w/UI gMkB!RP7Q.?P#}],20q1CdhZ7Nx)' );
define( 'AUTH_SALT',        'rHE:aF+lWE_#gH0 18]y/LV3Y!0@py*7y2HVNY`sHu,8$tEA%!m ` v*CRBm/|Dc' );
define( 'SECURE_AUTH_SALT', 'Be=#zLVvU*mI<YphDD7{rb&>KzY1Hjf u?LG(f{#hhyik4[}1XxgY1,17I@SAgx:' );
define( 'LOGGED_IN_SALT',   'O?$F.S3&.C#ut!-ToDquYd]?8P]yq,+XYw-t8p?m+YoNw!9N6d6r!X@VFDI>CO5@' );
define( 'NONCE_SALT',       'C2?X4UFT]1HbNc=+3&#%N<TbUQ+?JHJrDstNu5bxr;?m>)[K2DD+zGuwt=jnMd#S' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
