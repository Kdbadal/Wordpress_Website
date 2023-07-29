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
define('FS_METHOD', 'direct');
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
define( 'AUTH_KEY',         'eTT;3;jiQ5,fp[U0xg|-#w8`88=Pc/#t26%f]r0 GgSp X#6q~BW4TbSE^Bq+B=x' );
define( 'SECURE_AUTH_KEY',  '$#0F|uEuU=Y!qS[l`)}7.)Vk!iZmP_LhSXt-~>?%}Q{}#z<zB7;_=U|N=%,$&Q*f' );
define( 'LOGGED_IN_KEY',    's[>Za{g8wVeCYK`%f^bVB=3Hm$jXA>D=dM<sv,^UCw%Vg$K/rl+hQOr23/R*b;z]' );
define( 'NONCE_KEY',        't(ks/{*pl]%c829Fn;{kSah42bCr|JDz],a827|s=hD4F7N11_-C)s/HlPa_48Jg' );
define( 'AUTH_SALT',        '?@DOP/r.<~{rd5HCA&1R7dWZqNg`e9zHTKw-v:9!e:i{6zmFtQ%F6rXQ-8)CJvsQ' );
define( 'SECURE_AUTH_SALT', 'En?R4xaP[Ukz]8;Y3m=6o)v[AxPjJIsT;KB-93r}_[BUk(0GZDgk@A%ASa2+N+h~' );
define( 'LOGGED_IN_SALT',   '#dCY{mQzR.8~bO!X!sL#k{d) SN5*I{6o(Tx!{zkP}599^+vJ0SJq=E~C3*.gaJg' );
define( 'NONCE_SALT',       'rE!|*@|T3rc=T*,]OEf+Ox5|/$8Q!#I:G>c<J^{u4V5+no1bWVxmowe?Pq8h,S(M' );

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
