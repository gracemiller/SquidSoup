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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '0U0cwNWb5e');

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
define('AUTH_KEY',         'K@nNOr0FBQnLXT>qW^YB<)J>:`Q(pk{J#S9}.3}2gc,*hY_Q(5c9qWp}#wQRW.mT');
define('SECURE_AUTH_KEY',  '(7Ky~=C7!WvEt7n6`.93P0m|s-(MZcIL }[4n{}Lafa8RtcY}cn/E9cy/bj>K]+G');
define('LOGGED_IN_KEY',    'xyUM^:i/,dO&~ROm+ .sCB[;ih6<CpFDOCcRAhib7hzVO`>Z_3H)?9+!`$.q*Lv?');
define('NONCE_KEY',        'hH;!;P*DgL5(Ir=~%g?,j*&f< Wg%vr4rCkwP9$UtM;pNSTt3)sXn3:C.4l Q?wV');
define('AUTH_SALT',        'TV1)S)JqBQ#gu-RJ,sEEfz 8[$=QKMil1~&-mQ,s./Jkrf1o@2_yldge?a]=c8E.');
define('SECURE_AUTH_SALT', 'U~T:K??`u@Vt-3l?AP65!0@so$SXAc%y`]74OK!8d5eH%E~Sq.CQX9IT;E<m#{&n');
define('LOGGED_IN_SALT',   '2BUa~=Ueep8%E.X^JBMo}6zZlN4H;#1x2of7vXLp*fMXl?9(&s?zQX)I@6pAkJQp');
define('NONCE_SALT',       'j)&}0;TP.bY(?|{L)DbCD`;,g/A^W=K09a39M;03-=S8<vb:bs;1y-D)8;gAQUg ');

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
