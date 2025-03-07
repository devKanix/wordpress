<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'Portfolio' );

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
define( 'AUTH_KEY',         '=.N^Bh6[%X-0~-XU3/4Hrgp}y[`f?Jt&Hy]z$f(a32^ynwYFyIvh#K%+On1$&REe' );
define( 'SECURE_AUTH_KEY',  'wac?(ChgZBy`^ x@]e1QJg)iYrWn9=uH0v}^fb3EB9E&SU|GSnm3~EJpp3(fsa5>' );
define( 'LOGGED_IN_KEY',    'boh@D<{gBJ:#ai!}(-^!*(22gK$^egc9hg)sqX. NBw:@NRch`$WAw5lL!n3sPOR' );
define( 'NONCE_KEY',        'pd 2yG^Z>;CNdUzaY0@vhZ70Us,I<L<u@D^8 O]^+/. @1:z-QxWHi@T>H?~$d?b' );
define( 'AUTH_SALT',        'sB0Gz^&ML|Y1g#BXW.t-Sj! Zt6/Q?[mL3%;2XzF^<,iNxXhHtqYp^uvhDuOpdnr' );
define( 'SECURE_AUTH_SALT', '-ZHYj?fg,,+%{uV%Hg|rbBp4 LzZJ*)><S x.M;-:TCO#Z E};V-,lbxd5?-OeWu' );
define( 'LOGGED_IN_SALT',   '9}Th3$m@r|DJh>CQzW{y.0=m8AA^hJOf+Vq;1Q?UIJ`UBmVWK=EX{qBC.(y|^P|Q' );
define( 'NONCE_SALT',       'WK3^lBx8i||@YwmH817PX*<hu+::O]TQgkf@u[vhhC{2ut)[}Z`_*E{uzP],a @#' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

// Enable WP Debug Mode

// Log errors to debug.log (instead of showing on screen)

// Log errors to debug.log (instead of showing on screen)

// Log errors to wp-content/debug.log
if (!defined('WP_DEBUG_LOG')) {
    define('WP_DEBUG_LOG', true);
}

// Display errors on screen (set to false in production)
if (!defined('WP_DEBUG_DISPLAY')) {
    define('WP_DEBUG_DISPLAY', false);
}

@ini_set('display_errors', 0);


// Enable script debugging (for CSS/JS issues)
define('SCRIPT_DEBUG', true);

