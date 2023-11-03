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
define( 'DB_NAME', 'dasel' );

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
define( 'AUTH_KEY',         '&zU0*z<o_9q39NR|7A[XH?lO)}.2KK}/rnO.r.iS{N*DCgNwHH^#yk^ip*9j~AQ!' );
define( 'SECURE_AUTH_KEY',  'SnG/0frKu[Wip@+A=@i66`KAtu4ky5y_)h6JG#$^GeAqeMA%qr1w5YMWzXZxSX.V' );
define( 'LOGGED_IN_KEY',    'omm%>sR<Q}u+7mch)s bGa@,J*S-KU]rDp#E.-R_k<|1vMW5l|6my7OFAAQ7Y%!&' );
define( 'NONCE_KEY',        'mPFxRvKmif`04:zT/!4~>u9!3+yuyf.[.PG0QypI8&C-91(EY:!]o.tqBsM.DY+F' );
define( 'AUTH_SALT',        'p7pXAcXBXNl9m4l~5(QL;{W[VpTbP7h_m>Eyz/+|yJk0!MD~YlbdJ~G?3cbja-kQ' );
define( 'SECURE_AUTH_SALT', '?F#{0|nq6ggQ4At!zVpez5#tQjF}Q$5H&U68L0@b,$OTh19H-o9vcU<MwXkus$d*' );
define( 'LOGGED_IN_SALT',   '?jW_w/R~d4`/S<y[U[576qGt[wc;Z1TZ4u<M?W$1@0u.o+#4+BWwBH+C)uw0&[$O' );
define( 'NONCE_SALT',       '+-Q:fXgL`Pj@5y^$lZ-b@}nPv_mdtF0-;L_ i[JRf<O(!NPEJp7M.fqq>7lLb-/n' );

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
