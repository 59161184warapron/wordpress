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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'mydb' );

/** MySQL database password */
define( 'DB_PASSWORD', '123@456@789' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
  * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         't`+OAG#f,a[Uj-r,86V3j,89o*FJ<_;g;J4c_:pwbzo;2u|U8]QGW[[_VDU#9w6P' );
define( 'SECURE_AUTH_KEY',  '!lN_R!M499IPS>?Sa$ickeNp,1$WK5@]Q!|<fkU+R?HFU:vUvJ{|uttDuDs[mhpX' );
define( 'LOGGED_IN_KEY',    '`u*QYcdLE1~`q7Q2tJj4iB54=b*/l?/+@1MVS7WGCD4L0h)tg78_<6`UF`2jOX5}' );
define( 'NONCE_KEY',        'x9<ZO:Zi1rn<7=bLjxdAepr0E[)]%uY|h{sS~/(DYS8YssOF`hbzOqT|nAPBh$he' );
define( 'AUTH_SALT',        'm;i*a]VF27OF=L(c-r`, ;1z$j0.K6C ?;oO;fCY{F6mIA1?Wf/-%-c^#f+ v;Id' );
define( 'SECURE_AUTH_SALT', ' $+-;3UL^+~1}2b]Y@$c`E(xb%P(q*0b%#nTAa.l%,/!QNM:+@SN>VRl Wao 005' );
define( 'LOGGED_IN_SALT',   '_k.ib3YE3kT$i(f)A^XxI]{Y)i0u&;ad:XTI%i,w9f)0Y!8b15(qx=p #$Mt|tpk' );
define( 'NONCE_SALT',       'lYbQ}m8A K@6L=<}ypf@tnLr@&_5NnNsM8.c-2x986v1kT<o8i$XH*25-^bd;HYr' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
