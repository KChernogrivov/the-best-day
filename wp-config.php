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
define( 'AUTH_KEY',         '_Tk!0#M*^7n4y[(5*@+ZEx0 LPj+3> (V2xM)fcA~<nuoFbO|QxyCA-klx!Sjeb4' );
define( 'SECURE_AUTH_KEY',  '<N8bJkwM=l@UQ$l?XxH`Yn|J7)`^p?;B%&#H_juI%Yv){Pf64(H20_pK-yWliQqx' );
define( 'LOGGED_IN_KEY',    'S~*5-|kv5}ZZ=(Rs=GJOFRx0-AW#BVW(ZD TJo4+4&(kP56sRXsvfN^8k[zk1FAk' );
define( 'NONCE_KEY',        '_U}EixDU8QEHLY6~k)z_%aw&eoe2<z8q[:I}}D~NMB[>%9,yue09V$)fazYM3WCg' );
define( 'AUTH_SALT',        'C~r{P~~=R:^]^G,444%FVPRyAB-NCA(9h|`:A%QG+SkbHxztG*>zk`c)2#Ii[,X>' );
define( 'SECURE_AUTH_SALT', '~Z+A!K^(}>WB=b&qu~*{da~JzQ[rM;f:c2XuQVX05/h:7+1y(v|g.Ju$?Aw{Z7Ke' );
define( 'LOGGED_IN_SALT',   '@`z_aib):})+eO?D;$bc~p|(hp=te.#=?=%e!0G 9diJVJG}+IDA;dbA,^`_O:O)' );
define( 'NONCE_SALT',       'iKb->|TEbw*hR_hM(c~)kgFCL]Hb*|@qN/ZIRVntG}}M0h4lIiY(px&f $g()=S<' );

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
