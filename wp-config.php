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
define( 'DB_NAME', 'japanese' );

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
define( 'AUTH_KEY',         'N#kS0jX@#K&cU#9=E@O0]7l6m$5z-mBu:75Rq.tlEn*sov =q]BqpEX-Y;w~Bj6}' );
define( 'SECURE_AUTH_KEY',  'W KI0YZF9?v2#BTSC6L47[kn^-h?jKw!<(g2:tK2aZ:!UiH:7N3IyXJlWz*9&Ump' );
define( 'LOGGED_IN_KEY',    'LZ!NAD:7cURA8[(7aG`8(F6gtZq|x1yZfcrE2&;-R4 Re;~~rf?K_CYB(-_M@F2@' );
define( 'NONCE_KEY',        'Gk/ 0(kStjez/G5BcIk4)Z0{oFYCW?>bL=CF*|v@^sHRw!82gxf#|]s%bi<hvVJt' );
define( 'AUTH_SALT',        'ju5|P5Caf/z`Lab5fLc)J&|*@T.WYFSEuuV=7&wEGPd/)7Sj2e&+5F;8ZPLf/F[/' );
define( 'SECURE_AUTH_SALT', 'hWU3Ux*Y(k4A[2(iY=`ZF*QIR{k{*p`GB`Dwh|K|:=4ZNTyI}eZGqmL[fk[>o:*k' );
define( 'LOGGED_IN_SALT',   '0[SH{lRV4sax{cI?dJd6> l^Ur>g92+l{ts-LPjjNB502[ANhTLmBOcp*F9M#:?u' );
define( 'NONCE_SALT',       'k7^KvqiZ4c?c;S|WDQmhJ8Kw<#8CM7l}SCXIDwoJmC3Q#cBia]tK0=tP(F`lY[i#' );

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
