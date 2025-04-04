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
define( 'DB_NAME', 'github_project' );

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
define( 'AUTH_KEY',         'e%>sSP2ZRjps6C#oxa)PbTV~+i )6vv<Iz4.uTa4~T@:JHtT<1O&kO.nRo#I<3+d' );
define( 'SECURE_AUTH_KEY',  ';0JZ2(Bf_A0(ZasR#-awVH4^oQ^L 93:lP-{JGnr&qDT7ejhF:mD@k] W/@r*:i6' );
define( 'LOGGED_IN_KEY',    'VH~fVn0F_8;cPuc{2}=TZ}Fr)EDIoG  F2xwj*J=m?3p+U|;]DM}7ERo(cW^txVB' );
define( 'NONCE_KEY',        '0>rY4Ts5#BHWT^3u]y+io|wQVV6>=?ER;G|xR?:v;:&y:%Bd(z5a rf*F%,:{Ev7' );
define( 'AUTH_SALT',        '&e)E=6VFM8NSZ>PhHJ{1Nhfe)7XMj9ss1S?;b/C`KAHUa^#Bc:d$MOkcZO9X<<#L' );
define( 'SECURE_AUTH_SALT', '%yATC6D%#)VJ+*Y2`h~PH>=:<62O@3xrPyBMHhI%k]GLQbB?k|bQ+D2~y];7}5h&' );
define( 'LOGGED_IN_SALT',   '9;/S8^rX*)??0*0$.~BQ<2Lf<R5rR-#*)(_w3@^19%$7I?]d`N<olDoH)(XO5 z,' );
define( 'NONCE_SALT',       '>2W;[OXK6mB>nODD_7RWtw%pw+wO{x8Y.H Z=.HR8_t$E$8<cSHU[Ev+c/PLNe,c' );

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
