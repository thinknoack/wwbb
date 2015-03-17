<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vagrant');

/** MySQL database username */
define('DB_USER', 'vagrant');

/** MySQL database password */
define('DB_PASSWORD', 'vagrant');

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
define('AUTH_KEY',         'QMhltB]E99;bBs&KRq W&kx-`u)L_=Ln;r9R.p$jf:ld !}87.Bp.M&JZ[-gc4uF');
define('SECURE_AUTH_KEY',  'ek</.g+!d](vD%gQ-2{a]+di+=BI>.O{=eY w71i1Gm-_[Oj(x~K$B|&iqtn<iY8');
define('LOGGED_IN_KEY',    '#@-a/bu;7XBn!5||+u1,5UL5:um3[8-+sU%otpGc>3K%?4,;u1,kno}HA#or-xRN');
define('NONCE_KEY',        'YLOTbP{Vp:JI20^-Wnl.v<QE^Y@iSE-WDht=-V G4TLqrrDIIHLgn-VN{V>sdL7c');
define('AUTH_SALT',        'RD@[lu>:`W>D16,CVczi|jkUK=3|Zq[VzWn7-j=3ipyf1?%fNGk+@)r|97rFK;RP');
define('SECURE_AUTH_SALT', '$tb3:n9%v%m+SPo_vd^fGL!,R$%on36L-4%:s`<OVl{HqU7;#TP1(|%)F,&&R] 1');
define('LOGGED_IN_SALT',   '/P$|Yk^fHzv:1J~TEyf3+Rb|<.YUwC.+UP^p+<1u7=4ahB=p&+YSonN2i(/c`zJ[');
define('NONCE_SALT',       '<ntN%4}6E=emoMZx{Gu|I@0:oIF47j=/=%8O?}R{/7)Esantz>Wo66=8i&~`y,^K');

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
