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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'UO2/oM610rpBonmADw7igZYmdoZbVIZp0ftcUqwHMszC04o5HXdK41Z0V2LfCzjeDNLVOST1kQEH6khIhlgp1g==');
define('SECURE_AUTH_KEY',  'L32h49wHiDW0RMGqrUb4QrExxyacm6s71MfhdrDi/4gFCpu6PyS8S17jtPOHfiTHKnmNHgJF3e2Q8BOTm6jzgw==');
define('LOGGED_IN_KEY',    'fQMu8JcpkyCLDEJUmcCrHKwll1XeNo+A+Muct2nmGjoLceiQ6i4j8/Rdib58grs1Lc8/9gWGNpoQ342esJD/Ag==');
define('NONCE_KEY',        'bYDhiX39gT/FyCnL+o6TkmPJX4CPJXgtzlQ95H7j8heG804PAOhVtWmiZAA5tGSg9hVlek+Zxcb/k0plHyzT3Q==');
define('AUTH_SALT',        'sXoL7FtRL2wgdvzlTl7DPUcvaRaIpGv/m8iS0X07hpLUPM8esbDtL9u2T1VpUptTSDBxi6VpIBcXVYzzQnkJcw==');
define('SECURE_AUTH_SALT', 'f5G5IpEGINSxaA2Y14TcVZuZnYZd02q8MCY2eSq1fW7dbL0oXAtVLkg095zI761gD3enduEYKyD/nJCka19vQQ==');
define('LOGGED_IN_SALT',   'Cu/2U8/6qfTBQKHmfU1pCKYarMnbRnhmBpQC9lSWcJPMTP5dpBbK6cgEvVulVwERCmZ9iKrwbjDDi7s/BrdFIg==');
define('NONCE_SALT',       'Ql4AoRH9cZAivcKr6KnVMWdDwUJv6t1TNvDh1XsxKc5gHA8fBnYV7eU+5qYLBy+qjAx4gi5vyxfJcHxsRhivDA==');

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
