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
define( 'AUTH_KEY',         'gqg__Hxs%!J6vNdHA9d|?_.k*.{(l&sJ$GfD|9qT/Oa;GuyJ=K@YO:5^tS<z[80v' );
define( 'SECURE_AUTH_KEY',  '$R=($ih!%{pOX-&:^NJ/vg9!VEAUfdO4L#|[mm~4tItn<$/droOEHf~|Z!] ;~7q' );
define( 'LOGGED_IN_KEY',    'r$o|/->ZL?QV#){69Zq~G;Rt|@l66(1z]H#4[@r;`8>x3*C(d@i]?Ag/5-L@S+e-' );
define( 'NONCE_KEY',        '/mST{mNXZ/t(aglaBd;)RQ)~k99 ZHZjNWB-+$RFob}/g91DDQ+z{+<-xByXZ8gL' );
define( 'AUTH_SALT',        '[OMG Jm!:X9JHgh;}<<TmL(Yn*.Uh?4kl;u r8b9UmrE4Nl%{$?*u9&kfi:b?Z~W' );
define( 'SECURE_AUTH_SALT', '65^)<)z![%uqZ*UZ)k:|QYh4VRbF^.]mr7yM@9>GkJR6voD#?dgn&eQ}?a{*hCo^' );
define( 'LOGGED_IN_SALT',   ',+)dt8$!2;:E~y?pI%,;3x_85WB*1uV&uK-n~WnOpGdU7{As5ynSg_;*tR1+T!Lj' );
define( 'NONCE_SALT',       '-WIe#RQbiollq>G<zF?@R!oS^N@LQg51l# ^2P1~M&O7G2Z)M6HfLM0>q-2Hl&?&' );

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
