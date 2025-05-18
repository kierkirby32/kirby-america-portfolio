<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kirby-america-portfolio-db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '{qFx|wrK}j%ihE?`+1 </4pp(|=}C$kL1Gebo#Rg#3i8m()*C:[q^O>5kk`K7pv%' );
define( 'SECURE_AUTH_KEY',  ',`iO /!jQUW)g?[A!YN3%*T4QB3o^bXEq$gm9dM_Rs9bds{KQ9e~<!Ga{I/(VLlW' );
define( 'LOGGED_IN_KEY',    '|7Cw-Rc4:c_*CWg5|f+mQz0`Uu:X9`:,PdZ#~~:yYB-!-[4TSP:X=z-!gL=8/oCZ' );
define( 'NONCE_KEY',        'ZNsxT*xW /L:MQ@{W][Z !W/b2=-Y~%la}>h#s,+cB7jA I!(sW]00$Fb}b>{ExY' );
define( 'AUTH_SALT',        '0J!A<zFrY2REwD_o%_4D2(n`w2iiI^E~ie&2KI!+&$/mjEleoO/m4<a@SSOkm-0f' );
define( 'SECURE_AUTH_SALT', ' siNeA$ZU]?-&d)c.nY(RACP-i!P6p9;8NqgR5L.vB#$_*(E:&*@1s6}IVw:sGsA' );
define( 'LOGGED_IN_SALT',   '12+C]mL2S{rxb=t`K:=)ol7RpH_e7.h C{2hd|XkT0Sgrt=,S|~UVp[}<$z+vbZL' );
define( 'NONCE_SALT',       'mQOp/MZ//llfY]mBQnW!^X88kb4yY^.]COLRdaN_P3/FM~:855Km8 ~y#=23n#6N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
