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

// WordPress home URL (for the front-of-site)
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '');
// WordPress site URL (which is for the admin)
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');

/**
 * WordPress Content and Plugin Directories
 */
define( 'UPLOADS', '/wp-uploads' ); // Set Uploads folder

define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content' );
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/plugins');
define('WP_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content/plugins');

/**
 * Debugging Settings
 * WARNING: CHANGE THIS TO FALSE IN PRODUCTION
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
 */
define( 'WP_DEBUG', getenv('WP_DEBUG') === 'true');
if ( WP_DEBUG ) {
    define( 'WP_DEBUG_LOG', true ); // Errors logged in wp-content/debug.log
    define( 'WP_DEBUG_DISPLAY', ture );
    @ini_set( 'display_errors', 1 );
}
// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', getenv('SCRIPT_DEBUG') === 'true' );

/**
 * File Modifications and Updates
 */
define('DISALLOW_FILE_MODS', false); // Enable in development
define('WP_AUTO_UPDATE_CORE', false); // Managed via composer


// Autolod the plugins
require __DIR__ . '/wp-content/vendor/autoload.php';

// Define environment variables
if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
}

/**
 * MySQL Database settings
*/
define('DB_NAME', getenv('DB_NAME') ?: 'wordpress');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASSWORD', getenv('DB_PASSWORD') ?: 'root');
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
/* WordPress DB Charset (is setup this way when the tables are made)  */
define('DB_CHARSET', 'utf8mb4');
// WordPress DB Collation (is setup this way when the tables are made)
define( 'DB_COLLATE', 'utf8_general_ci' );

// Database table prefix
$table_prefix = 'wpdb_';

/** Authentication unique keys and salts
 * @link https://api.wordpress.org/secret-key/1.1/salt/
*/
define('AUTH_KEY',         getenv('AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('NONCE_KEY'));
define('AUTH_SALT',        getenv('AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('NONCE_SALT'));

// Define the environment
define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy blogging. */

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH',  dirname(__FILE__) . '/public/');
}

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
