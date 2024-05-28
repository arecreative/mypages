<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'mypages' );

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
define( 'AUTH_KEY',         'c|u$R,C~ JIe2+!!S@x=7oCrMibM}W9R.Zx#:71x(zJ^#-WG6AOrqA(Rq#<C<+tB' );
define( 'SECURE_AUTH_KEY',  '|J.mm6(sq,mg!J{ox]Hq5^t,N=Ps3j}PWWMtr= iozHkJ9>&$5`Ao^zz 0`4Gdc0' );
define( 'LOGGED_IN_KEY',    '@TU`PP!OC!U]#OHs7 u(EYzv9RkE`T1!!C#X4}is%>_rewfE&k.v=oUr7m:_:9su' );
define( 'NONCE_KEY',        'nRVux{fu|Mi=Y5}TVdtpvSBf7f53:v9d4j4/][dD:Ga`%L+%v4:T/0@>8f=0(4aD' );
define( 'AUTH_SALT',        'OvI%/&yj+[fjvhki~7}r.peb/@oJAC>DE4`cqd3ZF;U~/1VfdCrS!y#qDlb7[^@m' );
define( 'SECURE_AUTH_SALT', '#=2)S<Z$=`A=rL?#32g/zk3LM.>4F8)AVYzXW3.!4Ay8/49:GbYhmU@noxFJb=GD' );
define( 'LOGGED_IN_SALT',   't6[:D{rP{7-nA9Off w5Iio|=@d}]4[f&F0-U.nX!H&)u_od`Q^lY2ydjjKYFd&Z' );
define( 'NONCE_SALT',       '||.x,7Tmh8z`qG`Rn|8BYop|jJDb%~kl5Yt=jm{u]n3E_au=dBUfXqb!wz,Kj#AS' );

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
