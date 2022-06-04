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
define('DB_NAME', 'alexdivc_wp195');

/** MySQL database username */
define('DB_USER', 'alexdivc_wp195');

/** MySQL database password */
define('DB_PASSWORD', '7[5pOS(959');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'rbipg2avrkcyajgoip8fgltygtynecgyyb869kfgrp7lo6x22isz1dqsjlhnwcva');
define('SECURE_AUTH_KEY',  'iuyuwbmwpribadfpijmi0c4y3ggoh9vh7uv2twsrflifbcvtbacb644esdjlzuwx');
define('LOGGED_IN_KEY',    '2smxrrrjlnbzvrfwoq5xgst7on0an4ql9mtsmd301zkuxrfpdwexjworxwkejibu');
define('NONCE_KEY',        'aduqc2ktichnc4qonhax8jdhrmcolqrzsrv8s8icgqwkoreeqanhc1gnla2qn0fg');
define('AUTH_SALT',        '2wxvxacw7pgaeujphqnglqhvjnnipcz9bpq6ixc6rodqyopdtzfeo7cqtlsibvjw');
define('SECURE_AUTH_SALT', 'vsjklmm82owqf6l205c2kko4wnxfjvg5ascipal9n1d4uxwbrf1sfhqqhiixedkn');
define('LOGGED_IN_SALT',   'vtpufva7x0jhptjvbmmfawaasmjyoxenh9zmtifybavlmq44cqaefrd4fgikuktc');
define('NONCE_SALT',       'je2xr6pptxzcr7smmymqwuerozup2f481xvapvffld9nnxsdro2brbz6pkkeigqe');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp7q_';

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
