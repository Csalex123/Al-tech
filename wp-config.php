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
define('AUTH_KEY',         'NbY/+jX$cgSlR1@+ 1/:o8T#y-N*(Z]hz~#I(/l01g2.H9eIxq+$pqv0=.IZZvW<');
define('SECURE_AUTH_KEY',  'Ocf;#-G,>;!vCcSySdZqrev=aA@3;16VW&2$YsNhIP!gxJlOS[$a6*70#%,IRP,;');
define('LOGGED_IN_KEY',    '`S3.h(qGut9)F!h+!3Vy-65u)t _FcXCC@(F(MM=/HuIdquxg@E$BTH(GP;zL_/*');
define('NONCE_KEY',        'KN/>XK5mErRbIR]uQAV],YFy^!F<DfB!l:,e5dkSvm9MKX+r2KyW;`6,P7Ofs%`w');
define('AUTH_SALT',        'Jm)BkISK3Zw3 RF1&]ZdCRiJf9Mw(,Z]Nz~n`L/f7LxDVD0-l?-FQ|Q-@imr^;^f');
define('SECURE_AUTH_SALT', 'Hpx*Y^G<$F{oB$9uWjU?Jb~fDj6IIk-0GbP-zTbfn4~bnF`3)eN4,=lv)q-}vz L');
define('LOGGED_IN_SALT',   '`QF/Ome6z;B9A>koe]Yh_5Zi|>{iJ;wr}.-[eSDzXB|0KqZ64YCDdDbY-(xYEZ[8');
define('NONCE_SALT',       'OeJiA9pR&%H#qp/Qbd6ux$^WgQzPri3zpm`DN7ZF{+Irr&~DzK!QtCFnjmNFs1,v');

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
