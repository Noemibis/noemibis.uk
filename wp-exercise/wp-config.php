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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'noemibis_wp-test');

/** MySQL database username */
define('DB_USER', 'noemibis_test_us');

/** MySQL database password */
define('DB_PASSWORD', '173jlyYXZt');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ENo.P/i82({|cIkjaB&jM6icH vs[b)A<05,Q~R/*Xt3tU-jC:AQfa?pSq0<-iF>');
define('SECURE_AUTH_KEY',  'CE$L/_+>4~rBn(IfJ?Ns7Jr7R:VQBqw<Mo)e,OM9w}-(<)T(HyXXf>Zh,Q`+.By|');
define('LOGGED_IN_KEY',    '4b)oc%|TOiux0(SoqxE/<__Eh|rJeX93=E3eP|^9)..&nTVMOc]zC>tGsf_MpLTz');
define('NONCE_KEY',        '9-5[A, +o%$*,pkra$c<HE GJZyCBKf?y<*6Wj_LvAE$  ofey211g#9v?2il1 >');
define('AUTH_SALT',        'oW%Bf;?@Mjmc5!UV;^PQu6fU8%k@:Upnk#-~a<.!0Btf+o{1`Bg@ #d@JCo_f)pW');
define('SECURE_AUTH_SALT', 'zD~2MO;YoY<AgO|munBcOeX|[c2-M,7e#{rt0!hL8^3|d.k{=d-B4egtdb4c{w+U');
define('LOGGED_IN_SALT',   'cvibn/|fCW[:3Ft1ZD`7L+Y922_+R[:n*7Rx(vawVu4yCF5gtu+N2Cq=)e|Uv21d');
define('NONCE_SALT',       '/7`);`C~^>0ECYY{?mc*;QT[QNP$zc{,w<Lui($1X^ZSL@TO[~Na|{`E9%><n-qP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
