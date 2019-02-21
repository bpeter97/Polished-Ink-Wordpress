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
define('DB_NAME', 'tat');

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
define('AUTH_KEY',         'of?;TY_,GxKLIrbG`}5#sz{:(2>HHkxtY]dP@RZT.Ev-#C#$77|_n{Kgg-P,iE2I');
define('SECURE_AUTH_KEY',  'Q.>/}r/l[cZ;ktNJ/,P?u&[u{-igPkJI=W.r.Li`RcGrtosb#H;PfG6r).#x[]Vq');
define('LOGGED_IN_KEY',    ')jt*T+S7v,/qeYy**2`a+LS_]G^V8`7==!^}33q#uGbowO0iv-S_5!KmImFnMSS ');
define('NONCE_KEY',        'HNxVWgIMh%yF)NYaJ6+;s-_V4m9b`Jfj[_XvsET~DcGonOwI%b?{(}`eM}p[1zvx');
define('AUTH_SALT',        '$#kS[tVxEjSmqS=5JN|/BNZCcC|B,M/=cSGx@{8,@XWR?]u_S&rS3X]_P[VjYPRN');
define('SECURE_AUTH_SALT', ')AOKI%zeq!ssi?UJ#:x^4Ql$~TFE% Y]q[ib8$Qw&.HCBYLg[?xz1<g>J?7q%LUR');
define('LOGGED_IN_SALT',   'j1arOt$E@S-Xu^(u1AjJl[32O,,/sxq_? JlRWt4F&+0bY#9 G}-!Tm^?0,gKZ3$');
define('NONCE_SALT',       'k!A)d5sq^1HTj246Cn(9[wJ(yrE->Cf!.EJnJ|kq#5J.!V{>NO xeiTHmy+/j 03');

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
