<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'cloud-db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost:8890');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=50vC4u&JDbxIBV3f5ECJUg.*W^QxNv7e!,KDJ=&1?Btn*0VZxwF<a@j/7ED_dcO');
define('SECURE_AUTH_KEY',  ';u;Y]Ig|bQ)KV.TgO,IyRUJQ,A|L/9vW:xg_0gOk2Z#ibXMhu<_BveFJV,{nxQn4');
define('LOGGED_IN_KEY',    'w!:/0j8 EU (HQ;?_k{adrp4tgOB|YtMn0II<2|?8-@6HpZ_`EX^h1hT/K.fL-g6');
define('NONCE_KEY',        'V5}W:3*@Rt{6e~g{V+i~7n6$ z!6)DP:2 {0_jRN~>{ZpI@uu$]voADdP8hxZ1US');
define('AUTH_SALT',        ':gQ/|(xZq^:Vz?&9b:t1Pw,#@az)Q3#|l@7`]${~1?(@{MT;va4Bb]nUOdqGeqzY');
define('SECURE_AUTH_SALT', 't;hdMt:U;sCJc[QP;4hPT$m#>%@)`dn)&(@jQ=%>mHM+_8K30Pt>8ALHzjmG?3Qs');
define('LOGGED_IN_SALT',   '<.D5xil2,;*xeDMk6fz[o;U<!0MN;n/bP{%<xWah<v=jH{Q}]xwRV,5gxX>1PBvH');
define('NONCE_SALT',       'CO`$xG*9~9QS$ig|lDyt0}f!/wp#WU|jkt[K;jAMTO?nK!3Hv7r++uNs52M*87!;');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
