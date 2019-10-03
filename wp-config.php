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
define( 'DB_NAME', 'teste' );

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
define( 'AUTH_KEY',         'R@_+__+T:_!vZoSOsu[H$ZXN8SF3IQ!_AM.:H y}x@t2o8t/z,:XG7{ELR-f3&^{' );
define( 'SECURE_AUTH_KEY',  'ug+<[v^lQ1gI%o8pFe#_Wnn0=#tO50cVPtXpp;0_-4:{PxQ#B%C07y%!8a-Wpi!B' );
define( 'LOGGED_IN_KEY',    '9z!STLXXCPM1Q$<T>r(z{YVQQK9/97yIym3n*i8OuzJ6PR(ZtPs-`}NOllqG[{.,' );
define( 'NONCE_KEY',        'l)C|3le]C:685K6HXMvb~WHGg?3O1H#j)qY}{/x.R2xzdv{wVf.XB>}FSh,F]?j{' );
define( 'AUTH_SALT',        'P[n;fCrS(H`nPM flUD%/nzg0Y%{;/[6vsH#]}#b)!#-r0ZhX2@bk[0T{8(At!76' );
define( 'SECURE_AUTH_SALT', '[MZS#quGmhpoE(s**d;`YVMW>dDtVM;UUGFkGSF}2t4#&1|Vl(7Rs%aaB=+6LQ+k' );
define( 'LOGGED_IN_SALT',   'zh0(vk[Fn_*Ph&u=w0Ej]{81sZ.T@oQ:)7-`~hQH6by|kN:K}cxJ!X`0R-.I$^>y' );
define( 'NONCE_SALT',       'dT02iqsU(:lM31KJ*<!O+UVex%)}a.W&:$<Ed/=ZM?|V#R)I#DVJGUB]&iM~a,m;' );

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
