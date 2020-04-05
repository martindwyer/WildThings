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
define('DB_NAME', 'bdowebtech_wildthings');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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

define('AUTH_KEY',         'Bc=W;#`[3nu#vMwv`-<TqGy@$C;K.Q%FU%{5f3Ju;xNsP0,&5Iy|xlaaK-V/:Yqj');
define('SECURE_AUTH_KEY',  '.*t|]C,e.HuL9J)9!|1MAEB-~H;:iL(i-#7j}-_`W@t|i90*$A$u&?U`ehU]VEg4');
define('LOGGED_IN_KEY',    '_x|a7i+6T@Dn6-4FeGS1fy>iWCmVX;zR:}S`W9qC:STE@z(+5S Ft)i|J!0}[15-');
define('NONCE_KEY',        '?-D*mIO{IU!ckJrl`<S$oZBnNmQQg|b)+E0EY!@oxCUD{-Z A c<OE-&<0dRlF+_');
define('AUTH_SALT',        'j[7*hgG91wz<Uz%_kq-itwbsjrDebYdrIN}?-tZRP=B_6Lc|B)46=Ko7C mzJ`T@');
define('SECURE_AUTH_SALT', 'kJj-`}lla^s?*ry}aAL-86.*!E,c-UvN@LPNC@|Q^E,|>.N}rt_[U.Ej~WX^7RgO');
define('LOGGED_IN_SALT',   '$wn0k+NEfpFiICPgG3PG(3Pf$vNo),1r-}{o6M[tO./)`?lJ,Ek|&C`;,sVi&?G:');
define('NONCE_SALT',       '!$5y6CqI6esKjh:mstB%y=+s-b.@MyqoD-kDH1;T#_(BxG|G9|7_-wDvbVAW|[C)');

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
