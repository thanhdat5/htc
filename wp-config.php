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
define( 'DB_NAME', 'htc_db' );

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
define( 'AUTH_KEY',         'YkJ_Ig!,Pb2 J}(fVsdSZ-v@Xe*h=#Suy(d7ijhH30pH^,WV[1yC82%j+gX|r;ui' );
define( 'SECURE_AUTH_KEY',  '{};OVzSE%&tFP+l$8%$+8&!$NMj2e]ny_Vih:?76C[a:{K`E]W_h_m?+] .TZ|E-' );
define( 'LOGGED_IN_KEY',    ' 8aMeHPsnv0UZ-asz~ctv.5.@JhC,K{PD:)/zK)4058!(s}q_&qQWw*%FIcuyfD`' );
define( 'NONCE_KEY',        'sWzp@7}g2Xb059b%9sdB%a,e/!NP7YIQvaE9gAl0-R|sT&(1T y-pw~KUkDpM5yf' );
define( 'AUTH_SALT',        '1S-r@Yp=`sL%RfS g0kX5*^]D`f!-{6*Wn3@Mw1.|K(tWcEX16qn^w2;>`B@iD+K' );
define( 'SECURE_AUTH_SALT', 'ay2|DDN73F  !R;lb%cNjcT6>?gS^WsZqT/|uk2Xt&tP$`odk&b0:2 :nZY[NF2z' );
define( 'LOGGED_IN_SALT',   '!fGbWTbWkmE/T*? C4=gHvy)/Eg7`8NKjrgH[BrnY{]*U6@T0{Pz?A0&n5xLmH*m' );
define( 'NONCE_SALT',       'q0)RC:LSdl7XLrwfK-WpGJ/K-hogVy{iQW[T[z<Q)mpV@u.&U!tst&5X@Qz}b3KL' );

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
