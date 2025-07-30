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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'oswJQHg/*]qK6)D3' );

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
define( 'AUTH_KEY',         'jK/?$3GK;)stVlSf<LHhLxxWMCT!=r];VF;%RKLv(2olecE5cpo4RTxiaS)sC%,#' );
define( 'SECURE_AUTH_KEY',  '&V$CdT<IhzDZZ)_,P*:4Sl}z$L]Kck?b3hu5Gx4}RM0q~_0I2;jC_>3RF?2%ml)w' );
define( 'LOGGED_IN_KEY',    'sV(-Zw>$oJho&#09MvI^0&|&a3 l+]c6:W4W8?F3|.A]TQe)_F1EDcNP&J1~&Do4' );
define( 'NONCE_KEY',        '3i.4M+FO`TN7QN)[:pyvccYC0v@ikr5#P}ZNPleJD#B^RnBHkt>J|?Xf$X.TU*rC' );
define( 'AUTH_SALT',        'g$/7/+SNAF_N*MOX9NG@7p@@H$d9!IV96755St@j:=<na_z_@ml/4B3F)#kh/60p' );
define( 'SECURE_AUTH_SALT', 'XQbn/T4K[b/SiE<>LH,<bX/IxRMn6,iOm@8zoAcl)-lEfZ#lJpsOz<NJPn;R84a9' );
define( 'LOGGED_IN_SALT',   '1_, clL?{9t9c.y43d*Gj>}OaQT&I9r G7_Yo<uQ>_5=5bv2PkFrA-h5X&gL8A4{' );
define( 'NONCE_SALT',       'L+ +ur{?@1!(+!k(imKwxK]kFS~6b%ral(S0bj/%/&A$*>z,WPfPD<X{csIF33*m' );

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
