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
define( 'DB_NAME', 'aquality_wordpress' );

/** Database username */
define( 'DB_USER', 'aquality' );

/** Database password */
define( 'DB_PASSWORD', 'aquality123' );

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
define( 'AUTH_KEY',         'Lnx&xqW_1wr]@:L~N1X$ktm/wXuI;?u:)<1tr1`&U?t]N7)?e^&8A-oRmN`@s3:H' );
define( 'SECURE_AUTH_KEY',  'H=c:S9pGyM4Mc_O,5Y6rqSzIW`!:s5`0X*]mR]1{4lE1]%cmG4/%_yLZw]O~^u%r' );
define( 'LOGGED_IN_KEY',    '|#@k1V0yJ!IsHp MgDoxK/8F]^R(LeW^c~cJ=Ca&uk (UC`oOcR-~~#wg(S[nPun' );
define( 'NONCE_KEY',        ']S:Lw))2Y3.(jHQAXLBtdy=E[=ZC[y<Mia|qs@lv^YyW(HE.|w}5i_%s)qEpM(``' );
define( 'AUTH_SALT',        '0H}BKS+G>Pguez|15F&?)FQFAo8`kgaB#*ePIUk{sAgQI{3CJt<-soPpxPZaR=Bp' );
define( 'SECURE_AUTH_SALT', '0M66d!YUd5aY*-7H/Yw&s|we%4YZhx|ht~B)WUha$Wx>fwD5F@?LNfdrC&<}e 5f' );
define( 'LOGGED_IN_SALT',   '%|fL)6H6[5z}|rK!03dQ,sH>x*<Pxey&Z0ZZ5n,)o2GI*HxdW!!ixLXQ]dnL/T(N' );
define( 'NONCE_SALT',       ' I^}2Mni9k/(/D!n8X+`Ow=RK}wW)|5~,0b*C#~xz6(r#<?Zg)a.6^BEo*,cLG+@' );

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

define( 'WP_ENVIRONMENT_TYPE', 'staging' );

define( 'WCPAY_DEV_MODE', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
