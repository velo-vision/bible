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
define('DB_NAME', 'twb2');

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
define('AUTH_KEY',         'KNEPFEN*Ek*|]8nlouQ3A{n|.?|*SJ66:mmcyhrU<n*bKGkxq8s9L&C~C{<osjR}');
define('SECURE_AUTH_KEY',  'qwqt=_c&4>,_GCIo3,.UyKwv9M.pnZOyZP1r[zA{uNBt[,I]B3!  ~vmTatisXY/');
define('LOGGED_IN_KEY',    '_sOi<28lAIrid4; kGyTgIFLHfc;9Bpyas%DL;wj#>:8co8z.Gp+P(omxeEp[vet');
define('NONCE_KEY',        'V*X;H&u/3f.df59fJi4#B*]=?[5vA:Se)a/$II5K]B^WDXbpL4_)E;393?l2d[br');
define('AUTH_SALT',        'fWGj:mbf#)`f;s1iD>$e4vKQxL/@}66p-udd},oN,J_Sw@[V-#Zp+.C8j-5aT!l[');
define('SECURE_AUTH_SALT', 'S~ !(08aw}Rs=?Zq>-p|&f=#ZD^2UZ(&!{h;*z#m&)7x!Yy[m{D<Pvyx;kk42-MV');
define('LOGGED_IN_SALT',   'RQZd[_]u@+*OM[d({b^%1=J%u[Ii_[s#G1d5$XtL&|5C[<9[aa;k,8 qG_+{ORT*');
define('NONCE_SALT',       'h$U+tT=$Sbq?rUc+,4:h<}K>%msjuU#C%*{Fb:K?1+MGZePXuIcRu|(S<Vr&#.JU');

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
