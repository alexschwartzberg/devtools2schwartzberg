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
define('DB_NAME', 'devtool2schwartzberg');

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
define('AUTH_KEY',         'C2tjUWiSP$6c$4Wv.4JJ(PlU8g=v~VtoLTaM-AYc84^qRP]dyfb%<q=;rZ8@M ji');
define('SECURE_AUTH_KEY',  ']u>k^]P0lY1W7Xvz,?PYyz<&q]TuVh^A0gD$H)`@?0xC(kx7[skjaCzAz.flz%EJ');
define('LOGGED_IN_KEY',    'qO*PsuVG1mYh>DQ[Fi`cX4y?Hu-b??dI9&O7g# )7P+w)xufII6!vrn<KSj-t65p');
define('NONCE_KEY',        'm8eIAJVPN3KTE u^o{P~Ct<z0dF`.bjlx5G92%nlt#,wy#({q<tQ`}X,mS?Ztzvt');
define('AUTH_SALT',        'Bj^?(+q%W~ueorCgiiX|2L,#t~18);p`}kB^S`]<JV;=Yi>l vYQP:.w&fGi;,s*');
define('SECURE_AUTH_SALT', 'Uzz{*29$L)Q@y^B[KJ> 5SjZ^.z/ SzEh5*8G>[ `Yn2i[NY[>{nL>~Em)qJ(@t4');
define('LOGGED_IN_SALT',   '5`jnqtf.$iTSk m-h1 QR83&!M{bFctuPVa4f&Hygmnu;8+ry89S1r)k[H1Vp]ax');
define('NONCE_SALT',       '*<43Ga}?|p)HVT^rqI.~+ jwQ[<b.}JJ*bYf YlKUZ{>w}1~r}>Y#{!6|~aFY[%o');

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
