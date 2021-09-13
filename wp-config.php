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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         ':;uIXjN-X,GI!G-vb}6=vI/Fz3Pd}_B?W/`c6bJE(f<jnlL#NaH*y|MN(8;Ft3+Y' );
define( 'SECURE_AUTH_KEY',  '^A^gn{`lF*cu%^kHx!K&bE;jTWsg1:IJuAsR2PbAfXT4} zg~ hK|@E>Gjy7#yT+' );
define( 'LOGGED_IN_KEY',    '.<)MuJRCo:/XdEY.msqj?ol.5.Ng<dG+#DHFf^Tw|oHR67x^o^BX~4[I;R6(>#]8' );
define( 'NONCE_KEY',        'zqp~_^ZOLAY`vtn)k8xM&gb@<dHVbw}GIYFXrdnDme>*C${+;ZT<30c~x!V5Gpz>' );
define( 'AUTH_SALT',        'bB5{VyHb3G&<lDlbPbQ]N0B2=3j~)HH|AT+iI8l/@Dx>NC}IqF`?A-$YVyTN#<ge' );
define( 'SECURE_AUTH_SALT', 'A]4OAjz$xyH7;j(V$ 7eU.l;Jt{Qw?a/fO;EF62F9WA:${er=E6Gft%7Ze(r75pO' );
define( 'LOGGED_IN_SALT',   'ZP#A|sgQnA7n#tZlU85)2@PnzC<MR9j%5t_U zLo$}ZmCSg|_rih<iH%VXzr[Rem' );
define( 'NONCE_SALT',       'n`J)Fm(P5Z31N^<frz>QN+],p7|,otb:hBurd@6gw4,[j!BrM&%iR*g?o-&`I~+G' );

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
