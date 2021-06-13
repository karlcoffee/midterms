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
define( 'DB_NAME', 'karlkafe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '!$2*%)o:hU^FtG,4MSKVp _Nb;NCVzU^;yhc>zn~CiM4g)<J[|xm-+4uv8/B+JtM' );
define( 'SECURE_AUTH_KEY',  '0zJY=Iqu6CXfpZ2TVBQgg~z<CG?X;~{A@|Tweg~!~[BqjwD]N|C^Z6;(LImY{+s0' );
define( 'LOGGED_IN_KEY',    'Z_kt6ZI{?Xr.xbQ9R5oY@hE???u_B!:U@b5On^(q79FG-K0{*cP 9t4%Hm]csMm0' );
define( 'NONCE_KEY',        'nEZrEr_umtfHNOU)}djGayWk@i;Yl/l4%o@+.{sUS>S.NyL%.bE7!k:&&?$mh;X2' );
define( 'AUTH_SALT',        ':s}bb/[gEoVDG&o!!t5RShJG.E/Wfz!^MDMl?me1!q5~I@|@#8Ch%nuvNr/iHw,n' );
define( 'SECURE_AUTH_SALT', '39DZ&qp DpoV{;tuM*WF#n%`<fFVp_$@uN?Sszew5o;5w-,z.]3e}5hq A$M.Q-h' );
define( 'LOGGED_IN_SALT',   ')+|yXA$by7DMRWL&mNl{gM1#fp%vP9E(3r&SNOO$gR~F.?b$US{l+<SAgG92-%=B' );
define( 'NONCE_SALT',       '<u#w>2/S!jVVMtF0M1u,o_hJX2L#>,*h38q>DB[5jaG*k~lVUex[iPl:q_4O]Y|f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lab_';

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
