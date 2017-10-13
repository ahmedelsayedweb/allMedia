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
define('DB_NAME', 'allMedia');

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
define('AUTH_KEY',         'LAY5-XAWqP`8i&4/}s6(-s{EXuUkQw~VM8S{WGz@TNLwwb[/~AXv!6X+}5I=vLpG');
define('SECURE_AUTH_KEY',  '] H(^?ebjIr*9J|!Tt*vie$0*s1P`eOlX3ml>aJuQfi~4zBK_e*-ntTgGR&B]t_}');
define('LOGGED_IN_KEY',    'jbKDQT/~DzBX^t{Nu:^977F~)T~<gCT8N4h8U>N;9jpRG5#%/(!5tExsV5YyH]8[');
define('NONCE_KEY',        'J4Da+Sam ,i[q1/.>5%g$MFPkf6+W0-uE|/@C0x4^=bQZ``R?Aw/bb*pS<E>5J!}');
define('AUTH_SALT',        '?RV7wXF+Aq`+`  (z*PmdxD[@qe&zeYYZx]F8TTxiLh-fzeqbs&L9PLGHa:a}%r+');
define('SECURE_AUTH_SALT', 'VUD@Stq4E 1@#s$Cpj,l0rw)o4ci8[%id3QFHJh2S(]LZv k*P_TUJJL>.X7Ni%9');
define('LOGGED_IN_SALT',   'CFJW[MPb%h[N$a3dqG!RVYOVqD<HGg2/nHQsE)=jt_h ~T(Yy_yC3[b:f1Y_]|dO');
define('NONCE_SALT',       '>@kGC/ES9cX4|dMY3VE(5vq42zs}CU>Wm&A0%#L3vO89M_-[6-BEgsk@8;JaENp+');

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
