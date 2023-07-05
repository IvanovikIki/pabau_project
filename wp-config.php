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
define( 'DB_NAME', 'pabau project' );

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
define( 'AUTH_KEY',         '}pc(Z/m$G|~I,b6U_}<<Isvx0KeI2wWaYnIFAq_J6]Gz+l=fqtl@42%wZZ63yx#q' );
define( 'SECURE_AUTH_KEY',  'mOP6y)VT9:3Waa{%3TC[ju%DqZb6iN>G.yHOb&WP($Ct~I.xAXo1-.yXun;uWCcu' );
define( 'LOGGED_IN_KEY',    'ESYhQH}a_y6BHNv]w:4u+URqSQOS<0uhcCE~aOT`wldG+$v _[,O1/t8Q0Hmv2x6' );
define( 'NONCE_KEY',        '^qBAD*BR=~X/HI)J9;rPU gfRby7_Q(h7$%&yV^4L2QCs>-CAd,ZbeS0&^1%xP2~' );
define( 'AUTH_SALT',        'zMG]G[Dcx>^0Z)mqw#<c39hL<(<}nCu$ImeD8p6S-}=$i($dNs.NTRF,IA2m4I9r' );
define( 'SECURE_AUTH_SALT', 't+3^g/i@.1[/eRJuIZt&$]QW>2OF%3LqX56lg*1XANi<wQYjB`Ns hl(Y{jQg$/I' );
define( 'LOGGED_IN_SALT',   'ALv>HUX,yQZR:9DU`jf,hX;TXyC+f`=Q}_!R6w2WRX$R?Wvs<{Gi?Mj>G}6>d)xH' );
define( 'NONCE_SALT',       '9aFxf#GIkgY#FP`Ume)~))Tg-FgBL9R[lWa&Kk% yE2_@D PNg2t]_?s8?gAx~Yd' );

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
