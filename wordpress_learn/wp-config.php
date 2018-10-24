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
define('DB_NAME', 'wordpress_tut');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         't?-0YpT=`Ww{gH-41I{eQsh|c{q/I/;&=k@K/y#b9;b6][AV>3u3eg4Anj7OI<#y');
define('SECURE_AUTH_KEY',  'B=j4?oW<8zk+,bp|z+yJS0-M:OS5Pr+){P}T|$KrRD>8Ec|.5~J&`?IKi8qa=}O:');
define('LOGGED_IN_KEY',    ')*@7?i<_BJNIVr&#cf^+TKVbkCx181Y<Y&6`o;WMU@rxO@uZ[|^<2KqVU1z.N#Yy');
define('NONCE_KEY',        '}0YXYGCgf&+$&J)k{!wH3#2+t{DbAr|z5}/xskz.S=~*nEO;+>.F||_=jLwf8 oi');
define('AUTH_SALT',        'Qa5iyLyI}o=dc2ElyZ7!M~6c^E6LPVHRMj]F~Ul#Q%#YcEJjrgPkYe@F4S1B_~3-');
define('SECURE_AUTH_SALT', 'bCgXlz-syirw*42Cr^&@.@{DkPM{c?|lupvL6XTn^hM%M)iy+s%KNrRuyW>L/mzA');
define('LOGGED_IN_SALT',   'S|b*tB~9VR3wEn |]%IVY,n>I{0F7?OV{1=iK9cHp-^i~iij:;#]MuQkev-S>R!K');
define('NONCE_SALT',       'K!rKD9D6&g%;%q3Rg:4mg~8,@Ipx:Gf0HK[v:)#xus72|yjQm2sy,iq%!<^rG+ap');

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
