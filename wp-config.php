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
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'MX|S^@,;Evq< @~+4V.xm9i?e(|QxeY_Z*T@(g[~vV<<78/O$+(&l__ng,z~B2WQ' );
define( 'SECURE_AUTH_KEY',  '<eNG0Tf_^[`S/ N{mP@&b2jc|mLEg0mrkJPqUR6~^X~kHdm@[-UF]LTVh*D|SBt]' );
define( 'LOGGED_IN_KEY',    ']k*xB1%dQQo8_b)3g6wrPazGoNZ3|LnR!xlb/uJa{$PY0sl|4V^sm;@XuWuKW(aX' );
define( 'NONCE_KEY',        'lVf!HQUe{@s+;pYacF=E:x8i$Le&SYjDt).CsCQ8AW*UJL<Ojw@aTZ{L9_Hh~^@[' );
define( 'AUTH_SALT',        'Q0b,v?ISoQVuz,CroWi+Ov%eX^jYjz4#.DSW4X^k=sTOkbbx #KuI,q=4$9YM<d,' );
define( 'SECURE_AUTH_SALT', '0pNh|Xhd8RS%{3KOf$ilrrXe.zIN7((}zse584.0qk,Q>+dzxE+KWjh#e@{Xm<qL' );
define( 'LOGGED_IN_SALT',   '])<U*uw2{S21 #pE;hdj OI2S0~f2fH7([%R;!r[2v3JuY(P>f:s;A+G,h]T1~Ya' );
define( 'NONCE_SALT',       'kd$E:xt6`f{TI8T Z*=Pd{w5O-i$.&Mh-Y7 SyI=nIV%t:c=:~s#~Rx6yr+QK|7d' );

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

define('ALLOW_UNFILTERED_UPLOADS', true);
define( 'WP_POST_REVISIONS', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
