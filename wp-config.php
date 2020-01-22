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
define( 'DB_NAME', 'wp-1quiz' );

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
define( 'AUTH_KEY',         'l~.}S*f]|J-aphY$KEl6+5<uqQ4nBATq6wf,&*Qv65m&XjBJiv7yaCLN0uJxA-`-' );
define( 'SECURE_AUTH_KEY',  '9T5e|g D #47_hFa~o5q*Qd?5;;VniB{s9A-y`wqJj^-3&I#ROlUZW,BM^gCnNQC' );
define( 'LOGGED_IN_KEY',    'a);-`H],!]_vp&|.tVKeZY_m2[;u!A7t{R lo}SY(a8p8le#csq]p6S6W4hjhF(2' );
define( 'NONCE_KEY',        'n4I<5RV!|u&B+D=|h/-Hg]wcYG tDzX*DHtwOeQ(~vL0fBW@nGV8Jzs#ioZ_;RC7' );
define( 'AUTH_SALT',        'CEHJ[Svw!Mdd|k$/nRG2T]{Y0L$jy5Gh,FkJ^@!g2d>=)A1fR<OjY9/H,;{j=)}H' );
define( 'SECURE_AUTH_SALT', 'iR]~Ux=aX;]!Ia+DbJ<[}!y#n{Eyh6%*]NS,KYI9Bo5#oj&D1vJTh`%BhZxIJMC-' );
define( 'LOGGED_IN_SALT',   '|l6k,6uRN#mU{*6*A3v:dH60%x``)(X.RcD ciMUi{7gld#j T6EQjS,<L/T`6u_' );
define( 'NONCE_SALT',       'dJ`.eu~ZQOT;oIS,z6Bng 6W|GdrD(kt=}B_kgAvGk6? S6?:UdUbVD?h]]6@[<$' );

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
