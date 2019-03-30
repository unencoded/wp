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
define('DB_NAME', 'wordpress');
jh
/** Имя пользователя MySQL */
define('DB_USER', 'wordpress');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '60950311');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'FXMH`*JBNtmh#=d$iXC-Q[NI,Ot#()btm`_b|q;=x[#C4m4:.w/z_[~y%Re/12@c');
define('SECURE_AUTH_KEY',  'xN+qEkRJ5qfL.LgIe#XT}[CFG-Ef]d}s<q)i->%#XB]q^an]5LD60a^Ld%rv^x*T');
define('LOGGED_IN_KEY',    'GM<wb<2HxMW[2;wBwaFkpQP`Zxz>1OCi,dhMNe#?iA&Sqw@Gci%nxwiBbD,dr19%');
define('NONCE_KEY',        'aHdUJm08fGivBt._W>g}J&%,-><0eLKUyq(V<dK35q>dYiT9BYoJ!gQdM-xmlj(>');
define('AUTH_SALT',        '/DY#/w9/s]<Z;,3iS}qTYSacHdQ_hw4H/mN7v&%1h)NuQ7=!-IB)HXOws,;v3bs|');
define('SECURE_AUTH_SALT', 'uFwj+At&tPN&xp]5Bo#*=}NAaPHE9_qdC P9v<zukS^hZFU)$eK=S4`}M*Ugw^Bx');
define('LOGGED_IN_SALT',   'SR)mWMf8t8(rDcXm%Mzc&jt?TvUbcI,~{,;WVL-k#3zR>E?yb>LZR`.%u%!%gCc<');
define('NONCE_SALT',       '7QXesP~9R T>DZ06dLdviv9eMj-R9Hi5P4rZ~ED(.BymAfCnf@.c2F4B~t$47>Dx');

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

/** hi */
