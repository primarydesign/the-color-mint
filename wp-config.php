<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nt4isgZ_5ra|^Q0Z[&XK!2DQ3S&*v` *}[~*QJW7E3mK}|<2i5}HO9}WQ#,lGh#S');
define('SECURE_AUTH_KEY',  'Bqw_W^K4.|]H3-ly/pN%HtvGFHyH1_hVpsk*kmxV Ls1p1Ru={kz=x9--&0S>*hN');
define('LOGGED_IN_KEY',    '<^QRgLF|dP}2>V-ax%Y[$DQdt}kL5kC{^D0K9mcG%=7`^IjFuLioCV.{#~-at_(e');
define('NONCE_KEY',        'o`:0Jym *BR>mM2vn 4/U-6wg.VBQQ-Xc$V($e^P?+)UN-=VQf.ny5L9V6.fvk34');
define('AUTH_SALT',        'D1opci1S>)8E.: TPC31vyg>ntpniF<iA-2Wf@G}1Y|lb-N^ <yjD6{QO=<|.$N%');
define('SECURE_AUTH_SALT', '8K-d0>HHu;ZNyqH_c#:<OTQ]WaOZ}`-/wt>@+N!I#1cNM:|Oq4A6K##KzxDn-K 1');
define('LOGGED_IN_SALT',   'VjT+Nbh~Q@D?2(};B<JjZ.9 [5$5K2sL&dHKP9Mhp*C(Ij7/E$>+q~/d!n<66l>x');
define('NONCE_SALT',       '}a5;G|<Ln-8(JiVP;ECU_wC2uS8N&Fxa]oe*}eVxd]+LNZ,Gz-|`uSw*#+R{Ty`v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
