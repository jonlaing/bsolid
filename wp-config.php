<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'bsolid');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'bsolid_user');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'bsolid');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')bsTl=9DX&4UQBx+uVtI6zOv-,yctfWe$0I4N36#=Dkv!mbxFg5+CUOaA@e`i/qt');
define('SECURE_AUTH_KEY',  'BA|20=Wf=.fO==[FmLs+kt/[Q?Vv+:$hA.B>/STxqTX}JcYzOUdv{KWf~)#|X`mj');
define('LOGGED_IN_KEY',    '4}v>OQByI)]J$7[!bZR(!b]KY_bN kFh|=ro+7cO=Si~+A+P|T4Ru(Oilck[Gk(:');
define('NONCE_KEY',        'hvjrSR|VS~Wz!uN/3%G&8tRKK3W1GeHF_DH-%A^Dd3je`oMB3?M5(*j9[?!x&s/+');
define('AUTH_SALT',        'aOzar#*@Vq(mypH`aPV-xS5REsY4-[ At|+}-35`]d$2oD3Kdkh7N;j3[EE3tzq-');
define('SECURE_AUTH_SALT', 'WcXVp|V 2Rl0T=fic9|w l|cH|xD4E[(:dM.IA]Y p3Yi|(iwB8105>mu}50BxYS');
define('LOGGED_IN_SALT',   'pYLuSZ~}mCY{ ZvO93>%sBX!-`jMBzG&NQ139.Ih&H3S?`d<vtlLO-U*Z_Zmz_c+');
define('NONCE_SALT',       'oH+qpu@JS-}~<^J8JTIHVm]4U&I!F=JEd_{{W4~dLL!Kd?HMSeMVx/.m:  fiea0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bs_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/cms');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
