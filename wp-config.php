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
define( 'DB_NAME', 'cerithtv_db' );

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
define( 'AUTH_KEY',         'O65G&`P1$F<~Ra:q9T<} ?DIaBCl?yB}jV(xQ<Ipr0(1iN0[DI,>~TujEX-C}kZ:' );
define( 'SECURE_AUTH_KEY',  'kVh#RC0kbOhBPl%jsBb1;H$9|7}+VLm1Wq_n5d>;m4<G6IZKL$9]&R56im7vIqy~' );
define( 'LOGGED_IN_KEY',    'C-+7:YXXw$>nhnD[LS1B/8X}JO`L|CmZ37!88I&@^Ajj!oWv6dSdic~9_c;VyJ%I' );
define( 'NONCE_KEY',        '.A)N 1&%I0+krOD6mNg##y~I~k&O,$:[kc#T8g1im+rG8x.#~Gky0P{_6{toP~h@' );
define( 'AUTH_SALT',        's:$r]5pn0c7kO&^{%[rmG0>PoSw!X0>e=5w@`34B24?N4FYW ;nED_@!p&V@>/ !' );
define( 'SECURE_AUTH_SALT', '=ZA*+pP+D0I9[/xHGb#|ehx@;A@7>#jp_y,3!x_4;pu,dT#oRJCRxi2~g=TCZ$bw' );
define( 'LOGGED_IN_SALT',   '(6&*jc_!D*6f[aulVo=63iOKt&iLPUN&jvVU (Jmkyu1f(n>@:8&egq>S1{W9/3+' );
define( 'NONCE_SALT',       'E!5;,f7xBvA3.mw.gGi]k-!MO,mWr?PcLybH2B/j7%l^[>Y{@3V-q70%s+zl)/J`' );

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
