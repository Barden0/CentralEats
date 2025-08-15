<?php
define( 'WP_CACHE', true );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u152683956_cIxQZ' );

/** Database username */
define( 'DB_USER', 'u152683956_iiY9G' );

/** Database password */
define( 'DB_PASSWORD', '3vWTdnShsK' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'l;]k}K4VMnbNea$Yk[bl8~,yr~GQmG7B<%Xbpq9m`[1r7fow1dnN{QI<a/g>I|-L' );
define( 'SECURE_AUTH_KEY',   'e] 5}E_O:V:=Fb 3x?G@`[<j0xys#RB3!8i){l},yu8])%fU@><7`HaMlYWfW`Z!' );
define( 'LOGGED_IN_KEY',     'i5Z;VW];w)>~]/qo^l<J_`#oJ.IZDQz/4`QLn#8JG?37M7gHpWvy6;|:l}l|)BW4' );
define( 'NONCE_KEY',         'jjA*kV*h9dJJDwg38x~eFqS>+7j3BQAUgH1lvTIM+?w>pBSW,7rDAl&Cni FPG>v' );
define( 'AUTH_SALT',         '>Il%QexauHUsClk:)=9lJz2Dg):Y~vZcuo.kN .kO^N7Bbin3eH-i%=7D`Mr7sI1' );
define( 'SECURE_AUTH_SALT',  'dj)Qbz>;&<q)c_(;UbzY!:}R#W_f,+SB,zZg@7&JUmDw<EqB>$2q!uE./vG/4z/Y' );
define( 'LOGGED_IN_SALT',    'b%=;~RGrcsPEfdIWwy<$Kz9DXESL#P2#|-Ax~E@;1:K9xxP@C@,f6fGbG.E.}x9W' );
define( 'NONCE_SALT',        'o$?l<d%gmgmKUykti]A%2a wV730p%Lo])sTf4^0Zh;AA!g0-x%RMF/^5~D6+0e?' );
define( 'WP_CACHE_KEY_SALT', 'm~K)2KW 2J*uV)?MRlLJeN,}$.:hu&4=E0n5rCgH`eyQP&~&#Z$8d4d^!v4vX)v1' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '325949e63a4776f4e636077fe48a7764' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
