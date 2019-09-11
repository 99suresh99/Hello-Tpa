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
define('DB_NAME', 'tpa');

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
define('AUTH_KEY',         '`q)hhVQ./szg2MfKWd$0j5RoHQZbaT(C5n{d8Kk_t)_%+Dcn9M2a@~BM|0G&.G5g');
define('SECURE_AUTH_KEY',  'Ybl;f~&opCHMd%R3Cb?+&}( BeMWt 8Q1]!3Mv`biS}PVA_xIKn9O2ZqBDE1kQB?');
define('LOGGED_IN_KEY',    ',[Oada&3zC!apU1,ZE>aWeHlS[|H<;L$l5c1Bca~[t~KLst1%]vyDz[jqOA+lBX8');
define('NONCE_KEY',        '@0<`ML8KIrFr(OIfNGF2cwz9gh4tI8D&kvQzVU4P7TnTV+M5#J_+piKC[X+3iPK?');
define('AUTH_SALT',        'N)yGwR+<whQ/ho%JAz&F1#JF>[(;i{sAOmUR*AC~C-it9fG6nPYLu*V2cYHg[?FV');
define('SECURE_AUTH_SALT', 'e`X+.,_]Hv>Pg`nu#];xx^~T.`.}PN#glA+*<1>yWLb}bJU4BCqhb_W2;rp:f[1z');
define('LOGGED_IN_SALT',   'yw}?_XAqG/.jBZ5}_6<l[rM6ax6.=yqas=tV@anRi),2XHi3O(Tw/LEs@A|=iDW4');
define('NONCE_SALT',       'e!r]!#BwL/.x3=XE:PYFKs.x@Y3zDq-}Q+J$lMY%T)M2mf_E>cww509w*c@{GCI,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'tp_';

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
