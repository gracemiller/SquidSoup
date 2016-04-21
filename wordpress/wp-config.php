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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'P;|J$YPmuU$4flp6IY!F6[r+,.`2|-.E>{- }JbcxHW$[EK.zzT9q.}^3h#wo~!=');
define('SECURE_AUTH_KEY',  't 3u*r=.6@dux8%r1UUo?/eZd;haZ)}(]$ipUX8g:%3,,05*-a2oS5-Trk4>y*N,');
define('LOGGED_IN_KEY',    'EWz&6jZ6nCe{/eIRsCrqgkw:!F2}sOisW=7vs/{?dVr.kA-0^;YcO-`%zx1r3Y%;');
define('NONCE_KEY',        'I[H4oGQFmO9=Aik^!t!G~d<cAF6NA]G])Jqom6u)ttVYj1H_:b)])l<K{t{8A* ,');
define('AUTH_SALT',        'ay2_#WCf6v`f,j&od8i:Tdme)Lnunj809b}z7)tLxCj&%6stGeJMZGaA?vAWr88f');
define('SECURE_AUTH_SALT', '8:i`ZdV.OV?Q0`F$hAP^TD|RQ^SlH*eMs$[^&+T5yHGp`6&%;i]1_=B`rBES_Qxg');
define('LOGGED_IN_SALT',   'q%t,Ex NV>TPl/h#5T?kE?Gl2WJ/W/n1sPID:yT2@xEe1+fgbvD8[;`)7)k>>|P+');
define('NONCE_SALT',       'dBK8fP.z{DyQj5,X0B[jUWSyyc Y_{z zM`sTk3<mj{a%I=*+xZuWHbtbGKqcpxb');

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

