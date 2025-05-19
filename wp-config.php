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
define( 'DB_NAME', "tohavina_portfolio_db" );

/** Database username */
define( 'DB_USER', "tohavina_pfolio" );

/** Database password */
define( 'DB_PASSWORD', "owISoTv2v2Fefs@L" );

/** Database hostname */
define( 'DB_HOST', "mysql-tohavina.alwaysdata.net" );

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
define( 'AUTH_KEY',         'RVYtS<A/^C@KJf2`RN%[{fVTeIg/{PUGqmLIPf_l:GOVvBk[;Q KC8cgeP /BW]Z' );
define( 'SECURE_AUTH_KEY',  ',$7srcZ>P>)7+(K+/Sv*x=3l,W8^DcP8YAIp+T?/a`t?RDR^F{aJmNymKiIFqx*i' );
define( 'LOGGED_IN_KEY',    '4Gbm.#v9*4kYiGIo`yDJOj~_(xZq+AY=<^=AJvgZ}V4Gn.O&<m:hWQvG]R67dI@h' );
define( 'NONCE_KEY',        '-nVE8[2eK[9X,F*`J)}K8w7zo;c6J$]5-~+yc/hvhrH*W^s.5^UA-LP~BL>pE8l(' );
define( 'AUTH_SALT',        ';+q3[lX|x5AZzXpo[l=JGqDQ*M$I{I0GOOzxDOqe~{2o%{x_p;Jf4U&`]f<P!=J2' );
define( 'SECURE_AUTH_SALT', '(lR~V{=I1&9fo4o]Mv|eUV:G8<)gg|zAYs{1HoBe -?/a}zB5jH@9uM[i^@%IbWu' );
define( 'LOGGED_IN_SALT',   '}4uwCgk:yo7YDFJCP.=bgY75ky;VE{(%yce[EpUYwFE?WJ5I<y6jNMC2:inj)kfL' );
define( 'NONCE_SALT',       'fo; <YM|QTCF|H.TU6YI05!NrzBY%u].^ir(9%vZUSM ,/wg3GFg{!K?3wg;GXEX' );

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
