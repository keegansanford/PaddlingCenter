<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'PaddlingCenterShingleCreek');

/** MySQL database username */
define('DB_USER', 'wpBuilder22');

/** MySQL database password */
define('DB_PASSWORD', 'wpBuilder22');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'C_|pkP<0[LN^PjF8#vB,]]:@S`!MtAZ^!+DK!^|$AWFFxwt-?2Qx]cBukXlYZJr$');
define('SECURE_AUTH_KEY',  '0m<8mvt}t&c[*:{Yn*6W|]xz=kvEXK*mfo4+:^Dym<50F5phH|(iLk{se)6vCEoo');
define('LOGGED_IN_KEY',    'Y>n4ao25zLaA21F|3VWVG%}c-hz|zC`O?zifz/zmN+#Fjp-9?glVp-zP:@Z%_;@j');
define('NONCE_KEY',        'vHH@hW.G!`@8+pPvfk.|:8lep%R-=3d@O[.koko?!|um`-|1 *L:(?ZnCoazL#-9');
define('AUTH_SALT',        'Y&UYq0nIpZ>L92l]inIn<n/mRaVrZKu|WQg:d%vJV1Z1i7P{WS|m/6fhR##, ;li');
define('SECURE_AUTH_SALT', ')`l+6-F<7!V$6+0h.qrU[wI,`FJ3`mFyq ,7/3.^aFGfi^K^&znskzgBk&*L<;oF');
define('LOGGED_IN_SALT',   'vVnKFPld6X0zT@fcNU-.WzzGAf-q*pttN&;x Z1v7^e2$y/93c5dLG8k]~JV8<xD');
define('NONCE_SALT',       'Bui=u>1-c5j@sumtzU-@%nkyvmvxBi+5jxx;&Wh ?6ilIf|2jS/`?Hy_E2_5;ht|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
