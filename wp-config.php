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
define('DB_NAME', 'volunteer');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ',8Cdk(|@9|XEf/ZEsY^OO=]_`J3hwW*:@:!/lbWTv$oL_f#PwVcgV!_S^@qM*i2,');
define('SECURE_AUTH_KEY',  'y-[eHx|]C(NlF8f=S8Qn{5uxmswb?]/@jyR9E~l#_U06ZB]ok%WuB@~IKMgum03s');
define('LOGGED_IN_KEY',    'BD&}zQd}|E MzD;o{!X%vibEv=9!pzhq!E:Ic>.B9s=$19&<UG{GRJJPG=_$B_T|');
define('NONCE_KEY',        's=Cb/c%-Bev9j}B$JOQEf)V@kprLubgT!YpA+K+4,sC@6zqa.dx#;m~g672NFo]q');
define('AUTH_SALT',        'Ujy#CqYT{7.R~04}a9N9aG eu9V/}EMhzoDF7CqGmn>qu&w`Y`Z7D8A7k>c7HCOJ');
define('SECURE_AUTH_SALT', 'k+Q2]Wuo=1-q^&U9N5,`:;WJZfTp?=<$^@5jH.~#)~tk*&|]TRM>>@yI__Ojb,/`');
define('LOGGED_IN_SALT',   'ruS!#x_ ![mIE9fVfBhAFIuLq7`ci8YN;V+I^]2:M87pk}[2b-9uIR|ll7dE3gl^');
define('NONCE_SALT',       ',kyyVl/!l6QIXhcCMv9/<Qb;#v3o;_JWkP[sp8`kB8JKa=IC<Ay6qro^Z+3q!<sC');

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
