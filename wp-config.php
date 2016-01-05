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
define('DB_NAME', 'theorcheDB3wnzk');

/** MySQL database username */
define('DB_USER', 'theorcheDB3wnzk');

/** MySQL database password */
define('DB_PASSWORD', '1ccnCLTLTt');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'sNdVo4K~1#WthexH9SWKa[95ODw]~t#WLeeTm6PHLeS_5;]Dti*ui+LeTPmb{EH6T');
define('SECURE_AUTH_KEY',  '}NcYsC0J~1[VshdwG5OVKd:G41OCs|-p_SKdath1ODGZ[~11#9p_wp_xHaWLi2#9D');
define('LOGGED_IN_KEY',    '+ahWK5WH1<xmXuiTEmWH2P*p.uiTufQTE2.A+qjUFB}$r^uf$rbQB}^B}@r0fQn');
define('NONCE_KEY',        '!N7,r@0@kvckwdK0CR8K1-|G}z|s|:zgNZlOZG:GS5_:-5![wdo_oVdKWhO5_]D]5');
define('AUTH_SALT',        'cZJ0R7F}z,8,r@kw@kR8KZGR8|GN4!}z:z!oVgsZGO5OaD[5_CK1~lw[wdlSepWDL');
define('SECURE_AUTH_SALT', 'd9#w;9]xhSlSdK:9L2*]x]2*mSe~lSeKelS9#1E]x.q*{yeLXxeLT9TeL2A#3*{yf');
define('LOGGED_IN_SALT',   'a5SeO1~]6.p+ix.qWDPlSeL29T9#2*<2*mTeyfmTAamT6H;I;A.q+<ubnTnUfIAb');
define('NONCE_SALT',       '8oZG:GR4!:-#t~lSZtaGS5VhO5_:C[5_p+#tWiOiPaH]5WD]1~1D]x~lxeqXDXeL2');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
