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
define( 'DB_NAME', 'up_and_running_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '3|[h{.Dd42o-42M4ydxtCF=Lvb8%nK|bA03o?beP%z;-*?!XhQV;A6D36f[ =5vh' );
define( 'SECURE_AUTH_KEY',  'BoQ6b{?.Gw4s6J{T<t3y<a c}5#7+Tfon^=))-ACF:Kw]>wfTn$Pj1x{vU9u%h>B' );
define( 'LOGGED_IN_KEY',    '*r78i(sQ|$o`20xg_7hpkMcJwTO8v&FNb!FI#v*AX`mHw4T}p0hTa@s*96hx5=[*' );
define( 'NONCE_KEY',        '|~o4I2_ofSA`};uNz]Tfs1VvHOSWpX&cPIbj.`s9*.+7{dibF*5i1kFz%-~F)my^' );
define( 'AUTH_SALT',        '-![Mu=(,:/zGssX@A8e*EG!nPm]}/iT8gWyOSgMchF/ #q x0ts|;#3euwGm433#' );
define( 'SECURE_AUTH_SALT', 'zUWF-C9G+5ks3!C~mYUd])G>-YVQ9zKIGfe$kq;F,Jjy15[`yk=)%}m?5>Uy(7Y*' );
define( 'LOGGED_IN_SALT',   '3K5o.RGW5bbIaL<Ql5#82:_B=m58NtyBbS[9:r(0t-?-#=wq5zU^Flzp*7?xDoh9' );
define( 'NONCE_SALT',       '(L vQeU~`=R2CcykuG.@BxkmopL!}5Pt..3[d5D&LZ/ZSSfusXikxJ2]o-I Dz{:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );
//define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
