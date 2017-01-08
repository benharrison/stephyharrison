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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stephy');

/** MySQL database username */
define('DB_USER', 'stephy');

/** MySQL database password */
define('DB_PASSWORD', 'xl2Q4uGkpG7wHGet23qVaovfI5OSmMU');

/** MySQL hostname */
define('DB_HOST', 'mysql.stephyharrison.com');

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
define('AUTH_KEY',         '1PR?qHE&;S"v0N+pD@H(v"S$uh)@_RxMwITlW;kZdqb;vlUBwl(z~v#miFFNy)Wd');
define('SECURE_AUTH_KEY',  'nXM#wLLJJIJf~Yl_IuI**QHZE/NQK65V^|;#qfjHea`_3|b:o"wNl~XI0a@9(a2b');
define('LOGGED_IN_KEY',    'N:AD(3TIMzt8_f*nV^Vx0N%G`)5O5/?!BWfluPJPC(bk7XWi*IIm!b(hJ3Cp2tQ`');
define('NONCE_KEY',        'NZh^8psx#QPQU695Xoo8lG`$aGU1Si$tT%@(qDItvF+Xx%jJf6b!"4&FslZXweqc');
define('AUTH_SALT',        '+b/U/:|0!xp+Oy5x1DZ2*af1@&b)90c3|2zaNtN)u8:c!G~Xzyl+4(_I0FB6C6ne');
define('SECURE_AUTH_SALT', '|^ZH_*&@W4p+_ZBRB"+P/vOUu|lcKw(I"^j6#%4a#+BC;|$!JcTGKI|akbuoMFrS');
define('LOGGED_IN_SALT',   'YZp9:ghYYqF+LfafEtj5jPqQBsEJsAqjJr%pw*1I29rO8wp5rDNeZ(1b@@QupMW&');
define('NONCE_SALT',       'vWKj8i%zZ9je#D2j)h*g(|3ys?kAIr`B@(jBPm)xD9LnsX1a?TO@sO)#a^lDOH|!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'shcom_wp_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

