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
define('DB_NAME', 'wp_bd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'A5s:k1NmR]^q=&h8Y:uRu8t]od#{;@+weaGMUnzl4@m:^LF]p!HlU}yUTA;|1K*<');
define('SECURE_AUTH_KEY',  'nUo+;Xwvai}rnhLMh8~y`#.f<V%$TU%NSc38P(=d|K0ezV7KN4md-Tt=:$j7rtJ0');
define('LOGGED_IN_KEY',    '7p7!N:rUV nrWE+w^B}!*2B?t(%f$&U%Mba8:lBuX@*S*)Q-d!X|5#b1|D_3/o;x');
define('NONCE_KEY',        'vKzT :d/M75JCR;e6w9>A~Y,0XB$B2vM 8^{SmX.oE0XZA.rVJ4PD6Mzz9^XzPaj');
define('AUTH_SALT',        'MG5ggZ-E<Ds A*{c8{.Y`-Sp^L93CVm@t-/ipC%@Y9}X7ZqW|:QSL`V/GU#L8w<f');
define('SECURE_AUTH_SALT', 'lFaNmv&d4^-5Q89%V@t5DvhZW#jOPeq=wJN*Xn1v@[dWR`o>p)/fE70B*!|NF@GY');
define('LOGGED_IN_SALT',   'UTR+prUHw]x@w8q/[B]6oLo#J@Vs0s& #e1fP6[;L} <0}tHF!<16`8;[5qCo1#e');
define('NONCE_SALT',       'u!C5p;R@U64c_B+S+;C 9-ANmc<uhyg$,RlN}Q5h/~0$nH${HK};[|e4*}VHMlKL');

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
