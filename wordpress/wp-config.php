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
define('DB_NAME', 'taobao');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         't2p;szZd3~}.TqGJ8]%w[%({8/|P7(oo5mN3~-8S|~8@m~0q4Fq`VR+z{Ga|k&d`');
define('SECURE_AUTH_KEY',  'pE,_m}qLw|Hp<N<:+Q~B__;CDL-oR~m<93VdAv,$mr39`TC^U24/1[SN|3R%caMW');
define('LOGGED_IN_KEY',    '&mg:qT`}]cp B#C;&kI PQ{m=|f!hcK%`-X] PfqX[-r4UHwGU+sIs&=%wBkcH;#');
define('NONCE_KEY',        '!?HvduL%W?,)a8L)dXiq_1o~vMq%P@GzT`-;~^_Ip)3eg`-&|A5Elp})$0MIRS7{');
define('AUTH_SALT',        '+.R#6O^V-Zzs~kBY/m%cPP7;-wEy$^MA2b6/kX3%G>fTA_;%M0pn]:hGLt<K&TKZ');
define('SECURE_AUTH_SALT', 'IiBh6QTbR-,0Y|uYjkWhICKc/-|l(q=,Aozy;k 5JRL;A5%+|eVs<6Z:31}qgDpN');
define('LOGGED_IN_SALT',   'MDqb6nB:k+4+|(KvuqR8PxpO5yB7<V35UCmX VAc)=z*EW<m_ygJYybSo[rd~83]');
define('NONCE_SALT',       '(+k8)zo5i#7}k_8jHnj$`A&|#mSebLVy gykQli^$s%owSdPMR($jduA @v|4M:O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 't_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
