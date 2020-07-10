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
define('AUTH_KEY',         'Uq2dtzfV5l3fAk0DgS9W0I7BUA8yG8/6wYsgP9cZfzHsvkTL0x85vynpZOcHm/LYE42xO4oisGwBGmPXBzJxMg==');
define('SECURE_AUTH_KEY',  'Fpvyb/eoKJI87BNlvItenYAlI2wuMgIKglidbfOwmr3B12/Xf39h1/O+gzvPqGW0Z33FUz7rDeVjfQhhGG44CQ==');
define('LOGGED_IN_KEY',    'nmXDrmkFiTE2wl9VTKGSTUwOiUmCRI/eR9gQZPSgV1GiL4h35LJyCdDXae7WpD8fnHkHq6kOIsrONaXAowrl7Q==');
define('NONCE_KEY',        'zKIMWm1abDgvSsVB9cRxYEObeljPe5D0HWI0upXZ5GMheStChxEuVkufrNQ8BPbX2CHVHkhn62/i+ZoOJBeaRQ==');
define('AUTH_SALT',        'wnwzmph1dr0pgr+vkJI2rzjMbeQkVF75ojSSJW2TaBnzCUjvVCi3EpoNNCefmTZ+YCFX9PLoI9ZRhCkimsw+5g==');
define('SECURE_AUTH_SALT', 'feqH91lepsQp2XB1hcSJS4Vks10sPa0PH0oQB89crQQI4IsJavchXQWLg1WTq2Tn9aYTnd/Gakp5lmTimhS3Hw==');
define('LOGGED_IN_SALT',   '+r7t0b7pVkJBG1/gAwbCJRtTVTKarYj2B8NNk8Shm+Qy/Vzo3zxYT4qEFnJ6PU4sohTuaDuL8zmPvnQYrEWsSw==');
define('NONCE_SALT',       'FAF1w8M4ao2f/KDTMQU+wKtw7TYE2/pv2P8uWeufNHenrs7jJZwOv9jtENSetX8ZYEuezDQODCQY1NGQ9El4mw==');

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
