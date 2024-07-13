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
define( 'AUTH_KEY',          '2LL/6]N]G,y/&d*u:nXtOwxM=x=ay-09,SA&Uk+^]gVR=[Hm8AO]q7XwkXBIQ=}/' );
define( 'SECURE_AUTH_KEY',   'I-|%bHs:1/~GF.34~=_apL>kw/`efZZ%3q!cl=)EKL?qap@+T|K&XJ9+[WSaJ1Mv' );
define( 'LOGGED_IN_KEY',     'e[kfubR!Uy=)<pxS6_p34&[1K_qa^lq6B=3|>a@T$ZQmka;mMr9us:s248r52T:l' );
define( 'NONCE_KEY',         'Des>=k)QcFms+mf46L@6x)r1U*9wQnan1aDo%v2cFgcI=aL8g[51G=.(1eInfP9u' );
define( 'AUTH_SALT',         '9)N?al6_6RN>D=hYy6D@^hV1Ve?i,. i8t3&G!^X3(mjaI,%cz6sJ|9X0V2qmV5[' );
define( 'SECURE_AUTH_SALT',  '34&-ga)J(<%;92wvgq2;kjE2T#yA:v~WN;GI.Ll)8)EM0- 7mchZiX{:M4=PA-#_' );
define( 'LOGGED_IN_SALT',    ')*Nl|i9;ptQ#M33QfsL505!l=lp{`={!V::Zw;h9J i.m5hxO keKhk4]ISK&NS&' );
define( 'NONCE_SALT',        '$p>DAqw!vEY%BF}J=/Y~cb=8`C$~9MQBa=#1XRJ.nveg#wz8b]MWG34L{1,0cwRK' );
define( 'WP_CACHE_KEY_SALT', 'J8_ORp;,8Ei&4Y^1}}nG8O33I_O[!6)iC<:*Glrdv(u[0wKcR6Bc$,kUB,0>]IGc' );


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
