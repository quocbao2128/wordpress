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
define( 'DB_NAME', 'wordpress-681' );

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
define( 'AUTH_KEY',         'cjW/va!nh2LdXEE~Znr|`%UD$[*lY9?xDK5}V/p%X1x,BAB29xzq3eK&HQXRU=?<' );
define( 'SECURE_AUTH_KEY',  'vK/3+Fn*Mou;-kkhD0F|5=|<%]y4};o^J_7z=ibg>Z7HWd6e!T?*0h!Q3+PD !`F' );
define( 'LOGGED_IN_KEY',    '.cXtx=9_P;sr~@B66w4ev};k8+$,Mo9ED0)%{*Orp&8Z{.k47/iG9sX7=5+UO[3c' );
define( 'NONCE_KEY',        'S[ob16l{8=hPnUUmO;iGO~&9iii?0PGsEr]x|`ZDsQRgqyXBeqv.5GSqFq:6%TqQ' );
define( 'AUTH_SALT',        'jFd?QS}sh3Wb.d%xo^ :i^`]#M~w+Ob M>oAZU}k-VcsLykx!UQzBG;lk9g6))4e' );
define( 'SECURE_AUTH_SALT', '&-d{&z|ie53~wDG]T(QvF0fOS/e~xc/9F^La-h{1{6wiJzB>KZGPSRi{/(>v2lPk' );
define( 'LOGGED_IN_SALT',   '+//lbHYD`17@a@FRR+GR-%{>R2S->MNVvQq:X7/~tZ,zLZ;1>`L4F0_0JNlg[E2U' );
define( 'NONCE_SALT',       '+L8ybiDlSi617w@>@)WeO{O`78LF.I#WEf@(aY(osP&x;6 pqtv?dO S?Jj~Z|Rj' );

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
