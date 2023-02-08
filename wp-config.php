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
define( 'DB_NAME', 'awax_db' );

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
define( 'AUTH_KEY',         'V{qJ|3 #`<_J`?@0ZzVhy2lC43N}3Mk1?>.[Y6V?7WDOd}majyo8RA*y#uaJ48A%' );
define( 'SECURE_AUTH_KEY',  'VxD8u,utcB~L3:+p4kS7zLb?737lg9QL>Ogp8lPJ}msr;(cyC]u?$a(q(jY[w/12' );
define( 'LOGGED_IN_KEY',    ',S?$9~d} !A`:uL${6-`AW+_Dy}6F4{x(y##q(tZtr.|W@wY8j8hT%pMu8NXvqT8' );
define( 'NONCE_KEY',        'D@S=Q;^zv&A.>W}d GYk@T~WWM5fB8s/2V(}H?v[A<`Aq1)$o~Vc:Al+iHs_XFrX' );
define( 'AUTH_SALT',        '8}Jf/}g]E0R>lq+=>V*=$0KXM<tMq(/q[,@{L,oh3Nxl8x]5 TK&zv4Emf3SySCA' );
define( 'SECURE_AUTH_SALT', '6VNkCrkIf2FH*!J$tVq8Fu5g`KW}_t0y48c,qzlI^&gnDR@ru| W.$K=lZGU9h^Y' );
define( 'LOGGED_IN_SALT',   'xz5iak@n;df47yec8vhFqS??Ji0:|W>k^W9y+Dx)zzIjHSs|3n:wA7-sjOh<_2%m' );
define( 'NONCE_SALT',       'k+4sCPc4O#tY)un1c?,@y>RW0fH]6Go?0N*#}~WY:4<CKI$S^h $eeAYO^z-Q*TA' );

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
