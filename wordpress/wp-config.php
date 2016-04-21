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
define('AUTH_KEY',         'dyE#D4c-kY=~jJqCCMHge`XIqQ{2d3>fg =#v{TJ^C_TSwBr#jYPa_O[SJJzS!$P');
define('SECURE_AUTH_KEY',  '-R#50e$o{Rii-.!P>HCmOhSBU<V.W-|b8z G$0o(sqb8Cz1+]qEm@N+([hJ[wQ]f');
define('LOGGED_IN_KEY',    'A[fx,f[%a2{C(7#lQ&b%q$%7P&k60[s?Ns;t #RDR{gPehvap|P<<Da$o)6s/c,B');
define('NONCE_KEY',        'aL^7b`S0qBZIIVWrA;ZkJ`=9)iCe7ulM8w)S?M%6MZb?yN sDa0z`gubxVT~94~|');
define('AUTH_SALT',        ' P0ryOD,:So.t9cSQ;y:TYR00dWvMZAk!|o)a+BNDQ.q$nF3AFD_~Y@#!y$)PEgg');
define('SECURE_AUTH_SALT', 'zhGzAcHG0]YFH.J3Sl5Ik%4Wvf<URv)O]N6-b>D:.fQ{~w&8.Pq<9kL>m<vd(Mt:');
define('LOGGED_IN_SALT',   '@j&#!#kfiY%fJ/RM@lbHPWLm(JOc df@ s+QuX.gS`;6ZEU+fua=t9fM)ll5|h7j');
define('NONCE_SALT',       'cZ9SRuQ7UZ/<xnxXntye)qoQ7yfq`idz888{z-Xi%X)nHcsw:pJd)7i3Ck.F4$0_');

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

