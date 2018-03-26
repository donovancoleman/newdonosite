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
define('DB_NAME', 'u439594529_ygyza');

/** MySQL database username */
define('DB_USER', 'u439594529_uvuju');

/** MySQL database password */
define('DB_PASSWORD', 'ynapeNubeG');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'kYAp1FWf3416B9ickfyBi8rpSNpg2nB2s4V1DI4COLZF9a7ZsePCxS34p2tkEQ92');
define('SECURE_AUTH_KEY',  'UCdskL9xhRMVjswIIurFRvkBL2JI1sjgak5hmulUDKeimvAsRtyFMr4wZ7JQYsDc');
define('LOGGED_IN_KEY',    '6P3p92kYugVEcBgLMO9z4gLBFU5PPIw5LRErxUB4XMZvRVcyDHTde5GpPCUXxLcE');
define('NONCE_KEY',        'vqvrBqbKf88IPUgutaKxnKYLY71OtibNHRggVs4jURW0xhrAHW5wQvUYwjgSBOzP');
define('AUTH_SALT',        '24D4klWZaIc59c6nau1sekQlb90LoaNt3aUQ90uGrmAtDowM011KJZumDulHITAk');
define('SECURE_AUTH_SALT', 'QpcZLJ6C3mxOrwGKhTfztJ38j62N3gC1cpJIlCVCdeO7IKEzUSIP5j5tTKubqvAl');
define('LOGGED_IN_SALT',   '1OSTnfdc66LCAJAes7bsMpCulFwQotBl1mVdchXSKLZBar9v89C6OX1GRRIZyOiP');
define('NONCE_SALT',       '8XC7gUaO6AQCtPqycHeKBJIAl1URyXsELlNYJ1UQXMkzwBYvFcJGgrMLI5VwlEC0');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ivir_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
