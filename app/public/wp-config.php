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
define('AUTH_KEY',         'N6rMCWBiIP3qcEUytGqHPvpVH6Cma4cLWcQGGZr6M2FW229CbuipqufLc6yP5QnyOteI9cwkFmKMvp/NaNpxZQ==');
define('SECURE_AUTH_KEY',  'otmEumiKnRD4woHHFfUIr2zI/+EtIGcENA58RbnYD2k95BoNyA02jR4LcECgGuDFkfv7EDiqo+Jhg5/+zATK1g==');
define('LOGGED_IN_KEY',    '9SngPo1fz5kXl+74+r3xtnihKL0jPDZQcitQP/BUBYBzodM8O9x1hjWWC367kQTeMF4ACmPmt6A5ypNGPr19DQ==');
define('NONCE_KEY',        'Y6UN3ZfZv5vav0aEZKkOFofk7ZRiGjd+ryi8ixYrI3wZRmnCMd3mc7p5nRTRFSWICx/TzkKbiluS5qT2f63Upg==');
define('AUTH_SALT',        'egMfmJfmTmTK96ZzjFaMcaG4Sa2SQvZOsYO26jGOXrYcTmQy2fBkzMfVgZbJxq6cej2SYRypk7oMPBJh6gHoLQ==');
define('SECURE_AUTH_SALT', 'dfWTroohwJgFlJHqIdY2af2w9kCxS7Ds+HAUTlr1VTLKeX4WIk6APdFKXiAOwAjGKB4I0S30QhdcTelda1hPOw==');
define('LOGGED_IN_SALT',   'tMt6NrQtqCLS+ixeJDYWmuMRVS3xsl6joWsWI8EOnKXlWh8HzkSGS7ZOdvFdladcZSUpOFTizt8PrNWIa7k/eQ==');
define('NONCE_SALT',       'syNOE6tC9xTj8BEyMVzD517GSHQBApnufZi9hGWJFjjbb4Ik59m8/xFP37Bh7M5ezCElw2h5XHo0/702dWvrlA==');

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
