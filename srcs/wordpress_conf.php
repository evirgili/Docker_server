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
define('DB_NAME', 'wp_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '<ruO3L~0y^T::v+2SD|!%nX-ol?]$e6@3:~v++(P,E*_VD}=I<Fy*o@fKXO_)R-*');
define('SECURE_AUTH_KEY',  'eqc7fSRu}Y667C?aVxZ:7:X:L0|>uqe|jN_:jr8dT^WVZs.UMhvL->8`SdHuIz_E');
define('LOGGED_IN_KEY',    'i1Xi[S3KT{aA32PhmI&b:sW-lHlM)le*`SlO1kN3cxo!rAW>9V*)8uY^A|,R,*y&');
define('NONCE_KEY',        '/<kAi%-4om|=|e%Zfah0q0DQJM)Yp-zEG4d}veRY{V[pA|?c(#U6bE6y UVR8+p:');
define('AUTH_SALT',        'j7+efeY{s&g%mA%M$L6pE#krOUn dOCAVnS(<S:2j(v^$zIxnVd{[-%2;fP[V/lr');
define('SECURE_AUTH_SALT', '7F2N*q$l}#YB*2o+v0Vo<(o*@u nEG-(b9DoYo.g6(M*qIMfP$rl+M1QG=)6?Oi@');
define('LOGGED_IN_SALT',   'zFjX7Z3}gb4v,M%oW`pq}TZ_zP8o?}/28<]10Y*i1wtPVv>^W}7M#PW2<;DA;u^K');
define('NONCE_SALT',       '2JW9+u`($u-?|SV/GU(9VVKORdhZ7u4n^wBI{G2-R-3CK>?%a<|lx$R>5|72Bw]x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
