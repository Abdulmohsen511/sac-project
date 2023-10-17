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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~v71#,/tK eeJb!Bbp]v7V&|%E99R/is+-J0`QO[WLvWP@8|p>up@:3|ip9-47%O' );
define( 'SECURE_AUTH_KEY',  'X,;}5Uy1n`SO+O 4JumetoY=iE~/;6D$aq40XU}[fd=RbmMUN-X?<JR&_Rq~s*yQ' );
define( 'LOGGED_IN_KEY',    'R^]ENhz!GXbatMR[rvO@Y{K|^1WruGG^u]Zln+<m,ESp@| mT`0XovDal@+2nVCW' );
define( 'NONCE_KEY',        'P*(a3!Nijen[5nOuOWQ)bTp}HO!!x@XKUQ0hNM7p@f`B/}}|47Ao,{U]69hO4vve' );
define( 'AUTH_SALT',        '&J2Z$]YlC`?>z]H:&+ $xc0#/5?v_QOjYC.FOYxUy2R%6[k^g:/&&UuaT8L.4xJ~' );
define( 'SECURE_AUTH_SALT', '?(Vzck]Rp*utf-;G_(5newK?U9wG9Pe07qA17G,D}|G#!vk9^ZJDB<c13I$a!EKM' );
define( 'LOGGED_IN_SALT',   'FlczSec#R#=yaOb[fmzi9xQkaf{Fjj)`P^0jD%4PXqv~:H~A-P{PxX)Wu;h)m/5[' );
define( 'NONCE_SALT',       '0Crdr5PR*K!_CJe^9{EU6^v27oP5F??9<&WI|Yp|H!QX@c;iwp01y*6idyRwh#I)' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
