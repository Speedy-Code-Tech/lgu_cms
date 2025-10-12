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
define( 'DB_NAME', 'lgu_cms' );

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
define( 'AUTH_KEY',         'c`.&)R{hED&49M@rtm/Ll|k<=x~R4gE=/7hPAO2^ERzR@#2|M^zB9R|n_GEVVyV|' );
define( 'SECURE_AUTH_KEY',  'QwC5Qe2xBPFkCoBge|sWqp>dPlPKw)Qjqj6;[[fY&$VEt)UcB4Pv[jXU0zn*#@eE' );
define( 'LOGGED_IN_KEY',    'A?DKHq_n>EG9-`0D[~JBEH*J,# n62n+CA@M/7p-;&~QQn^5JhzI;LlT|Y &cSUr' );
define( 'NONCE_KEY',        ' sN/y SP0VgfR;Q=uDdFXBekI_6OD1(l7Z@%$c1S2cMtzqO5|YX<+,~@k1/cX^k,' );
define( 'AUTH_SALT',        'UU~hj~Hi3bBK#(9I#GQMiZ,}o(xh3-#>TX4MTK;$RWV.)(E$|0XY<RWRiIZtiwx^' );
define( 'SECURE_AUTH_SALT', 'JRj1INwpOYAq$&v{#lILI]B JV_L%skTn@RE*GWJ)>UR!^K$%l>uyp1.wnH%>6z6' );
define( 'LOGGED_IN_SALT',   '@$hqy5+sU Az)dF|oke%P^I4q1%fWt{,]14YJ#a|>muB+j;De+c<]P0UIoq>omyY' );
define( 'NONCE_SALT',       '+/[e=>=%`ogWs(U+UpZ~nAyM;W5SmhHgl@5J*k!vf94>h`Pk}HJ8[Q(]>N6aa:Ru' );

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
