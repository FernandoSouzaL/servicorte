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
define( 'DB_NAME', 'wp-servicorte' );

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
define( 'AUTH_KEY',         '~w+)Nps#wcmaG`OS(eqycGTNE%F! 5VXFtk8wWm(x0PNCCAWF;Wi^Pz-!^Sp)=br' );
define( 'SECURE_AUTH_KEY',  '9}A;nP^4u&|8GAk#Bu+m,k93S;Qb;@BD8WF1#U=X=^%5(MB`$LmV<{~zUmxw:H2I' );
define( 'LOGGED_IN_KEY',    '}l[G4x%K%rlG?&_#x*SY==le;g|7U<HnNPOHB$Q~.]c_b6G$qt9*y(jjV.;=[QYe' );
define( 'NONCE_KEY',        '%IuNrsfj.7iwoeft&Dljt.lv 8].{]oR[&eiTK*AV!+2k>)jx^q6>Sh{Q/;?0N!,' );
define( 'AUTH_SALT',        '7l!m4{^#<lWw[-aq=]<-S)G?:~ 6?9>55>Y<{ChWS/+4 {Y]C,(I`6q:bHdtzHF5' );
define( 'SECURE_AUTH_SALT', 'g K{YTQwefCBzZ/n#q3t@h}Y(UHU`ZH^S+}yp]TPeKV=GgMt: iEV&9mVLM<)]^v' );
define( 'LOGGED_IN_SALT',   '1n]qB%md_k?@XGAvR9O5r+ma>pLfqF=H6M{#@4;yTnlbb! L)yLny+m{UZ6q]r@y' );
define( 'NONCE_SALT',       'HN4c@;3oWMFG*{PL%=>L-~7a$Zjg><kb<]Ax^.[=)=8C?LYpqmJqJ~ J,uG-U5UN' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sc_';

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
