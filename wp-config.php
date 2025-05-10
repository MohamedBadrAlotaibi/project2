<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lafilos' );

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
define( 'AUTH_KEY',         'L?~sGnm+n2Pz=G1|oDGQydy7DumtD;q1(/8zuFXX{BVTL65c>S<.ij&=NIV945Vu' );
define( 'SECURE_AUTH_KEY',  'XSgl1;P+P:B@1Y9&!r|dPKDF|=[z;qT38jo^#hZ=Gc1-~SE%!>1oQ6%HDO %m@?s' );
define( 'LOGGED_IN_KEY',    'KX>T@@Ie&Oj=(J[/w8rEuyeo>98{Y`R[y!Ug]8B:!yAc5tfr{A!3cDGTVz8e_Oea' );
define( 'NONCE_KEY',        'knJR$+ _qJ{!]94wU@xbe`c3:moF2nXhlhvhkI6`W}{UhcoS_c6_^KAEhyI6uS{s' );
define( 'AUTH_SALT',        ']DJ-R]U=3n^PT7jAKZE:S9W#N8+U!mD!ZAz|Yk16F5G,DZMgbWsd!(Lz+mN]+#7N' );
define( 'SECURE_AUTH_SALT', 'Auc92-VE6aM*=YI?cczA_+a1zc/O;4Om,tx>CmkWB/$rXBHs`_ <p~a27Zw9U@Tm' );
define( 'LOGGED_IN_SALT',   'KSUro~J1@a3e#4B<=ItfJom|8S lK1_q^%oNcXVgqI.[u@/ujF.NAUJ556.+hLfE' );
define( 'NONCE_SALT',       '~T2TobeM @9lqi[8q-`-Q/(/ox{``a4,|ZC{-#q*P~F|top 0hlA CRd3cC,,kLX' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
