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
define('DB_NAME', 'wp_test_2017');

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
define('AUTH_KEY',         'I!OxaU6.K:#ycCbnmx(gwQ)5+~Y6`1Ry/DFJ56J+Ro^L$*fC%>.o9=}FsoacF,kj');
define('SECURE_AUTH_KEY',  'Ca4;a; )lmM|1| &)*HJ!YyFuhcQcCa1,lqC~;=YR%^^Zyv7jZd?O/kK*~B.%$%1');
define('LOGGED_IN_KEY',    'nt[KF`UOHF{a3D54Nb){;K ~Y+<wGfIJB!:69wSvg`daH7yUKzCdwZ^uSY+H,si.');
define('NONCE_KEY',        'vOG;S0UA=_OKa{,T`Y>o4UE?TV dZxI9-aOVuOTyZsxVzc&RMnxF0PaXRVxG4sP{');
define('AUTH_SALT',        'rS5vxs:0/7zJ%J?:x<LWjV.Yn+^NjJUEB:%|^=arVUWV9)Qw6T+E$wwH7JNR8RY7');
define('SECURE_AUTH_SALT', 'Bnr;Hltwf3sv;a#8CFZ~?N=77~FOJ7%^{.p?VNPys7gJ;bt+<;`4:WDC]U_<=yP[');
define('LOGGED_IN_SALT',   'HBwI23Vk{<t$jsxTsMGcPDe,57$9rBc|BXTluJiC %dtHl6#xOEG<6dlx_8Y/S1J');
define('NONCE_SALT',       'FOm].Rt5b9R7uL-}UfGBJfMd7#)5EAibx)X9hz i;BJAUpl,4{ YA8` MdS>L`#-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '_wp';

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
