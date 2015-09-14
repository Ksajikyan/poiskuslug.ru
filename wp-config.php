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
define('AUTH_KEY',         'hU?wbuVB}WHj?93%+z!-M2q.p2Y=F0_~mbL|:(Hl[{%$`hh3n#jB|@K|^|lR.<k&');
define('SECURE_AUTH_KEY',  '(~:+1Th7q>bnl>A2NP92~$a(otv?acU:/CIZ.b9(|Qk+)e HNjNWZzvf$N,xPg;P');
define('LOGGED_IN_KEY',    'y<w[5|*+)n +9?S=_=Te{P9C* .DAt1_^-&6 t<|jJ:ChkOy5|+hwrO>P~>yI6-M');
define('NONCE_KEY',        '#i-2&?kU+EA-kTSSz$b 0Jdqo-/|zdV<_-~`J%#ZG);v%7}v-~J.dd^w48tMKi0z');
define('AUTH_SALT',        ';NP. aa5G4(.k<hFFf)ob4wcYQRZ##DgpmFo)Ma5?yzP[`^lb:L#GoQ;Vyu$09uf');
define('SECURE_AUTH_SALT', 'NhaI}[eX^8*cH}$0RSLtXuEos-E~v&3I<d[+ZV0a|y5ekt_|&==}=T(+fa-gY!b3');
define('LOGGED_IN_SALT',   'vxd/xIC#4UZ;[B>B_Sxa!A,a<t)~wDbFoOCHO398[?[^N%$&PxKK})N<?ElL$?LB');
define('NONCE_SALT',       '`_pzUwyZLoq `S?^t4gIki7N,1 ^<IkHJdrS?TH@x_!c[e)H^?IMjPNdH<6|o=34');

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
