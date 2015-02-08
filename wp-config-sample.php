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
define('DB_NAME', '1782485_wp');

/** MySQL database username */
define('DB_USER', '1782485_wp');

/** MySQL database password */
define('DB_PASSWORD', 'D0feram!ng0');

/** MySQL hostname */
define('DB_HOST', 'fdb13.awardspace.net');

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
define('AUTH_KEY',         's$X4+T;t.T*(urNf&,#w:2+g%76(xn2&9k<Tm3+,:oodZ_:%Z Zw.([fye[beEo0');
define('SECURE_AUTH_KEY',  'y&~3|rP9<0,juwC_%U|MaJc~(L&~#vKj?qX7r?t?@TzXl6j5aygbQ/EyMzb&^->m');
define('LOGGED_IN_KEY',    '$K`4ox-:zU+b>yfgtD7`$_>A+kJ*tcF4jrS?s&k##J;(?33NUu9o:#c,qE7LKJW|');
define('NONCE_KEY',        'S+ln7 E+zi1ya.GPNZ.*@5nPAT;z)w9NuGK51nReBqOI5;y#0zVYjn0yUx2A]{@K');
define('AUTH_SALT',        '5qKe(e;C{gg1*1Gq,v03<{HuBmO6GCN8~R30z3#JfKSo0jRLlsw8JEr(0h2oz1&}');
define('SECURE_AUTH_SALT', 'O/]Zmt_U6G4C*Ir4=u=q]pAF/{fLn!!)Q-z@*HI!}F7![4lhy0Op`b>(s9Zys34{');
define('LOGGED_IN_SALT',   ']L^wOBs:x+Z_Vw&u[Z#v):v)}Wd1L.hT[nHAjB1I!N?rt_i|NgK}t.4#nr8+e=wu');
define('NONCE_SALT',       'mQ^UhZB#>epb>0 XcqZ;U>ax~@,k=sxXeBmVhWIJo(|scu.Wg~F<zDWd#sb9+dJ)');

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
