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
define( 'DB_NAME', 'timber-wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'o5/L/Jh7,?R54^E5k|gz^2ppa+g ,|59kMDc=r]Fz%55q6PniHLm7+P%*w#o|WOn' );
define( 'SECURE_AUTH_KEY',  'l{VYo!uBaLP3wqL}Mlx/h/U5v?L. ;GvP~+-zRaTW-x1#pnB7;Uh7FwW}$Ijn(<U' );
define( 'LOGGED_IN_KEY',    'k,wvvW&E2;W+)CK[.XFz+<>7(hVdo{m.K}WPGuQei/mVSidADE*=WO+Yh31rkh4(' );
define( 'NONCE_KEY',        'W9Ve%-dwNj<F`.Lj.k>3PpZ&V<N|U2(`b+ku} A1FW#N_z+yMAUeQ6Jc6jSB/AHo' );
define( 'AUTH_SALT',        '&tLI|u+ JgMU<+1Z&s![a/0v@k^L1AetV8sBZCf#WXe~g=MKa3N%J$O+QEIk#D G' );
define( 'SECURE_AUTH_SALT', 'h8~9Km/K[|)E:9l!iel3tPJGq fc^Zk%5iULQ4(w9sp6>/no %[1iiM5 Re24HB~' );
define( 'LOGGED_IN_SALT',   'MMHJy,pK&=,r-_d]p:S{0;Fo%QM^1#C$7)GGcKPuHX.,7yLbNu7r7&`F>J*fr6#8' );
define( 'NONCE_SALT',       'm2|Y(q.?5l1oy?2vB}}#qX0%etavGyTJ[W1|g?fTRNju^e2C3gg5SsS51g)h,?<)' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
