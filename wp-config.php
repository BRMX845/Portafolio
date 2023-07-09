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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'oSpXV;jDm8M2D1(+=?+?oEr+z`yf1h.j.1y%p^Wg_JEY|3jH{1U%&Efx#I[`/IgG' );
define( 'SECURE_AUTH_KEY',  'RmX5*ZzBV=z3w`6ivcIMm(-vUuTiOZOh&y`xhGXJ-Iv0^$V_-~#`vXF E/.pt6S+' );
define( 'LOGGED_IN_KEY',    'K/f~6;x&^</LaH^cAX3zy^Xp~Ku};r*f:sw+jXNg:}*IyFi$1B!)i+GaXycZ2qpA' );
define( 'NONCE_KEY',        ')Z@^&.^xypajOe.-Y} pf[UqQZcUS*Rm3U4-,C]!AL<QySiIf2#o:~;!2%!|MHtI' );
define( 'AUTH_SALT',        'S-gK,T8P#=.Mt;DuK!1Vh[x|UD~{%~ZL;VYS0&p}2iu~-z1UIW /i4/vDV,ac90-' );
define( 'SECURE_AUTH_SALT', 'LNINqih?WIYRsyPXM`O1t-0KBAx-6SB2$ r6g++J%A8=!=G}[dqApjGGgK-xtIS>' );
define( 'LOGGED_IN_SALT',   'Hw_x>=*t<?qA-?]MU/nXSkGIO3=MAE*jmIFz+@Bxu7BS>Wp5 veRj)Ugzn2D+7Sl' );
define( 'NONCE_SALT',       '&^L)`~S=-uz|u}^ovmmt%+=,:OrVW*m-!ce&x5+Ol:tItOg[WK,O?,&;I5E$@,hI' );

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
