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
define( 'DB_NAME', 'mytheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'oJDI~f3<MEN.nxYpOQJ]$JsOtDAzw-t|1!0= XCOhG)}aw_Gm;ypMn6#*k[XG-kQ' );
define( 'SECURE_AUTH_KEY',  'tPS/!|>+PvLo~{JOBZ+*CHxKWJ?O4!2L72hXFpn}73]PE`>c>sv4(4bWZ9&&rt&8' );
define( 'LOGGED_IN_KEY',    'm-]Q.[y[Sa*+yHhn>^$?/$ds&1sbi=Z-_MA61ClZZo7oYnuJ)4@y*@,o[nVTM 3W' );
define( 'NONCE_KEY',        'Ad1^wnqw0lO3SE%|C&0 &]!<5+iq2a()l w((r=|BQ H8*ZHvSWB:>h#k^JQbNXC' );
define( 'AUTH_SALT',        'fO3t]spt60N$sOj.OmK+eRg}9ykwow8 socGDF%sR}YXH?{/EVlJ1t(4hDE$4q]>' );
define( 'SECURE_AUTH_SALT', ',DM(|q~cI%L)|{|3fK4PY?cV!$ooc|}@s-=Ibx{hoX:Xa2|{mR;MrdGI2hDJI~eM' );
define( 'LOGGED_IN_SALT',   '>C=qs9G%Rq!@;Oc1?j88E[ vg7MXUqb+9]D!O7PF;E.vbt~E!AR8I#aE:4D)Wc^!' );
define( 'NONCE_SALT',       'UMxapRlkTS-%`|xhiwYV4_zF5t<&hB.zd+dS1!D9}8my]TRa C}F{iz<1A?KLUCX' );

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
