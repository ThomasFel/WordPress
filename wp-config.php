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
define( 'AUTH_KEY',         ',h~(/# aEHm}n86aG$AZc~XoyLC3%S2FR*[tn9<1`O{aLl4g,(q9es?-$h<O}_<r' );
define( 'SECURE_AUTH_KEY',  ')CJSj<t$7h0k_b$0^vo.7st[e(^3[ #L*/b^hlQHg967xDr.384fP#z1CX-KAep2' );
define( 'LOGGED_IN_KEY',    'F1#RbVcg)Ws(s9G?9/L28-}y2:9OIe&lJPvxG*~tu&W!MX(YVy@C84w6.!0<8#qM' );
define( 'NONCE_KEY',        'rAVs@`44G.AMr+mB=M*=ClX8-Zm-=qo(BUqXGXr[^C;Dhs&-R0_qV[,sZ;eLY>Lw' );
define( 'AUTH_SALT',        'F+JR_8%z_(YHq,96_,}F$W~ZN^v^baWQ6%X[6IRqO1k8;jwG7{uvq}j.J=.v5sdp' );
define( 'SECURE_AUTH_SALT', 'jGX61,N;`oU=EwkT@0k{%2@@8W/HS,qPg}B}+D{Z#QsbQ@{#,<dx?#88Eq>Wd^JR' );
define( 'LOGGED_IN_SALT',   '+Q6dZ7[_B`nfJr#SPgIevjFEoz9ieyDqNx6Y]lf S|!69L1q2rR;=zwrqS3#L:Gc' );
define( 'NONCE_SALT',       'BzK}Q}yKZ]3lRQ_;)j47x:ffPE(Va`!p-RmWv%;xug#PBiC&U)SE*P~R1`5})2|~' );

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
