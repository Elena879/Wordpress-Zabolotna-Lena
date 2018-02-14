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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'HTPBv7S#nX 2K~MXaPjK}iB@AD0q!K&+rF~ez#(64NU9[f2bLfiYQg777G|q45d?');
define('SECURE_AUTH_KEY',  'oB$u(*S*SJR:mXz;Z.q,sa$]TrT~S?4I$aT :Jk#&9XE&vcKO9{&T14*cUa!M#LN');
define('LOGGED_IN_KEY',    'Y{P6Resq5=12gl!o0o, 3zmISq-Li>R4oGme}fYRqyS#PWxo=HOUef@j4uf>ci2`');
define('NONCE_KEY',        'Lxd4 Q8X5VOJs6e-:sj%5FsmXB.#3.b&Dvz@xC,}&^8Il&Z$MP}E3g,^~{z-qusq');
define('AUTH_SALT',        '9NCggydS,3ipM]/w=a,=3;6^zXY,C)ENC1)8 !]Z:>DRG} {ow`VM6dyeq)f=8LQ');
define('SECURE_AUTH_SALT', '-|#WmbzVCKs xwi3 PxZ d&Xm0org~C2*HU>,[a0L:zF.fh5]V8)xyW CUqm?dUV');
define('LOGGED_IN_SALT',   'Tk!0of]Uc!;%dIFQv1u+>Y^is%}g;O]ouc<?R&@:D^j>)d6p_gHM[wvAK;oCkka=');
define('NONCE_SALT',       'aC5>%w8$:71E8Qq_f YG+4dnRvH@MfKd]X?Q]n#NTA0DI55bO:SU#ir8j:%zHhun');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lz19_';

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
