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
define('AUTH_KEY',         'X(GuJG2|lV&,X]If4yt)5_WU{O|J63*zDC!F*vqQ`A+ sSO4Ck`GE=<_qH:e&S>p');
define('SECURE_AUTH_KEY',  ':`H1L/ukFE3c8n^^Vh1)R|Q8+J&ADCM`_JruYJ>x-3u+sm:[cdbm}wkmC>8[,qSn');
define('LOGGED_IN_KEY',    '9f^Q}O:/Q-2/Pu}QiW,`,Y.tgdQX*M 7VbcK9[AjZt^--{`+LmM&#+kq9u5jZ29c');
define('NONCE_KEY',        '>F#gYYza&8|gCQ7fV~m2SEyTZ3@=^hgf0VMv&+Ios+x$7*Nv+|QIW68}XQwaQn-X');
define('AUTH_SALT',        '@_?(wtL(9<QuiDx[2[|Hn$.q(*Z9M%OXR=@dJC,f-8Wr!~= fkA,zzD=DJ/1&(kG');
define('SECURE_AUTH_SALT', 'jj_{yz(7@CMgHv.iomJsILDo:e1/?_EY,J0|rqK_X:a!uW(O-]x+j:Jo`f+Cz~ZS');
define('LOGGED_IN_SALT',   'v3gU|baaU|bPoeu/-C@@a)gGc4&(o<2l9~y[N|SAk*5Ac} Kt{@!NH7@&EXsU}9-');
define('NONCE_SALT',       '?X`4q-,|7>7AL(WO?xU?pejK0oe4@7TKp]eMRRFVO5ucGy,u.tO.! >uRKn ejB?');

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
