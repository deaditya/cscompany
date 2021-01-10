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
define( 'DB_NAME', 'cs-company' );

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
define( 'AUTH_KEY',         '.[Ft];^?x+C}Ik)md !)=f1dB6S:vfB8Z% 6l6EIy^)b1I=~~y~t(wfj6!.^ZFKs' );
define( 'SECURE_AUTH_KEY',  '#KGYgX)Z<>dt5Zn+/Eo6|8Y}>1?YK-kJ8?Cq#ZY&+tPUB)6NT&[sG?YmbKQ}hAwD' );
define( 'LOGGED_IN_KEY',    'X$M27,/^j *uteU7dyIi}k/RK]LshTV2Nw(Yq,-TjYCuGf6m?AUlFn}|?t4FV?XB' );
define( 'NONCE_KEY',        '(iSw^ErMxIkMog;R3~nDnDC#%$cZa>j).JsEF^cWs3E$@~<F~`6LDR3tRNj XmC6' );
define( 'AUTH_SALT',        'J4Q7I#5SR(>q1phzU1,J0^Da{RWkrC,^S%sO.+|?Ype/EiX;-ti-5c2lmj_&A+=-' );
define( 'SECURE_AUTH_SALT', 'g,+S$ DDJH7F2)Z=wd3!5a_VlL7wU}<R`_S++$4;7Zp~fExVRPF]kLWHZ)RjnDSq' );
define( 'LOGGED_IN_SALT',   '3{r<$tK0IO[`KPnix1_TtTCHLnguB2XTh<#WAj}~O|)nL*$JQy)ol1VS?[K9xMqE' );
define( 'NONCE_SALT',       'ME?1~N;;JfX7K!cY2qh9qSG]wMor3f:^(GED!:s_L:~xbHT=CT7F*cFaD^c7-?c%' );

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
