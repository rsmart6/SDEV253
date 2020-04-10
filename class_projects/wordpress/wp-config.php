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
define( 'DB_NAME', 'sdev253' );

/** MySQL database username */
define( 'DB_USER', 'sdev253user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         ')[~6rO2tK28Zd$WPOWuO@E-iq^jymMm#MgUrcyZM;1H vEWshCTMYyW)bs;_QvG}' );
define( 'SECURE_AUTH_KEY',  'cf2d:L-Y>{1X?GsUlYbMpRzpaCz#W)@M0W#;zxJPT{ V825+)_by:1Qa d)RX8<Y' );
define( 'LOGGED_IN_KEY',    'W++2^m?c_`#7`Qr?0:,#xNrFZ1LT3^/y{m?I0tc</_|xt}pYP~j;yy}8Es>MTEWk' );
define( 'NONCE_KEY',        ']qMT}8hW`NuY_!&8iU&NwX0!on~H6b)?XD >iEr.|#((#iOGn!qbx069@iqsN #K' );
define( 'AUTH_SALT',        '[wg@zp0E|nrWy^^Bv)>kvvXHzCdZ9J=i.W/0PQ{Q0G4IsUs:9UjS2kY!kZH~O_Pl' );
define( 'SECURE_AUTH_SALT', '<x>L6FJeZ_N@i6C_/y55YYs^i:KqtpPs%OCfM6^oA>d;o4@]fwW)CEbB.Z#^cL}W' );
define( 'LOGGED_IN_SALT',   'VkaiF8mw;[tB@<X9!w0wt@xapkE()VkEnb_D_&8[YL=3M ZI.#XZ3$4$[Nx4kak+' );
define( 'NONCE_SALT',       'GBFeuS>Pfh7kpUKKUP7:ApLue[BpV0XL*_P[;idSI=4g;5S/~Bgw6(_Wh3i44?1I' );

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
