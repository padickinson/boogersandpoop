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
define('DB_USER', 'wordpressuser'); 
/** MySQL database password */ 
define('DB_PASSWORD', 'dinuGcGjsKI96ZxM');  

/** Set the file system write method */
define('FS_METHOD', 'direct');

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

define('AUTH_KEY',         'FW}YB*W&OQm2P8BX&f-wY8325Y+U?rX&`RS||[o%*aE36:Mf7SvLgj&HJDb5o#.q');
define('SECURE_AUTH_KEY',  'PWOig](sqq#N-_y,P@A-6vp)</w 7,%Kxp,*iB(Y)3+Fv!8lGROJy;MC|e|k{|^+');
define('LOGGED_IN_KEY',    'CiU2h6g/b|cU>O+o0OTNf$@)Asvm9dBJqvcr?Xx3(eXuUnI-?iBS &;7pU;Zf X|');
define('NONCE_KEY',        '4De4/+U)9M{oes*mb^x+&-:l`//fvZ25!]o&|yC#rVc -Cq_GT=/.D#+)&aAcSyO');
define('AUTH_SALT',        'R$=S-B|LCi:t+|<uFsj|,O!O+j%7j/(-QCnRy?,s}bMm:6)i-Jbsz_JCV<2M=$]X');
define('SECURE_AUTH_SALT', 'rPgm--[a5#=tT$q=|&jBmhnDn#!.gj-RR;8qn_cL##zpC.f.7+O/D Q&TMWL.u)#');
define('LOGGED_IN_SALT',   'Ofx=$[K-ZHZ+<X&VC7ZE|p4GfxN3F)xD#9ozBF,^1R5ghdp-[lXxH3,UJrBf:X!]');
define('NONCE_SALT',       'oU_;FL-CT%#|.]+N4-1Tv!F+]&asll&2*Z-,#X80nAy!RV=i{x2k3*m<KN|]he*R');
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
