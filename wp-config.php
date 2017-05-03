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
define('DB_HOST', 'us-cdbr-iron-east-03.cleardb.net');

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
define('AUTH_KEY',         'Cu^|9ggPx]kRr~YBNR*F^mH4S-)!(F-.~ay.#773jCSg@Hu|a;crjINPE@-@/X1w');
define('SECURE_AUTH_KEY',  '=Rqz,,kc@A,7#2/dypBkPDdu8~+/%}k _HGyICWe4@,F^ZNW-j%GWvg`e97uX |h');
define('LOGGED_IN_KEY',    '.bJW(W502)y-Ua3-h[;eFc|nsFsk#,9#iX!f)K9:@IAcf9@<>QerST{f~m0FnC+j');
define('NONCE_KEY',        '=BZY/d0aNF+GO3up=IR+i+[,-Z,Q~*i(Syqh*R+62c|C>+e<s$HJb]*;-a9SI0AN');
define('AUTH_SALT',        'F{c<a#^)0[cg-C-?;%9FoWc]C?ez$mGVv1;t;i}LE6`H6/oynn;h.+-@gZ=KEd-)');
define('SECURE_AUTH_SALT', '3^.E$E<ux -pC9Wn%qYy1aKG]*5p6Mqf4hyM#&LxokW5-a_|k=C^4Kt7S7BlAd;K');
define('LOGGED_IN_SALT',   '>@>s-#!m(+&emAfMCFdpqeJ,[)N=:<P+RQKfjxFMZUlovS-a(:7Sh4/$Bl:x|H~3');
define('NONCE_SALT',       'e?&dm0zhbO-fI j^$K4[>]>6snFI:Dyex]inVK[+##p;5.]XYn2&ao(_k_50bq]%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
