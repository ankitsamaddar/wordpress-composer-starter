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
define( 'UPLOADS', 'content/wp-uploads' ); // Set Uploads folder

define('WP_CONTENT_DIR', dirname(__FILE__) . '/content/wp-content');
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content/wp-content' );
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/content/wp-content/plugins');
define('WP_PLUGIN_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content/wp-content/plugins');

// Autolod the plugins
require __DIR__ . '/content/vendor/autoload.php';


// Define environment variables
if (file_exists(__DIR__ . '/.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '/.env');
    $dotenv->load();
	echo 'Environment variables loaded:<br>';
    echo 'DB_NAME = ' . $_ENV['DB_NAME'] . '<br>';
    echo 'DB_USER = ' . $_ENV['DB_USER'] . '<br>';
    echo 'DB_PASSWORD = ' . $_ENV['DB_PASSWORD'] . '<br>';
    echo 'DB_HOST = ' . $_ENV['DB_HOST'] . '<br>';
}


/**
 * Debugging Settings
 * WARNING: CHANGE THIS TO FALSE IN PRODUCTION
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', $_ENV['WP_DEBUG'] === 'true');
if ( WP_DEBUG ) {
    define( 'WP_DEBUG_LOG', true ); // Errors logged in wp-content/debug.log
    define( 'WP_DEBUG_DISPLAY', true );
    @ini_set( 'display_errors', 1 );
}
// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define( 'SCRIPT_DEBUG', $_ENV['SCRIPT_DEBUG'] === 'true' );

/**
 * File Modifications and Updates
 */
define('DISALLOW_FILE_MODS', false); // Enable in development
define('WP_AUTO_UPDATE_CORE', false); // Managed via composer

/**
 * MySQL Database settings
*/
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_HOST', $_ENV['DB_HOST']);

/* WordPress DB Charset (is setup this way when the tables are made)  */
define('DB_CHARSET', 'utf8mb4');

// WordPress DB Collation (is setup this way when the tables are made)
define( 'DB_COLLATE', 'utf8_general_ci' );

// Database table prefix
$table_prefix = 'wpdb_';


/** Authentication unique keys and salts
 * @link https://api.wordpress.org/secret-key/1.1/salt/
*/
define('AUTH_KEY',         $_ENV['AUTH_KEY']);
define('SECURE_AUTH_KEY',  $_ENV['SECURE_AUTH_KEY']);
define('LOGGED_IN_KEY',    $_ENV['LOGGED_IN_KEY']);
define('NONCE_KEY',        $_ENV['NONCE_KEY']);
define('AUTH_SALT',        $_ENV['AUTH_SALT']);
define('SECURE_AUTH_SALT', $_ENV['SECURE_AUTH_SALT']);
define('LOGGED_IN_SALT',   $_ENV['LOGGED_IN_SALT']);
define('NONCE_SALT',       $_ENV['NONCE_SALT']);

// Define the environment
define('WP_ENVIRONMENT_TYPE', 'local');
/**
 * That's all, stop editing! Happy blogging.
**/

/* Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
  define('ABSPATH',   __DIR__ . '/wordpress');
}

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
