<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'heroku_6efec7bffb01419');

/** MySQL database username */
define('DB_USER', 'b7a143415ec541');

/** MySQL database password */
define('DB_PASSWORD', '0781ef29');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '.YKrALG-zTzaLJ$ehK(V`+Z$oy-yRJJ]jl-G+qj6yt5~LW:pdJsS?nrbzGR{2`+|');
define('SECURE_AUTH_KEY',  '~97a=]VFVVT_NrKAYL9=Z!V/8D~CkfH|%tdIxO%|92=7v4YH*-hYk|4=e+zR.C?Q');
define('LOGGED_IN_KEY',    'i0pgFs;&/fjTcn_/s:ak$O.=hHoqxsH8dTIQ-]|J~@%i@~ 1Rb]@c+h~D!! |Kh%');
define('NONCE_KEY',        'X-yV1wgiY34hPk>2mV*O}M?`(8U+R9V#Uy5:)-<4T]Yqpjw>yy^-d1MM_qqpr+t.');
define('AUTH_SALT',        '1U>5QSZ$cOFjr Yt3?ee=i@ifehZJ1-D]B. wKh*-}/~&o;47z!-nk!$T4=H2lww');
define('SECURE_AUTH_SALT', '3PVNu+>w#2q=})O$/=T5qs,+B~=fxeBcr7a:jojOwJTYzvnnO#B~bv3qHaX 4]LU');
define('LOGGED_IN_SALT',   'lY-zsNE.7O,H:krGR9lRk2Ygjz<5L(imp+,._ R+(|uzC>!RS*JIAboY=MJ$#kM>');
define('NONCE_SALT',       'Do`J%1)jK/D8-Y:-RA-fTEed@}l$3aNbhrTksD}|6Y;_;b<@y&%9kNn6iE`Av*(w');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_news_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
