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
define( 'DB_NAME', 'mohit_db' );

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
define( 'AUTH_KEY',         'D}w1&t~?g_&R8@/W(@[@J.<:Zi+?]Wl]@Q+i?cuaSpZh3$~8{2(5ay=N#%:|g&^q' );
define( 'SECURE_AUTH_KEY',  ';]. 7Q^1[0=qBpGmXJjy@c,ucl9JvDESyEF0AtTmuDk`4EVH1fIYvtQc)lm/r3/i' );
define( 'LOGGED_IN_KEY',    'A(T*t@0w,>A^Knnd2T(L^&#M][&F?yg8LQE1H+(|]G1@LvXs40L[?)uh.f,|$] n' );
define( 'NONCE_KEY',        '?/FXqx T9s+Ihj@tE<#CuRN`9S(k4#ExQShiU =`Rpi#skrv#uS[]vV-p)^6 #UT' );
define( 'AUTH_SALT',        '>uieq.Cr&uYagQ,U5:G$*rU-3% 12PK,b@{;JLp{&ZH)rZH,|6XXcm<I&G4D2_X]' );
define( 'SECURE_AUTH_SALT', 'nmL%,tu_YMr|fZ&1!6RCV9G9T8OF7#&XNjH?>uu]&j0rR-#7Xs5Cv8x_p#wh0--6' );
define( 'LOGGED_IN_SALT',   '4lBc7mKE%3)%(V(!7?TxK#fz}4~&^hBn,HykgK7_d[L,N!nGbng_5+L(Z?kj4zI[' );
define( 'NONCE_SALT',       'LiKX[)z`2}D=`K,-!0-`Ex:MwNKD?N+XIArIHl(>~|cB<s5]zs[/Oe-+#A[E6 mN' );

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
