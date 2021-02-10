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
define('AUTH_KEY',         '1ujYXhwV5MV6iwxd7IXW9YWXjGDarpLf58/O43mrRlIF2VLPwnq0rDep+tr9EkniluGIBEM56RYJWieic7Jbiw==');
define('SECURE_AUTH_KEY',  'z6e2eoiD/THVSmIoFpvhvqZ9a2NHFllOUEemwjtqwT+snl1sJ08CL0airxC+2i1w8JEohATek+B5ieBtZpkGqA==');
define('LOGGED_IN_KEY',    'qem9igramNOiG6cqTBfni/CtWiw2JwMdlASk/uNBq5hpLWBr7AeEP+jrppYW5ZWeqKTNoaumYgzAQNl0OZiAMw==');
define('NONCE_KEY',        'tSGOK7eDRJ/JVT8JxsOQPlylppsuyB4RJ8SzeKta3oW1hB99ezzDiYhdwJOSwytezo1WBtOns2/4VhHCo4x5hg==');
define('AUTH_SALT',        'JYIKTieJfewI5PnzHUzqrMWXDZwMNnVTEjvn83US2gMFXKpVSfAWAToy3gsZVgH1fgtEDkjMPATVee+W6MUouQ==');
define('SECURE_AUTH_SALT', 'v/HnvC9BUAfS4yRGAvtfmgxVmJs96TrgEOklnByNq2ZVOcqEDlhUlWnmfhPMva8FaMQ8KRICbTVOdf3TIB1Ifw==');
define('LOGGED_IN_SALT',   'JEAqDDPJ1yNeuz1E907xzOd6MrLk/bGgA2H7XObCyisclcb2CJBQ3sfoXWKK4vGVGgk3F7BhffWNSE1FnhQiXA==');
define('NONCE_SALT',       'i6uhF7JYMO1AkNL3DAR0+Cyue/XDLPb7gZmAT6C6tB7fW98UOSEAEocIwqF0AUk5E2hPXTm+1o9SQoWIgD11tg==');

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
