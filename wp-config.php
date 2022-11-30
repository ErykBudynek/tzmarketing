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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'img_db' );

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
define( 'AUTH_KEY',         '9zJ]!7hB_|WzXMQ;Fa+`*0p8d|@8yHhGn-vknI;[;:LCQ4e9[h/V+g5cvU=TxoSJ' );
define( 'SECURE_AUTH_KEY',  '%Bb8C!R5Qb2IH$;(PFo`~zZoP.^Kz5NYySlbK5zl!_~#ICj[{iC/]Js0rI:PUba`' );
define( 'LOGGED_IN_KEY',    'm2<fq!zurD^Ers}gwJKeD6welQOy4ZFZSv^N&%QVvmq?z=#!J*Lcb(3n75Uh]b~Q' );
define( 'NONCE_KEY',        '*Qos9S3CJ9b,H9Q~wWp96~s4Pn/e.J3F/B}.kiQ] :^pX(BB]cS%GaG/S T4.aFC' );
define( 'AUTH_SALT',        '^uxR_#G /L@sW,kF,q|Ie!qyR.<7jk6?`qH ,!MZ@T>Qt7L-zSOJm&drI.Yv/76t' );
define( 'SECURE_AUTH_SALT', '^_3X]3di]JMe/H7bJ&J[D_J[Idj|DjJ)!]OX[JtymKk-609yK3z*`:/4AF{919uo' );
define( 'LOGGED_IN_SALT',   ')3:^b-3 !8%6^p1}6:uC-R^fpWk>mFpG8^!p-Nxdk<P:f#X9-@{ LO_3^HK%LL!^' );
define( 'NONCE_SALT',       'bAcS$}99Bd5Au)PLDsEqp`7G@ghCV#n9X V]:{r;AC}I?1<Fx;fC]jrR2g;cEgB-' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
