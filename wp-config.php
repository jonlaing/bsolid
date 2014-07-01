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
	define('DB_HOST', '127.0.0.1');
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
define('AUTH_KEY',         'K2MZzO2e-HGN~t|GXr[(^.tat??>xFR(Sq__?1sgpI*A>kcnLG;OCl-~dq?5}z=@');
define('SECURE_AUTH_KEY',  'd`Q9diEJ#!|bPD=Q2x|<)Pd50_8kXWT`r<5%2@|3~~bj8)%24sC57>`U`%42`Q.g');
define('LOGGED_IN_KEY',    '^|c]Lz)$5p9/IHPH_s>#nv5bn^ZHL==Cbo?u!3]y$|(NwH%RnKL_j1hkbJ}GA5+?');
define('NONCE_KEY',        '?I8[;rvMMqU?I;qL(~bevC042JQ/lqcAw07RnT*-U~m!X]|{VGN+sAwDJ*T||A*~');
define('AUTH_SALT',        'yJ]Wzu3l!pHV7~OwM*zK%SsCmBMxwX;`gIyEKHy0 ux=b<.tC:IShP|$RP9O3!Q_');
define('SECURE_AUTH_SALT', '*9_R3uvgt[@LrNnTT-rQL=6Z@o5*-[/l%<-?Jg^C$rAB=K_hU>k.@,lQcJ508&q$');
define('LOGGED_IN_SALT',   '|e.tS{=V(--FV`|a]{-7.~9%/Ka?L=acf~y|E7Fi&g@OW3`?(vg!mw60~$MZrYol');
define('NONCE_SALT',       '|B0/A;i7VSs&~QJlVlD+Al =fB_dE*c[azj|+-(_}-{!q^}CAg+Jvgdwzh+B8/QB');

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
