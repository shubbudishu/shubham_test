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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'yatraway' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'b+qMdVYmANM726)8+*(Du.iz?M$sd3SG;Y74U#Tc;VZP^t5:PN:r%0e^A0zWVSV4' );
define( 'SECURE_AUTH_KEY',  '1a`gjWE+eO>GD3=*3|3xmNeTf$l~88sKQ%!%O_70^PF{N~s>W,}A6[N`)F$Y(L>0' );
define( 'LOGGED_IN_KEY',    '`-wl]D6*9){L1Cuh/>0X8flR^_z~1$w?FurZ/+q(w@_=!-y(FP;4Sx{gU&|(UtO?' );
define( 'NONCE_KEY',        't-G oh6:VRs~fo[RbjWW1/N,TT;bLqyGB|+rj?%BBq4MLO]?aR~Kk6ni3Fez?`}[' );
define( 'AUTH_SALT',        'n^X8?hh&?r?YO=`8E}`7?i6KFFP!{Vv*z^.h#JRLx,%OD]>HD=f(]:IP4mC[vWK9' );
define( 'SECURE_AUTH_SALT', '-:g>Wr$]/~!9CGibP%@*J,,[1~Q^qFM/#p0p%:2S|)[^i?2>~F(!4=S>UL7E3Y5j' );
define( 'LOGGED_IN_SALT',   '^K<$B]. 6?Mw,!/b^q,4*f6c{*Ctio[8t)UdJIa?,)QAEf+cfSKOP|Mv0LfC>$^E' );
define( 'NONCE_SALT',       'KY<Y!ZdkbdcV4awFr, N-|/ai|-f*x;p3Q+X}3=v0q:_B=1dDV_ULo<aSG(g;X.?' );

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
