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
define( 'DB_NAME', 'bdfinalwpluisamejia' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Tvh/OkHwt/,GrDC]YBJ& {A +~kKq2DJb{t4{d_k#8H5Q_tbjXnz.r$U/IzFXlrO' );
define( 'SECURE_AUTH_KEY',  'Ad{jHeH=7y{[u._>LIB(8*HbST]K@DJ 3<qLhP7abw6H%pUp,r_](aP4FMrn8T0>' );
define( 'LOGGED_IN_KEY',    'e%cQr2[VH9rTkI8$sEE[k9=XASYrzC[Y<]hvQuLTzC/A.u_E$DB<al@+4k2b;RK>' );
define( 'NONCE_KEY',        '_HTtAF/})_~EdWqMl2SDjtMtVj>1sIlK,Mjay>0;]4yPo$sh$|R~nnMFa~|^jyq2' );
define( 'AUTH_SALT',        'P^J;mEEmQYtS|`Q?Gs|K^lO7eD`vrFsx90YnrA0-W8xL<X[_4;,O`|]kVI7~Sx5!' );
define( 'SECURE_AUTH_SALT', '|I4.xq3NDm|84)k|?P+7jd.LO*aa?pic_6I{s:1(ptmE]n]d-hM+VrIr WjPi_jj' );
define( 'LOGGED_IN_SALT',   'k>>PU!CG1g4Od|UXY(HR~G(4?yeMxE+,_oc@-;F$=I:QImHC~G:51rS=vY`:-o)S' );
define( 'NONCE_SALT',       ':b,=$}M#)j;?Dg%[Vd_X1u<P4E6}G^C wzuS:.~58MO3U|muW_(D#|m4xvgXylC&' );

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
