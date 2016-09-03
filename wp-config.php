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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'redevon');

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
define('AUTH_KEY',         '}X#gA-]2yUJ5@?mRobNArF^K[Y^S;Unk>j-F=+k4V:UDy4Ad*xKOy-k_glnAy3f]');
define('SECURE_AUTH_KEY',  ']isxYB`YGeT?@LuE.~G`9q$>YP.yqSH=.N!iHTPX<=&+SIxCct70b%lX|vkIN.ek');
define('LOGGED_IN_KEY',    '(npNRgwO.I.os*<IO+W*Id5lU4$-uGBJ$Hp+TyO-529zsm0g-y})%|ZA|JT0&WF-');
define('NONCE_KEY',        'o07Yw/0ybL}%x,t:tg7gyL id!SX_ MV$nA[ DXq-e>OFO[y/R7#$^Q^c}_aht[I');
define('AUTH_SALT',        '#JtN9R :={zW>$7+5n+&c_pLA{w+[17s5#l+?q)zP5|v.@4A1`26o*BC%P5ctm`b');
define('SECURE_AUTH_SALT', 'LR~L;@Z?vgQ{ICzcE?.0p%,%<V!VF0wf<IZp{&WIsZo9UJ~!v9T^^3{814{d%slx');
define('LOGGED_IN_SALT',   'TPd33/iAWxf+21=h6|}/vEo :N8v}[eI?JN-04z01qLVsM+O7kt}nn|B>U={E>#9');
define('NONCE_SALT',       '{lwy]PTnYQlD<[=.!U1<*l4L0$<v3-G2ZNdY*/ak=91pp,V?7K3Ln/OZ&Q#V+]rC');

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
