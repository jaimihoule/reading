<?php 
define('USE_FETCH_FOR_REQUESTS',true);
?><?php 
define('WP_HOME','https://diy-pwa.com/scope:0.4953818608686726');
define('WP_SITEURL','https://diy-pwa.com/scope:0.4953818608686726');
?><?php 
define('WP_DEBUG_LOG',true);
define('WP_DEBUG_DISPLAY',false);
?><?php define( 'CONCATENATE_SCRIPTS', false );
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
define( 'DB_NAME', 'database_name_here' );

/** Database username */
define( 'DB_USER', 'username_here' );

/** Database password */
define( 'DB_PASSWORD', 'password_here' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY','Vaarzx.%wS?fQ!?.Rw(e$nt.C_5Hg)lZ!*jI/Ehz');
define( 'SECURE_AUTH_KEY','7Ml(?j2#MlcR.(PN1u<@aKBqhXHB&z=^UJn,$!E8');
define( 'LOGGED_IN_KEY','FpW+&s66a/Bu87GjJvE1JMMiE9n1VI8+CW?#_ND5');
define( 'NONCE_KEY','Jui0fi#)/#K?WyryQhzGcD(C*NYASywhO?,42Y)g');
define( 'AUTH_SALT','&@/-uz@gbs<R91hOE_St]aVJQxl^Z%pbewdig3XD');
define( 'SECURE_AUTH_SALT','Po]_i>JZBJ$k#Ay)&B/zC0$?Sur[54vDOQg3Cw-A');
define( 'LOGGED_IN_SALT','TNNTbzY!8m78x/Q4elqTbl4o&9/(^O#W2oV&CysU');
define( 'NONCE_SALT','4H90@H$j)G+F6@$+W)j0BwWnDd^[PA=lwAQn%fK^');

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
define( 'WP_DEBUG',true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
