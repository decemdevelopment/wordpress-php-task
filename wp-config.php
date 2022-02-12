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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'yNNa9esy5SiGR8MSj2ppjbERURC2N8MsetjHa7aXFcrY46hBs48PdUtGICsnxx2iDxfkwRGjCF+ZgTHOlZBDFA==');
define('SECURE_AUTH_KEY',  'iU+DuCgaEH5dv4/vQWVRENqxWPLZGgPAorRToMXvf62ejNWnwDQRybmi7+Kt03oRUvlZnZ1x5+xosyNSxwo15Q==');
define('LOGGED_IN_KEY',    'EjiJVq4GlcyxVoTnLpJSfHrBlWv/9ycVEaEvkVs6N81gTpr6URHGDaywGnxiTmaG6PYqdUCPVBlIwil7NSaqzg==');
define('NONCE_KEY',        'Tzk5KHemsBZH9SZhg5aa1sdF4HHJRpixDi/mJ2dmagooF81dEscylJHcOWPTp77qYf6D3o/INhmdW9YGhc9/4A==');
define('AUTH_SALT',        '9qsFeOlBdf0yMNtrMYrM1sXb5H8lRs8q/+tzODX8R7OCM2ySlqnkRmpcruBHqzDxxOKOhBctBBxWuluAX93rPQ==');
define('SECURE_AUTH_SALT', 'HZE9S5mTdc5qZmKyu+Es2EFkUEFFHJMDgvBTqQRPDYIvXTNbIFFQBwkWuq6t6BRo38Gb7wHRbP7PVzM2JJcU9A==');
define('LOGGED_IN_SALT',   '8XNWMujDORWdHjCJ8EuGcxUQ/bHeDxJibI95Jf5AkMu854KIV1zEuLmXkBIMqFealZzbQJi0aIYgb/kFoelCZQ==');
define('NONCE_SALT',       's8E3AfCQrzXg3MKHxEB74J16JRpeF2lpoe5vTge2OYrpcyl6IGaIpyIZMi1lcoO2Moq7KCb0CKyvFPL3aZrtqw==');

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
