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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'BI0R2SGa^BKtr^]MnSDn&2mHbqFr]QzH-Bkl2w9[vc:Pg@z)|pg]C_W4.ALoe@[_' );
define( 'SECURE_AUTH_KEY',   'C.i+LBnxLouNVrhH;3rsa{^gxt`){P:jq&{f4zWov-sj1=0*RYcF.(&h&,v1x(I@' );
define( 'LOGGED_IN_KEY',     ',wT<|LW$}0&lx9pQna3@iTs~KR.,y#|](tR5~!OZ#^Su .d+]j*AxfLJJF5&TP]!' );
define( 'NONCE_KEY',         'N x=D:P0xhA+3zYKBl9]}{)2PtOyP>RJh^SXVAV)ypd0y^l)@O`aI=?W.-=WM?6G' );
define( 'AUTH_SALT',         'QcOZMonO$kT|@0e feVjKbF+g<RTaS|6}q|HxBJLaVpRX}%r7}XY%&C[Wz%mm&B*' );
define( 'SECURE_AUTH_SALT',  'eBNd(J$lPhQF.dexJ3{SoEEm~Ll$?%}Y5W8>0nIRo0k=_RiBLY jmX4zOH|%7:X1' );
define( 'LOGGED_IN_SALT',    'pM3`{&#5J}#vKe/3U%|n*[KI0m*;bzyX.|sP(|@yTC]$*i=R5Dr6~&JE6~kPqhH.' );
define( 'NONCE_SALT',        '+{]}t&zf$W18t`!9*ww~2Dh>L87b:j<oeYd8d6u8&,eI4m=2`y-U[-4JU=b#*L(s' );
define( 'WP_CACHE_KEY_SALT', 'qe)AGWPP8Zt6#6GbwPdPu>nBB:k@=&Hp7Ew.25neb~bkGJ4k~FIgfN_(c8!0[cUu' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
