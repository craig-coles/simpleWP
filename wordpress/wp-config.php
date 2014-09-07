<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'simplewp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '6O*^10&tuVus7(ee;cm1}}Ja>TL$1}O)ro4y:x&{ce;P 4IBx,CV)/p}$Z :LdgR');
define('SECURE_AUTH_KEY',  'y& !=xX8_(}Ub=FcH{Se)4j&az*xVs9{I6B3#rwwWxiY7t;]}ShP$4CK).Z<Eqv~');
define('LOGGED_IN_KEY',    '$B?M}lz+:OT(*I[_4-|B@le8w.#Ty7UVy=ndd_>^slAnhlT~r9n[bU:J]9OU_;{6');
define('NONCE_KEY',        'o_yaLxoqui&[+ [e`&IH}lawGFFJ[Hwu+m603[UrOxNNxZVSr1F,r1d1+OaOY3 }');
define('AUTH_SALT',        'e5h=#`D][4-5t=y.X;7`aFVSk4SQ;CFgNihpxMD`a<(=AA![:*f|*l;S98sfgm6$');
define('SECURE_AUTH_SALT', 'kdsl7QQ13#+>WtU4zcx}1{Q=Pas3eF>_YyRN?Qh}^FMK93W!%blGuuPn]iv_y<K(');
define('LOGGED_IN_SALT',   '{x?xS5x M(7&;:EkTC5@jf18as20eTPPj0>jrMtj-:s^4[szfi%|I9L`9nnSy>>>');
define('NONCE_SALT',       '+K~]#ClwP}_k^kv@:1dqS%wE_+ztwNgx_8IC+Q_bgquCkg%6/%g*n<UQ UfcXil%');

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
