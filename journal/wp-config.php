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
define('DB_NAME', 'noemibis_wp910');

/** MySQL database username */
define('DB_USER', 'noemibis_wp910');

/** MySQL database password */
define('DB_PASSWORD', '6)Zp731Sh-');

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
define('AUTH_KEY',         'fdpyzyrtqgtfdclnla2hcj9vene4zavckppk4byoyjxluek4pv2nizhu37axim7b');
define('SECURE_AUTH_KEY',  '6iwuwlj2ucusfitakjfppdrlk8xc0vsondebgcalsvklrhi1x3qd0x5mtinuyazp');
define('LOGGED_IN_KEY',    'akcm3i2gnqk0m3q29vdjisdmbpqizynswyhdtlpxwoso9ydka00wyokgolwcucqx');
define('NONCE_KEY',        '8hzai07itqgpre3llvyvl8ee2uflqsvb71swicgkhg4pztrtwux91wearrigw8vw');
define('AUTH_SALT',        'km9mknnklu68rfjzgs4sv2hmy17vrtf7kjudpphydllgmrv8fldssj8szdvg6lar');
define('SECURE_AUTH_SALT', 'xzd1eprsi3t9xim8qmsiwjmgv2ak6e0steairxrlvn74cciinaojzadn1ygspmdu');
define('LOGGED_IN_SALT',   'g9vs0ttryvcgjbgfrptts4mpsvnykaks975jk35rbkqkkprrnoeldrgcsibpqk27');
define('NONCE_SALT',       '4byt1xvw84or7vhhjkcvt4dn4qjxqexysymu7cpga6v669yxgbiduteubkb0gr9m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wphs_';

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
