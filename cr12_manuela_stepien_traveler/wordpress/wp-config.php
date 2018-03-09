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
define('DB_NAME', 'cr12_manuela_stepien_traveler');

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
define('AUTH_KEY',         'r02hRUp%hAEf7-MYPLY5-U= RQ!/4V0:hyBiP.=N4LSsS?-.`u2sRL=dCW1vNwPz');
define('SECURE_AUTH_KEY',  'h:psZYCv%<$B|Mn<QpTGx-&[ /3b>5=#ZOQA{%2z(u-5PzM6^GUzjyad%SeZf6:O');
define('LOGGED_IN_KEY',    '{X?RwY]6wz7zAh7G3UwbE=rKnGSqGVxu,u#fxw~_<_lv=oh%:w`}prppv0YCg5AU');
define('NONCE_KEY',        '`}:0e5##xK7*BDvJKut=rcmoWyml ZYTY)jX=6T3:FE.{G{gM>5|@Gb%aj=9MyOu');
define('AUTH_SALT',        '=B%PU!dXS (qGx|6Viy#cTKGM|-a@<Tf_;F]oJ1JCRYh:gg04%!SPX0PN4bNFM!b');
define('SECURE_AUTH_SALT', 'WaZ+OG S.PK}P#wO;{lHRW+QO=0vgbF6; {6rL|[.?5 !)K,)k&RD>d;CaP=$U&>');
define('LOGGED_IN_SALT',   'PJNe^=s:A!j*X7r(N-ueX[#L+&b=P=f4eErr1>EgE^K{L_QYga3)6V_H6,3wZQVU');
define('NONCE_SALT',       'O;VA`< >| s{%F:q*1I=cLN<(28 .o:E_,&4~|n1[w.{s=ivlC=(x])g1=^w >H9');

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
