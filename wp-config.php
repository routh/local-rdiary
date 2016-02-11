<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u407808_circlio');

/** MySQL database username */
define('DB_USER', 'u407808');

/** MySQL database password */
define('DB_PASSWORD', 'rEnonTE3EsiN_');

/** MySQL hostname */
define('DB_HOST', 'u407808.mysql.masterhost.ru');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_HOME','http://www.rdiary.ru');
define('WP_SITEURL','http://www.rdiary.ru');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';Ss7fLV 3&nsxz)#{X8v%h+wZ#q<SE?iRg=5bf+G.d|5Pm/|!^/xQ$xErNK1EoN@');
define('SECURE_AUTH_KEY',  ' 4C:_3T_h(X$n`2B8eg2L5Eaj;5D7`T??ge.2U-DJz:aPM}*,2Rl$7P<IOk6`BR6');
define('LOGGED_IN_KEY',    '7?9:?Qb]:}k*HMqi}c%pU9Hc0u{i{@kGX:NeB=mb$sFyvSL6$ #bk[mT<-|/nd-Y');
define('NONCE_KEY',        'Bb{U)xpSCi&>}*,.9fhp:>y^CZ*Y3h}9+zbwD{:Iwu;K}-_,&9Tk|?};Mhs]`W6[');
define('AUTH_SALT',        '($8]w 5C ^0@4e$R<x#LJQcK}-GLBt++VvoF%!#zAMV|l)(PMV:bYGE`<*OtTu:Y');
define('SECURE_AUTH_SALT', 'PC{/-Eh4>jDDK)s2B7#&FTcIi,Q7X!;$95|Cnk*_QKdNlWb]!s:98b8FA){GBPsP');
define('LOGGED_IN_SALT',   'FKT-tP+]CKhmrML*/D<aYS6,kT*]z7Xm.&oV[X0+zgiRX ?;S,gl?|1KDE%Xr,?8');
define('NONCE_SALT',       'QY+^%U)Xla]@Al&T]jAE]H!3w1Wsn-eEC&oCWBo!nJ;/t~8vBs)~Ea}(tV!Fdu`7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
