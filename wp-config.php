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
define( 'DB_NAME', 'siii' );

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
define( 'AUTH_KEY',         '3|&)1]dW-,tI-l0%0geOB4N90Gej!Yt 7i.eqZ7oTgZ~]8sbrH FNIM~CVNTbAG!' );
define( 'SECURE_AUTH_KEY',  '$N2}@nCJ/nzJY;R-J=GZ]v($I(?{Sh*sw!Xxy;onpH8>lc?yIo_`0rn5O*Tq]RXu' );
define( 'LOGGED_IN_KEY',    '95Y/k/i;U_VB*(Eq/>};d)zT)13fUvq#&,i4cE}eH:zH/8h..vX4FF&2hM(|@@8O' );
define( 'NONCE_KEY',        ' UQ-agVy>XuSIh2P/ |Ilws7]^OP0<<f:)um.V,-P@*}xm`CwNNbYy Q<Imn>CY^' );
define( 'AUTH_SALT',        'V#BD.k7[!r%Jpse+FRU9B9|zew D[#s7ytI/{14il(p~p!%eD~%6YN/K7J)c{ e1' );
define( 'SECURE_AUTH_SALT', 'WFIj7DF%bV B2mDd3bQ{9q.$^gL5yrZi,<=03U_rVTu&@V=#=Cd_# #T(t)/]W/1' );
define( 'LOGGED_IN_SALT',   'gpMzkyyE-&:KW|SPsQ.Dx%!qE/>`bMOaJ7eMyhH^qs?0,7+i&ByX&Y[w1D=Hb8Y$' );
define( 'NONCE_SALT',       'V{vbUc=|ZWN~jR=;2_x=f0IsA8T[PK0)T)l4v*3?&*? Ry@`K*D]K7T?n`VgU.F,' );

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
