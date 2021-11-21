<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', 'alvoradadapaz03' );

/** MySQL database username */
define( 'DB_USER', 'alvoradadapaz03' );

/** MySQL database password */
define( 'DB_PASSWORD', 'c6b7h6y4' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql.alvoradadapaz.org.br' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'IepX(%AqS<Q6f4w!luyF<=HR[N=;Xc+E^$:o2C[.p)@a:l5YCfef0T}w_jrO|)vG' );
define( 'SECURE_AUTH_KEY',   '#$.gLo{G~lYL3XANfWL[T))!<f5vNxp<aD[Ut*)8::^=(@h fy01~q.Rhl~1u-Vd' );
define( 'LOGGED_IN_KEY',     'pcop3A(2G&UyhhY6S,gOv)9IF@%4u4<BD.rq&O;SvJI=1.@<%Nllp+B>ih.mysYG' );
define( 'NONCE_KEY',         'AJaosFcJm8Kb&TNvqId4&L;lLlJi^EE::q!HvnLM`Q/]5X_IW_3@mX/kK+;HY4y0' );
define( 'AUTH_SALT',         'YxgQx&jA5&~aT_pF@WYt4XJ7&$C4w.c;PQ`i[ C-]kJPj1+3/cN&`LP(,gZ<CC7!' );
define( 'SECURE_AUTH_SALT',  'b-DH/8q^]Y7R&zVma6@$a<.1du|7^YeOB6-<Vzpb`Qzg}c;z}b=Ee02jG1,|JOi2' );
define( 'LOGGED_IN_SALT',    'Ut*,5v}<;i,U1>AjvMAgz;O+a/sZRBw@C~$AjCJj.>MqA}lTmv@7@kjk#1^BSg$T' );
define( 'NONCE_SALT',        'EW@ua^A@bX!& %7f Y9oDBX9S?}Kh7_y/zd@GrN2[1P~ep]|pb;E398^I=mmgytf' );
define( 'WP_CACHE_KEY_SALT', 'rp55fed%Xr[uytTgzK[%FcPv,b13OmjGGB1jpgvu&?1cxNXNuZ!8bBNkSfwj*^-T' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
