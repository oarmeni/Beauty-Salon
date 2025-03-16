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
define( 'AUTH_KEY',          '>c)XAo $@Ba|tnd]ab`L]5QkkS^+Q={,=D7xfv=.m&}1){=:c#:KA9d1w)9,<,lo' );
define( 'SECURE_AUTH_KEY',   'vJh)MGZU=TH>lPT{)5CsuOY$SfxYrU2{iC%T<oS2.m=bSMA`B2C9-*EiC.04^`2=' );
define( 'LOGGED_IN_KEY',     '$GvCl:+:[yqcW&jMvadY3Suyp+u,+Q-]<l,/A_}1%(*{zWRfH(R^s!PW9I9+JKr ' );
define( 'NONCE_KEY',         '|?9.-<DtGkG@(fI%-M2R$]YD9Q.77=P}rZI!;d}Tb9JrKj*oTbGCI4>n9Z7!u78-' );
define( 'AUTH_SALT',         'm}3H*9Zi2C~Im38;&O}A:cQlo?Igw;XGl, Rph/: ]Fl?:$Q92s~r.}r0*hu}nP.' );
define( 'SECURE_AUTH_SALT',  '1{vyB8fE~/77|W!GOTF5bR1{_x7&MSQ|@%{oT_5$*V<FAS``{!UJ]A{CYO)y^sys' );
define( 'LOGGED_IN_SALT',    '7nGB+$5`XFPW@e`c<.))#3Z/Y3 SYiDeDdUg|=vf:qWT38U8v6h(L</|@HKyoaat' );
define( 'NONCE_SALT',        'MX&`?seum1LMoL2{y%m*wSm!mS/=k$C>X8D,4+gHf]JZI$,HI{V$o=[n0LSm6Y<v' );
define( 'WP_CACHE_KEY_SALT', '39=:otKpyB)836H&+81du)F#%j9/9qo1i@h(RG^AhL&ZW=q<=EP;9;79(NavPY.a' );


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
