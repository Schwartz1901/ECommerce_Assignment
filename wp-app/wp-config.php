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
define( 'DB_NAME', '1004381_511cc3c2c7da4349f7d3428961bce4bb' );

/** Database username */
define( 'DB_USER', 'easywp_1120606' );

/** Database password */
define( 'DB_PASSWORD', 'umsl3Dpgcl9lRPVPv+3/jJr2p5XxJm1Fd7+/8INhU1g=' );

/** Database hostname */
define( 'DB_HOST', 'mysql-cluster-2-db-mysql-master.database.svc.cluster.local' );

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
define( 'AUTH_KEY',          '|c**9kKbuN|!ZOl=5MgY5b?_0I*BY=;#|0t0e19[>YN23dMfQ`~pChsGcE@fEj?x' );
define( 'SECURE_AUTH_KEY',   '00KpNhjzO$W1sjJQk~ma~Lno *@L~a(l&7-u#n}KmBYb1+,2UabC-ARNt/(eK[o#' );
define( 'LOGGED_IN_KEY',     '|NgM%6|c7(7=SMA1iI;1oaj5hP@FgM/F $AI+$$1lM`|4kWZ>eO+X,cBEtbL5MFn' );
define( 'NONCE_KEY',         '8HtbtKMxVYgY37gdqhT2_-}XGF9(_<k7mtQ 6:;l,k?DGs|qUe!&kG:d&_@4tnNc' );
define( 'AUTH_SALT',         '4k&W9Q]t0F-8>j3&StGeedGFr0 >%?uY$=[Kz86U+WFi*>[P%_Tkh1=XM`_TD/S`' );
define( 'SECURE_AUTH_SALT',  '{&q{lkH@ju=Zi, MFr(y=</aiI:g_ m9g>G5ulh2H,V)LKi6i&irhV^`BwvbVHAs' );
define( 'LOGGED_IN_SALT',    '1TKZ2WfMFqf,_]5io;V,vC_v(/$[_N%.jt9*Q}yxC_cABnV7(Z%UZ4Av?djLIG}V' );
define( 'NONCE_SALT',        '3KEnvgZz]`TC3,)c|$VIuQ1K#7A/,isy)9TA@oEfN7y=M,^2=pzRqyBR/gcOyVE`' );
define( 'WP_CACHE_KEY_SALT', '=P>wj2ARR$*-k},$Br1K}V1Uj.o5Y2FI#DK*/+KR(_TR;apl#:zn{unJ+k-3+8oO' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */

if(isset($_SERVER['HTTP_X_FORWARDED_PROTO'])) {
  if (strpos( $_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
    $_SERVER['HTTPS']='on';
  }
};
define('WP_MEMORY_LIMIT','128M');
define('WP_MAX_MEMORY_LIMIT','256M');
define('FS_METHOD','direct');
define('AUTOSAVE_INTERVAL',160);
define('WP_POST_REVISIONS',5);


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
