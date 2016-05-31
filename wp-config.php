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
define('DB_NAME', 'mak');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-tA|VzT69U+IZG_}S.aSA1RSwud6xRgJw^1m*?d{%eJ}T]O(f%1&AN G(kQH>_f=');
define('SECURE_AUTH_KEY',  'byz[${1 g$<D*,tE?}g`kFTcE+{lr=gGuB;4v5Ljnb**rM(+wEjJ]*l1+|5{*~ga');
define('LOGGED_IN_KEY',    '-rC;5>6fa,-2.aKS5R[F]e5dL u$KY+0^p|j7r-OTMKUh*pA&Sq007/Q_T]j8q#A');
define('NONCE_KEY',        '|p{ASeGB=*-a$Sq`1g_|]7LY|*WR~)|LJcOVZwJ@NzVkV3I(pB&2t+b|u2S@^^e)');
define('AUTH_SALT',        'G]Rs8Ba-!yk+!UV@<r^w)$WYNvAW3yuiFCJg&5f|n1_-3kY^X3=c.b.`lJI0!3U$');
define('SECURE_AUTH_SALT', 'b}T{Rn5QGop|jBP)KkPzK3E=+Qmt0Ko,m,aO8fj&iy&-Q:hH$SZZsgvC9.@ZTz8P');
define('LOGGED_IN_SALT',   'p#`+1s$3-?jtmS9Gc2I^/}Dt+0N$ucP/W@]OqXxmRXawnOK&-=3.Dh%OmvPO~OtG');
define('NONCE_SALT',       'MkJt/fO8kDx70p-<qT&hsIfH|$FLlJW,ZVMyjdt1`+GW92y$)!C<X|=2ky.g9*I}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mak66_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
