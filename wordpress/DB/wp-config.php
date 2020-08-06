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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '|y[?TAN.w/2;8KRI:&9c|zhl&7r$_1l$m[QnIB-&l-g)q,*9g4IumIj9.ta2tw(+' );
define( 'SECURE_AUTH_KEY',  '`p=eXWG)BKejO^Y/.Sm~9L|t:cm?U:a4+_HGiF6aNRy2Gbvs-3a$e2W5^*OKbkJj' );
define( 'LOGGED_IN_KEY',    'uL<f}O>rK`XCSJamQr0w5>]*|+2TY`&`Y0gPnfy.NYW:*1:?[@S}-p~F}sYB3kH+' );
define( 'NONCE_KEY',        '}Hsa[}v_2f(cQU4.[^b]3N512CDH{3}~[fA!} 3tuIp$A^=IoYh@xbTefRgEMGFZ' );
define( 'AUTH_SALT',        '~lmyeD[4L`SDnJU|$gYm?I35gRm+w}x<ez6fUY2Wf_+8?Y6=~Cn?D}2Zp?bzW(nb' );
define( 'SECURE_AUTH_SALT', 'GH`E={Mz3}G&~4r}skT~c.crsA.1^T/]8f~=U=>1vT6.!H]TpOCY+c5c3H%z2P.G' );
define( 'LOGGED_IN_SALT',   '1 ^eQMP3yHuo@X&iU%6[:xOh?0u282-6iHb*qS$Oc~;uwAAh0^]3HEI{V(,u~<f)' );
define( 'NONCE_SALT',       'J@@Rvl:.)_xg)&{o!yjjt`9 v6UCx1S{/pj}g!q~_|wvr.L(R,bXO5XtbYpHDKuA' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
