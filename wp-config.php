<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'procesual' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'e:IEB!2p$6$)]DDp2_}le:ASWY)A}mX#R{fG6$bHI4/ uNq;v3(j?Y,L.yAN_Ka-' );
define( 'SECURE_AUTH_KEY',  '1;Sm_^s[/mC6h4rHfj`OMaX<*7h4xx_@4R<ll?2R&U/Xs_ltyC*guAf}-;CF]:GM' );
define( 'LOGGED_IN_KEY',    'X:Am@p=%LqJ=0|T=zA`rty<8iD!yCWpG:K6!n0k*as4FN<P_;9miq 9CWqu/>oQt' );
define( 'NONCE_KEY',        '@d+4Yx+]A`Frdd5rZBLh2#/SkJE>4!h H{e<+ty+e6cdibpaW@BDL5axO.%2q7bF' );
define( 'AUTH_SALT',        '@Rk%r?P+-YT#EHwJ?k*w_%`4^QY+J<q(w1l>59F^``RQJmt8DaK}M5A/3J*Io &p' );
define( 'SECURE_AUTH_SALT', 'l?0U^mO6Pf44E{%y*rS|a%szYAcJ.%%tU_1S&4t,=e|A{UYxATwG?c7XJ6|[N{XB' );
define( 'LOGGED_IN_SALT',   'gAHd<6RyL977,0gP/[A,#13=WGF}D$qrmiG6GF1o:q+b_U>4HY*}hmrW2cz^rw:N' );
define( 'NONCE_SALT',       'IeNPcA#Fh@58a0wiM[*;u[%*|!C=;%z{wpNVN&5:b_V^8gS)du|a;*F-7jX6bSpF' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'cm_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
