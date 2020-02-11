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
define( 'DB_NAME', 'CleanDeed-Teak-Furniture' );

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
define( 'AUTH_KEY',         '2/`jPuzzSX6&#}~7G}p;JOv^QZ+]V8A}Y5,V!|V^`hyfIhrBXzT_qPmKPN,)YM ,' );
define( 'SECURE_AUTH_KEY',  'eL)ez0DmRh0-bw`NMy[YVR(=((7g/&h_%DVjq(6!N3B=]$&jeW*p9b]:bwZcK54>' );
define( 'LOGGED_IN_KEY',    '9{M d!*nyj_0lP&{J7?jhZRL=>55kSM8:^9)SHR#x8+j(C-CUnoiQ#ZYWTT-}Q&(' );
define( 'NONCE_KEY',        'R6Fh8hh<,Lkn+]fhJ^mcsdC7N7L14q_,op?MD?93bK,l!r@gY{5iO:tRJNzi6tt0' );
define( 'AUTH_SALT',        'Y}nexuk&LJp$|o>@;&<KKz[56Z%*W?`%$=pv^Ja/He]_Q@{Cq`[2WNjfAiZ`j++<' );
define( 'SECURE_AUTH_SALT', '_6*5e0Btg}ixq:]2<~j!LbUSiIYau|Rjrg(gWQ&aG6^B,1YAX<bri;i`|x^7UmW[' );
define( 'LOGGED_IN_SALT',   '*s|(~7lsH}_>P]-R0.wFF6^tV#K>z@59kc<ZJ( D,z:X4C>:Ab:HZHvm#v)jiLO3' );
define( 'NONCE_SALT',       'LWV*[am3Nvubis9Nb_o&wjah1Um9Pj!mMUmS hK3cB Du7e+CSM,n5Xv.3m+u2)!' );

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
