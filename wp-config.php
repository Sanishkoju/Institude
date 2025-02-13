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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shovasa' );

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
define( 'AUTH_KEY',         'd4pplUnzl:5z-kzBKXV[Ad$g<I=I7@{{!PV )7t?]aoQ,+&-^o3h=gx4|vr;by0{' );
define( 'SECURE_AUTH_KEY',  'dZy,cjoYv!N [1%5Jh5lM>iCz=~6X+y>:*_{wbb8ojLZt<Qrq-TK<0k}V-WfcBLa' );
define( 'LOGGED_IN_KEY',    'U+BesNW5}Oby97SyZX6<boZB=&%!*sH({VezXpg1d-G]A7X(,aM8H^kT5:RXjBIV' );
define( 'NONCE_KEY',        'K-1<_q.%$!Jvd91a|6lUoAZM[3h[6>Ccjj]JoK6dXzvix(y.O3ya;fRd]ZbVEb60' );
define( 'AUTH_SALT',        'kHQOR91:k}#pTE&Kr Q6PW= xDLRasFc+ST2Qp,VvvD2ULPDCwbAyQ:6_7f@huKq' );
define( 'SECURE_AUTH_SALT', 'R9=^HOc-/BrL*;:s^&HQ8{+M04)[rnK:h@aSAi/NyL6,PQYW``~:j#K2Hvw1w{(C' );
define( 'LOGGED_IN_SALT',   'B?2/O/D_L/~[QdSekmF|7 08T|3{#7`jo*EH=4#8fq@9}jXGQJ%OKR[X_AKPbKw-' );
define( 'NONCE_SALT',       '#GNCGuw66%bO%Y`Qo;lVBVD=E1M5cT&-pcS@4voX]vdfSOv^;yYP&3V7^FFB>ktK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
