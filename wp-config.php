<<<<<<< HEAD
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "sellingbusiness_db" );

/** MySQL database username */
define( 'DB_USER', "root" );

/** MySQL database password */
define( 'DB_PASSWORD', "" );

/** MySQL hostname */
define( 'DB_HOST', "localhost" );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wi3vwbbrecj2elegwojtfh5lp6znyl4v6aefuqpkdgbjudw4qppojvghqcspwmwh' );
define( 'SECURE_AUTH_KEY',  'qehgaginojhdfuqz5vf0nquryjjhvmeraw0vuajcf3vzmgiworn8gq3vsvlu47zb' );
define( 'LOGGED_IN_KEY',    'yvjhpkou76zkt8hgckbzusyfikr4qds9nwtxix1b0ncxd74phknnp9qayrop22kf' );
define( 'NONCE_KEY',        'pll8rq2tzspjmc2apro6ix8o4dcktjitybw5iootpeqtf5sqqnlxfah9jsti5fio' );
define( 'AUTH_SALT',        '0sejkwthbrgshuvonisn9ojwjpvywrxkbwhsq5zprzdxr1lpntsi9v5hfkey1njq' );
define( 'SECURE_AUTH_SALT', 'myavsplr9lixysil544bx7eklfiqmlcaadqdomqughywkumz00n5sd5cgotvn7dh' );
define( 'LOGGED_IN_SALT',   'tibkcfp1kb7ddnf04duep9szc2il2rl7yaleqlobnkuortdg4b6yreszdnwwkea2' );
define( 'NONCE_SALT',       'vozft98jcc64avnm8v5kkgoqinvrbuatvouajnovohrabw0xivvbrbqoo6fkemg5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprape_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';









=======
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sellingbzau_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RtKDl&{ccb3>/5.r1jVf2_vceGCTZBXVF5iOC0H9>}Ugry2t>V-|vxwy=fj6:f7x' );
define( 'SECURE_AUTH_KEY',  'Hc[m8U;rO#5pzj1/Q7%!9yZXo+NG43r_HA@Yu0rjM}cg(Kpr.(&V$k8&C%3uN_H,' );
define( 'LOGGED_IN_KEY',    'y,_WXH.>J6C=Xh}LN`6o9EAYUznl&&G-`aatNA qf4*;4Ugdi0xu-v5-L)FzT~Xf' );
define( 'NONCE_KEY',        '^&+g`RrWDiXX-(Gfn*,Tw$EaDts7r5g!t)!=%9= RcO[Mez:v7TP$62I<^T;9D23' );
define( 'AUTH_SALT',        'Bls??-j+l(lVT>NMQsL&KHg#bXKyyvLf8/>yDQ&[2_60?!S`=*#2{.ojH5p,@#0x' );
define( 'SECURE_AUTH_SALT', 'Z-toS}c7NEM.7xn&Zwe>f2%0HlroM^zl1F/RVpBrxE?#BIl:kjq{PhUpm$FB,G,H' );
define( 'LOGGED_IN_SALT',   'X4NcYb4`*VC`5 !UH7Ej|8z-U|(7n/eQnX^+#{%B%H]gXN(FNbeq6N>jpP2R[bJO' );
define( 'NONCE_SALT',       '_dsVm>dPe)8rces_7[`$vrUA]{qDB;?wFwp_P@mat`q$ZH%y,oEP){ZS{t5X}n![' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
>>>>>>> 12e5ad6e736125b89a23634631fb9afa8f10232c
