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
define('DB_NAME', 'leadership_blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '90G1&){X;^) ?cYHX%^MZz]=`=T5mc*LH3.u@s^SH.?FMUs{6~9Y}nw%Rp`%gpu|');
define('SECURE_AUTH_KEY',  '=-#8Md4$55M[EdGaH:t&BU`35)UB}#N8}O^>5*UtfP5bRhO;a6%`GJCP92Ix4%E6');
define('LOGGED_IN_KEY',    ' >4 [5Z2lQAsACg0OF?hfkwVa[>F~pC)yh!*ON!Pb<RtSykO/`?r7.{df]_K8GLR');
define('NONCE_KEY',        '9JW[$*8=r)4D?T&Ga:?b>Ix~$CP&kRs5S` eh<TEwt/TS:G%0BNz<d@lVQ6Bs`cY');
define('AUTH_SALT',        'u=mLjl0RX*dqUC#an.pj{qSDh!3~d1QhbW|3ah`bww&V YA>Q(g|A:1&2g_xE)m%');
define('SECURE_AUTH_SALT', 'N0HK6e?QI,ALd? uHb0LMb&omJ&+f#.]hns0}Ik6bcRe;;oM9Yn+!/<SBN2b6Fu7');
define('LOGGED_IN_SALT',   '>IZvmGh/e~QNu8BS_hf wy)`MRq8d^)TD[.=6!j7k?FbX:~C+oOPeJ*BxE*%w,OI');
define('NONCE_SALT',       'c9~8(YWC++(h-?sksm*LWl.pX*rTE^/<^f5J)kb8v;3b#[1OylI^9e2hSVz$ai||');

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
