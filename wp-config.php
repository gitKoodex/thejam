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
define( 'DB_NAME', 'wordpress_git_hejam' );

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
define( 'AUTH_KEY',         '-gD6d.sf{Int,1MKD~G1f.IyuJke6b!2CbGjr3.{*ijGSl#%TWIW:!u-ML:yJ@}4' );
define( 'SECURE_AUTH_KEY',  '[tr[YaDMvm)L,.3-#+mbkMy}+m^Kkdrfcj4 h4m=/8fb_,V{DEPxeDuA_iMxp5@v' );
define( 'LOGGED_IN_KEY',    '!G767=]Nz8ayay/Y^T.8 Y)la$ra`{`V|/3%E=iSb0b=!mO|0aF qM/JttZB &c0' );
define( 'NONCE_KEY',        'BU~~y?HykwJ9!%TTMT+2Q-lWm;fE1QZD`784!/tX6`X82@Da~bmZllr-d>cafUz4' );
define( 'AUTH_SALT',        'g2%av14l#MC;/[flkeV9V56t>Jzo!3  T`PZK6Xh)N*K3 TfU91H36Fsv>=?+C=.' );
define( 'SECURE_AUTH_SALT', 'zMn)M8chze=<e*?78`4WI<c^~Ke.Xmy|z$D{39Pc_Bt+e/l(wwJ9T~`yraVvcfOE' );
define( 'LOGGED_IN_SALT',   '2Q0 !m/ceF_a0mH#W}a=6%?! ^|phrdc+-O4<}nefoVs6Or#&K<.VUsp7`q91lX{' );
define( 'NONCE_SALT',       'df&M#I<<*N%p0m${n?~v:YtVo|zs9yeRX+&9PD8{NKH>$Xk{,P7IA;Kd#fk!F{a@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jam_';

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
define('WP_POST_REVISIONS', 3);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
