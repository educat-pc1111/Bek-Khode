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
define( 'DB_NAME', 'Hello-wordpress' );

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
define( 'AUTH_KEY',         'Vm,l@V<Y>e#z6&7o^|kx}C##gv}K2Ig6Bl `/2U/c_HW@5$dG0poNuM%fsJB_G%z' );
define( 'SECURE_AUTH_KEY',  ', G9%.ncESqri r?Iz,Rm)I*Cbr*2w,DBrI4(cq=j61V&.Yf<L!S4Gv}U{ UUQr1' );
define( 'LOGGED_IN_KEY',    '3g|DG>W;h_XO$/X!^9p_gkN>A}hm=8.bi6wgK) PiQ,Iwngp=+}YoXFAEQIpQ3tE' );
define( 'NONCE_KEY',        'Kx4Ye*J)Ux fPt|50mr}{&lKxQXPI%Wm3~+i{$2e_d}!VwOhDaE2*UId?iE.RUkr' );
define( 'AUTH_SALT',        'G<&4 +Z5K=JlKx)J%aM[axl2v2-aewW;nd3~mGXoU8agk/7yT5j=Ahoc@w%:*Wb0' );
define( 'SECURE_AUTH_SALT', 'n6N^K8^{wPN1-((UO/x8RbvJ`Nm4(TP_U]:Y:&n4hvoE]F}gw=d0PelD{*[^F;`}' );
define( 'LOGGED_IN_SALT',   '1gLZ^=PY^,Oy)J8X:1#jGO3^2r7^#?XUkNft,Jlm_21`si!8CCdk9|g1~3mYC}FT' );
define( 'NONCE_SALT',       '1*u0#C@wpvy{R5U1Y@^JeR1=,lAn$8@S,1bZyW{W}&E:fht;h@a<an7qI1f~Nl(1' );

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
