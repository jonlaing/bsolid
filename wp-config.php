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
define('AUTH_KEY',         '[_Lq r3Z:)$Ctif|g+b+ak C3!vwKK-U:&5-]zE9$d<MM7Tb?x(+n5Q5VIEC<fY^');
define('SECURE_AUTH_KEY',  'C-UA^a)=,*:7M61a`m7[7gdnsfj2=8cymVIITq4vF*eNwJ}j}MLCR@`.Rnj^miAl');
define('LOGGED_IN_KEY',    '>}+N$Q;s*I{>y$jephDdl|He/DSByY5+e|^1~3w>)I.O>-cIv6p(I>A/L^)S4c?(');
define('NONCE_KEY',        '3+wnsp]yz,>R2 $.H.u`>}:j)5STx|R(V.y]!b|~;${ o)|*ZtgKh%jd8Is>6/Qn');
define('AUTH_SALT',        'M4=m,S D>i6z17+$5sz|$BehNV1$U:K:?U`-yBXcq]{GAk_&K:ud=RL*O343{4+7');
define('SECURE_AUTH_SALT', 'M7r#lQo|GgI@yP{1.<7HY!#k$4|bzxCAF{h`6>>nI}IH@S1HdlAkm&=?IhHi%C)&');
define('LOGGED_IN_SALT',   's(?4^c2+*.q~%1ZT9Z+5++s~xF,e~+z+D=X+0(MccdP`MNc}*|1LIqlo==t%5C%S');
define('NONCE_SALT',       '01Z#$U)Itn.){^ atr:s[i(i08_94Ka-G)%onV8j(VjSo-q^OdyiZnALadgJj|6H');

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
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
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
