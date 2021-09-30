<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_bex_theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ddgwsX]e:@FJOTfrjM!|5,AA[K7KRaN]cdB_hJ;u^GH}_P56{on6u4,OZ;M$)>T<' );
define( 'SECURE_AUTH_KEY',  'KT.ubA0o:k@YCSp-wwmc(-8&w>l+_8w_7ps.VpH9R^L42ZUVxG& kXzqcIj9h!qP' );
define( 'LOGGED_IN_KEY',    'W3Tn=k|m@5kvNllk:X|#vRE]x1O,!CI?BhfLdg:%ktch%fz3@xy_9k{wE|LT&y7S' );
define( 'NONCE_KEY',        '$M+UY0dpJ;-kg/YxGysfw~b3w3*|gFN9RySL2/w>vEw$Q;xY?jPNv>}%S:lv4GD|' );
define( 'AUTH_SALT',        '=*ij-j &7oj1d,9dX_fVG{UtsR)X1va| <V|f=_#C%I0 >=SYz:BO&P#zkuvoTV}' );
define( 'SECURE_AUTH_SALT', 'N$I:Kba]cyNC(h(F`$?uPh&|F.<b_naubiN)SnTb6c~;7xjF+~;w>#0Jv&xw|g{T' );
define( 'LOGGED_IN_SALT',   'xRcC8=Q/Ebjq#lv]|1gb8aZjg<69P Ev57H&vh}d<u7WA},czw?BrBNtXuk}+net' );
define( 'NONCE_SALT',       '~]Gf@%jf4f]*!|hHoz~1j5FE?1h!>8u?qa8*zm X`d}x7+-VA@r6>]Bo=g~l)^#f' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
