<?php
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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\Users\sarve\Local Sites\sarveshkesharwani1\app\public\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'pOUYHe7w11@1_{A_9T0IQ -idW) =o,v +a^Y}2HD&]oUABU`5<4R<&nwUX_<bHK' );
define( 'SECURE_AUTH_KEY',   'uQRbzeEw-Dsoto_#f@S #yet$%YTF03*g[$a/lN9HW+Q5f/M=tr kp9Qc10~^9Y)' );
define( 'LOGGED_IN_KEY',     'F-]M_*64zbI!+dYPM @IQhEI!*:&]MP%YPl.`]/!3M>$ksDe9&,/Eu[Pgi(KO>:h' );
define( 'NONCE_KEY',         ',OD|<@&vD[Wnn9[_O,Xr;`3w7#I{N-oJeiW1#deGmxxOhq/~DK9XxYOv[}i@!$e!' );
define( 'AUTH_SALT',         'yC*<l#R1PfVTgbByC1ajSRjk{K+w_[+bthS:c,nAivQ:e$*QJbQ{I*z~,]8yGiYn' );
define( 'SECURE_AUTH_SALT',  '`28Z:.{F%PwYzJH$dH^g%?U5U:b<:p?W^ex|&{2kWlyb$IZ(sm|M@GT@ORtk&ur#' );
define( 'LOGGED_IN_SALT',    'cmy`wfsw/TZ.X2#U2p}-f=-TLV[Y!]u+iPUh+6wfN<&eR68Xfx2b>DK;;W{cC{/m' );
define( 'NONCE_SALT',        '@TE3Q&b$J;@d-DO<-h0tD)OVS< Ed|<B@QU*ixso~bE?^BM>4WFFy+TuInQdkUwr' );
define( 'WP_CACHE_KEY_SALT', '_}HBWaqQ) p8!Uc9UA;pYYy&ZyO@.{jSmT-G{-%4Jp1-UG)}(4/O}R%EmMK3Y$8o' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
