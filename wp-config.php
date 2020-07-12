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
define('DB_NAME', 'wp_servix');

/** MySQL database username */
define('DB_USER', 'servix');

/** MySQL database password */
define('DB_PASSWORD', 'kASI765Jingy700');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** permitir a instalação de plugins sem os dados do FTP */
define( 'FS_METHOD' , 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ic6m~AD~t[$!l*r2Q/CP08+em/Ak azKxz5yz NDz}SJRZT!7xd2nQ%amx81ZtLx');
define('SECURE_AUTH_KEY',  'Z8YR,M:23]VcJDcC|BTd|vDj=#z1 |l?+pSQaU2B1~V43:-Z[bg}-99^zU}]:~p ');
define('LOGGED_IN_KEY',    '/y~p!=|>@=ECXG/So UjzDSi0jhte~hn%ev7y#-5%jW#AV]yQT~88Le+,UaH7lPJ');
define('NONCE_KEY',        '3*L7 Oc^8Y07o34=+pHeio li7R iwnu:$jHSCp-)d3@M=aeqj},DlX nZ<p}O>{');
define('AUTH_SALT',        '|0LhTgYY9(TXqu#4`2BT4oq*=GXQ*5;TqDs9P-gshS(Jo*.s^?=$M^J.jW.c@i[h');
define('SECURE_AUTH_SALT', '](J{B|;GMVTVuHCv;A+zBM Sk3xp-=iuNjOhJ?,(iR*) O=UpB@JzY_($Qm!tI({');
define('LOGGED_IN_SALT',   '#QiHjRooVU^%n>zu^DoGSe7$#|`UxTsW B53n^-d,(g1aFjw/ >GIG?kCfp/O6eZ');
define('NONCE_SALT',       'pL5CJN~0O@Nt#zt b?OkYl%vaOnAXJh4kY6/V`,E:C18YmI}2LT*D#!dcKawhJLg');

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

/* desativar a edição de arquivos via painel */
define( 'DISALLOW_FILE_EDIT', false );

$url_site = 'http://18.191.32.44';
define('WP_HOME',$url_site);
define('WP_SITEURL',$url_site);
