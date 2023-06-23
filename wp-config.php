<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings



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
define( 'DB_NAME', 'dbs10518747' );

/** Database username */
define( 'DB_USER', 'dbu2180942' );

/** Database password */
define( 'DB_PASSWORD', 'Mendieta77*-*' );

/** Database hostname */
define( 'DB_HOST', 'db5012512581.hosting-data.io' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_MEMORY_LIMIT', '512M');

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
define( 'AUTH_KEY',         '.gCKx|j!UO<P%:-pKm*[<ZwY{}8LrK>i<;@r?da}f-O?vw@3v+Re0AOPOa,$8&At' );
define( 'SECURE_AUTH_KEY',  '{e1USMo3WKrk4,.wrr?8.yXWo6;H% O<R@|bt: gSri[4e<l6nT<*>H|_RnBQN |' );
define( 'LOGGED_IN_KEY',    'qzKf`V83Y9<`IaTek(E{iE8r r@Ur<zy0|?_D6@#AlbXC9t`%rr?JB-MYvrrFmq)' );
define( 'NONCE_KEY',        '1YR.vk}be0g5Ps7$nC`N+<s$0Na#7J-/{Mk:+e5 ;H$G*Y^!J.</oTP]Y2V?c4)-' );
define( 'AUTH_SALT',        '>vVUt!V5lH:M]]p-FXw^Is4ro:H#A^^#+MR$:iB%_%{Ch*3584x*/<#E>6/%.{2M' );
define( 'SECURE_AUTH_SALT', 'm 84}d8&?h~XfJ>Q|`t+[vvL:?w1oHe,gB>I*$q/iK%;AL?09riHki-Z?`wgM`)B' );
define( 'LOGGED_IN_SALT',   '~prky _n?oM2pX@X]1QUb<(Iy;v3,`Lh#R}8qVK53$>CDV=q=2X9}`*u8!FmY,G;' );
define( 'NONCE_SALT',       'l$s:P0Eza?:!B6/_uo5S0_DRp_(t`BPp&5Mk4z8aZ/-WypQIp&D0H1M%L-UMR/WR' );

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


/* Add any custom values between this line and the "stop editing" line. */

define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors', 0);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

