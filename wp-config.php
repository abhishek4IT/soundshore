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
define( 'DB_NAME', 'up_wp' );

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
define( 'AUTH_KEY',         'OQ0.EK@ru?$pX3<+z_vt1iY.1$*!OP$#n-_fe|-t*8]KRs(jQxO(P97@3RPXmoju' );
define( 'SECURE_AUTH_KEY',  'G(5*b04]1 a4|1TYS(=|hg>en76nc~}QpO^x1p/NoG9Y/=gSX&jpFWZoB:P_%n4F' );
define( 'LOGGED_IN_KEY',    '=~}lESONZni?l<X=B{#!TW$0RJ3:AcGQr$i./K)9W(p7LjD#4CG@A,0@_k1J#@iW' );
define( 'NONCE_KEY',        'AKmQ;^g-3iFG>o.PY85>Uol?s41<K&st-r5d0k^tkkF),emq)Gqfk(P/]~f#UHnm' );
define( 'AUTH_SALT',        'SKkbLX5(hXn-*dnPLVa2kbEb~eX+twb-`jN_5O38OSjBX*mj-ZU_yI70HfRDam:g' );
define( 'SECURE_AUTH_SALT', 'X 4)`wtwYCw5&g8M!6U`b9tv/bis+],OF1q.n>}/~r%(Kd9jR<*G,Ztvnc%Y{Tu,' );
define( 'LOGGED_IN_SALT',   '*3|fUU2ut0Q:D:gY mM7;f]0sG{m2^4[W$5DwmG+]%5g ~hU2X5at#pgt#l],b@7' );
define( 'NONCE_SALT',       'xdX.GYq]Uu4Kn^X%Wv ?HmE-rpd3Z#!=}ts;%?V=s*1iKWuh3#$C0/y}.+P:85=U' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
