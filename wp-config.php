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
define('DB_NAME', 'alex_levine');

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
define('AUTH_KEY',         'l=SP9l{iUCJhTm1*x:m#I3[lM>/C!kM`~74{&SZM5KZ`#p5Mbs0~_|C(3@[79}~1');
define('SECURE_AUTH_KEY',  'Yai^evg|3S(vl&L6*;L=z/>MI_!IXe*;22N;6M?cVIl{3vmdkNW(+Gz6jp(TKu;J');
define('LOGGED_IN_KEY',    'Xk}N qvLB{IeTSP%kD`VD0U$VQiP/N6Fw^rwi-}Fa28=$`3 =zvyg<=TaA@7E|<J');
define('NONCE_KEY',        ')K<x6Fa-<-z8t<*[!)T;ydpRKDpP,%|Rejk%<4R=W.=cl#)5w|#yOrv(`P`P5=[q');
define('AUTH_SALT',        'R@yAav_b.]bE4A_0{c@yh1|4uk:CSK|X`U+/dcpMnO|&.95j5=cAL`>Xy[YY}Erv');
define('SECURE_AUTH_SALT', '<gPh_c|<bZ.%/X0tY/#D>@DogX-gV?mw@(2YW8`B_4-PoMbur`O9.=<osWO!sWIA');
define('LOGGED_IN_SALT',   '4?rW|yoaEkfc>g[*mah@>iW{&WrD<zO=X%(^tzgcz?{y&m$hMqDjYmg`Gsa`?_8Q');
define('NONCE_SALT',       '!jXAmMt~>QDL#V;rDffqQC&=q`1I3KZgG@<x)cw2T[I{GicSEl04VMrn_/J-F6^Y');

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
