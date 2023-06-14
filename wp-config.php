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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'estudio' );

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
define( 'AUTH_KEY',         'pIvtiFe$0Cj[jaV+vt~I3_B@p`NTwNX([FPv;K|V;m*4!;O;Z*cPq9i])wt6&AgG' );
define( 'SECURE_AUTH_KEY',  'sXyXoU RmRT57s?X/A*jHPj6Be789oog+-y)X`2xZ29iO<1ME?{m<jbEfh$wBH$ ' );
define( 'LOGGED_IN_KEY',    'Xi{/KId/#?SG9IU@+inIb&kHseEW>9foaYWyosa(y)N~DEeJkt)78Rq`Skftiya,' );
define( 'NONCE_KEY',        'a#DU(7&;,I3VxK8&KHGQJMHc kUHd@~9&FtCU8yL9}cEpqcJF%*./R]7SZ:gZ|W5' );
define( 'AUTH_SALT',        'vBs=m[DF$<82vfLlt.K90L6/HM,3t9Gp{pAHZ0g$V2U:3v%M+-d6`!u~}Pu<D93S' );
define( 'SECURE_AUTH_SALT', 'r3byY*^G;o3d9_Y,)O[,D5mjUMn_W=#2t]@-wyQxlK}E]$,}+D!m]/UAgjEC2xZ1' );
define( 'LOGGED_IN_SALT',   '@O#FBN@T+i!,RaWMD5.4H}mqk4+T6uLXn;WX.REZ;U/-XDb4(Q<cyr#%czDX^lp`' );
define( 'NONCE_SALT',       'cQ^9*iJ s)XJ$ u}$tUyT SG}*x{,q}+l/II>>J1whCuCVU{I7t!@)E=Jiwmr!`k' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
