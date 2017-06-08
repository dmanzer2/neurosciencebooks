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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'G/7jZMXHAWuC7LZ2yzASBTOQlED53DaYskCabZMuDUr01JtQs5aqz2zoCgNFUcOFpvJ+rMHQIjss5ixeZs21/Q==');
define('SECURE_AUTH_KEY',  'CaPV/LsDwhdT9t26x2hCbCtZIxQrGxOSlLp76tWWakOQhPirQlXB3IOd9cwKcUVMLDC4hN3y3BWLCEi9ObV6OA==');
define('LOGGED_IN_KEY',    'CF79OgzfJMR+8XqOnZ1risJRH6IWAL8wgW2ssFQ8uOPK3c6/zbI2H1TgWAeiJBCW8dVjSpr4+EDz17nzccS1Jw==');
define('NONCE_KEY',        'uYvt9+s0iYXRhFoOYU4xutRlNJYYHyU/dc54tn1K4ExUqnY4ObaGYxjFXNQYBGT4bmYsXXTxoSgfTLC6W05fOQ==');
define('AUTH_SALT',        '2MJ9j2DSuGdHbEMPLVhWKZMb5zCAC5/oBQIXBIVN5QhQMPt6pz0F8bPYYVls0GX31tNRtxycBIS7Q1wBLIFFZg==');
define('SECURE_AUTH_SALT', 'sW2TD/5RCXpQ3lmU815NHykfgrW/vXdlgqKV7rM1MbxCA3PKtwaWgp1PuiBkZ62OkAICA3UDk5giU1dVhwGBuQ==');
define('LOGGED_IN_SALT',   'xvMmubTuKtsE+S4FjQ01IfCzA/2O34UT6pV7rsrXxV5oBL1RNmm3J2YqOIe0VhO5qEfGxgnVYjc7u8vAm5hsCg==');
define('NONCE_SALT',       'Lto7q5xtWxITa9ZegzyBI8myq/pWtDf7GnMZ+uRSapcaAlPOsYE1sBVeJK/TkD6o4XtRKzQeLiUdpANIikJAlQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
