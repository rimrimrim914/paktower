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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pt' );

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
define( 'AUTH_KEY',         'I:xc;T$ &I!Q8TCc2S)Rk6rX4FIri}Yb_IwoG/j+7?)#|nHLeG)K!3e~qZWWtV^/' );
define( 'SECURE_AUTH_KEY',  'I5w:jUe@}QJ0)VhAmM@mySz!`P_jnx1BtyQOm2++,4REo-3dl#V9Yv3<0O/BD%Qt' );
define( 'LOGGED_IN_KEY',    'QdcYJ[L98Rt8JeZAtsLe[56ax$d=kI9@)(zbr8a1u:kv%VZrOTDJ^,/4V;KO)/J-' );
define( 'NONCE_KEY',        '5S$Z?d:}FdxlcO#nyRxLgwqx#S4gyw{fj [)-sb@c-^wh?q>`HwRY?->{+@.yW?c' );
define( 'AUTH_SALT',        'g3&.Y`cGW1GpBsIy0SfD-nw5oL34,z_#:l%c..QL32!5lsG RgR]+5y0/Rbh8>fT' );
define( 'SECURE_AUTH_SALT', '<D=F4.oP^>1RsY-&aI_S<,bYw&QS;m`WLVL9-l+LnNI/_b4NDvs-t@=?{2e8#l*i' );
define( 'LOGGED_IN_SALT',   'O@-TF9e9RWZ]QtsKI}mz8O0z6&fa#Lvn#(7&cRt.$:#oi@KxGwnQa*0Bm&,1GhTY' );
define( 'NONCE_SALT',       'aGJ-tjE(7u+q{X^?Q^A5f6;eD_O,qwU*OF%H%EZ+%ZS6#3&Zw5q12FO0-!vNuIrR' );

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
