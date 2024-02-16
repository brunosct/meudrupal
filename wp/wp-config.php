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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'user' );

/** Database hostname */
define( 'DB_HOST', 'basedatos' );

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
define( 'AUTH_KEY',         '!m;aELggvQ]b0/!YsbnJsYsE&cOFq59>%tb0(3O|81n`MYM89`ldRoxUGa?E?:V%' );
define( 'SECURE_AUTH_KEY',  ';xcWu,S3=2Up}k4ofmW;sv%!fzj$&+Hjirl^np3<QRx9k-4#^QA0ps6K>ER>uLnD' );
define( 'LOGGED_IN_KEY',    '*_hDoCWR_H;>g#Ui(D,OA5~-)FDFMfN#%^o%6kno<kYgH=-+!kv#8FadWgBSf&h6' );
define( 'NONCE_KEY',        'j#1^h<c]_y]dv{:qMwy<;(C.BKS.D,(ho[<(|f0PSD~>upUhICucElO*ow;n#7zS' );
define( 'AUTH_SALT',        'M:gelz)B%N=XvrWb4yA#N@s})-c}EoR@GGoEb?m+TU- XBms_@0T)y@TaJs>_MBc' );
define( 'SECURE_AUTH_SALT', 'A5EjYrx^a$rE3`IlFbg=}5xr?DMXN3-kX95?}Bl.1KxR7v$z5Cr4dLXoC)iARNC1' );
define( 'LOGGED_IN_SALT',   '3?H?RL5$#DGQW1::q)josK*![KJ5Vf42!98RJadsk,B5pZk[b)A3:`E(gze2_xP~' );
define( 'NONCE_SALT',       '7e}]MpYlY?fdtXPZrUc?plBJt|c.//pQIH4XtOLgE-1M|<6;RTZ!Ps/bL~cAYpVw' );

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
