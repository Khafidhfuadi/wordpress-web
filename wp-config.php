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
define( 'DB_NAME', 'mywebsite' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         's/jwx%x8y43fe,>`[%(.+mR+iOa+O*jR/G[0%E@?Y7f^?xbw%~1=tlV$%i]+_G*r' );
define( 'SECURE_AUTH_KEY',  'Y|3ibop+tl*LC#=eHCotk?^QCj8j@EbN/j$!P]2flAgsFw]D;F=9[RZ538>~SV:X' );
define( 'LOGGED_IN_KEY',    'DGAJWJ<(KuW+X[6yi:c7 ~hf>#+??Z=lby-C<v4^5l,u87WENXEp|YNa)ER]2J;g' );
define( 'NONCE_KEY',        'x/%Q<i$tEg(g<Q4{n:+5I|`%bU1ZV(hZFg.}f/CHUoN(1(v|}r!ID1{(>f:Q:Sqs' );
define( 'AUTH_SALT',        '{GytQIME?e<VqU:a)OlPQ,%HjH7,QrU2`cvVLo jdZwx(r>N,kO~kb.E}9](^{fm' );
define( 'SECURE_AUTH_SALT', 'SZ$d3VQ.J1xA@Fa-Cug3%8Rbe|Q[s~Te%Mw;M<BQ~.2W]sH+>A;c0}Y?n5|E2UQ/' );
define( 'LOGGED_IN_SALT',   '.0TLrrA0MKs)n_ZEjc5plIsEHt39Zg@]D~{pN32Rtk#=6/n=?!D`j>!Vk$UZql1~' );
define( 'NONCE_SALT',       '*]wy[UQw5!MT;2<2ie<bR> :PF]%ja/}x:@*>~SaT-mCC^[@3c_K(E2>G?Lo^Mhv' );

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
