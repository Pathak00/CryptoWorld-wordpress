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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'crypto' );

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
define( 'AUTH_KEY',         ']V{*[j>?ufigf[3kVA@e_{1i{Jw2IOA<&,*r>H?uXD-_D>5%V U;D)lXPL4KGJT#' );
define( 'SECURE_AUTH_KEY',  ':ZQOc(VFy)_~]EB=9.R4tx7SWuK~|7jf^uIm0GCFQh7!Q}hW1t%WeI*Ut j;76DA' );
define( 'LOGGED_IN_KEY',    'ym>>jw|k{6Ojo#7RXF.#pTVt!/g_{& kp??7LI-6d,|a>Ev^-19iu.{(=w5,|iXb' );
define( 'NONCE_KEY',        'T{PCFg<[H}+Zgy=EJDA!mVa&:ICm*(]z[D((,2<>gCiQ_%qn4!?P>=5gW^2Eqb8t' );
define( 'AUTH_SALT',        '|A,P`3T777k*%:jqa0wsf&$R!En@Pqi.jUQhg$<xQEq{`9PGCHw81G6nfA[i854,' );
define( 'SECURE_AUTH_SALT', 'PMYv7Up6m${@Dl%8B_2McI}G(9((&m3=wDBzhJJ^;EM9B>fi<PM=D8t`pkOM|}Ir' );
define( 'LOGGED_IN_SALT',   '/4q&eM4duoPabi]3B>0q5-hS;;eIYh][^m~!LCS4U+hJKkpl-Pk%trFh&#Kr*uB4' );
define( 'NONCE_SALT',       '<Ozyl>3C`z[Fopf2{;@)(7kTm8= _).wWnE7Zdtk[,|0gKCwOmjVF*#*4ZGrb]U{' );

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
