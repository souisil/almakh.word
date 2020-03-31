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
define('DB_NAME', 'test');

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
define('AUTH_KEY',         '^|Z1o[ok,*mjLA}`mG(RSjDfcfMr<+.]cY@-a{e9|bca$q#:B1V&u: o`bu.2G~e');
define('SECURE_AUTH_KEY',  'l1%wI;&GU5ip~IN0Uwd$x_-t4w(5x-F+/goxk]Ig?eiCl3T6W$!TlMTPZGE%09U,');
define('LOGGED_IN_KEY',    'mOIvLU8k8pjQh_u~Lml $I>Rt8@cLL88l{x*iju`}Sw#i_Xf`MZq(F.}ccr~m)X,');
define('NONCE_KEY',        'J}SjNkm;sn7_>XKC83eK9#!hP^jhtU[rZ#=6o9MZ$lfP( t&t06Vb>6po1FqDT+d');
define('AUTH_SALT',        'ufQlxOLPF3*L/-DAish2Q`38z@HluK|kFLDEgLH:}2Z<${#1k[O^3+6hS8eELW=d');
define('SECURE_AUTH_SALT', 'wn7hY0u_MP_ v_VZs5=3B~K|iW!^]qJKtS&vW8(Lm39%hK(dFP(SgRwL(;(aT$XQ');
define('LOGGED_IN_SALT',   'FT+W8`Zxa/UES);h,xmn_,x}:B RizP<{*#m(/Pb3/pg ,.@%RlJ}qI%-+}l?2}]');
define('NONCE_SALT',       'wt;`w3&AGFsYb#/C8(9K@f;-dE<Br2]2tSrQ/3(9.i_0s5{LHLfZ?g|WvBTocLe*');

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
