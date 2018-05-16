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
define('DB_NAME', 'metricpl_metricplumbing');

/** MySQL database username */
define('DB_USER', 'metricpl_metricp');

/** MySQL database password */
define('DB_PASSWORD', 'zN)Vq]DRN~gwpPslBe');

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
define('AUTH_KEY',         'R}As;qHXYA!-wfKgO#Y-%kV~nd-YW^c#gv|+~APO%+T/yTfAwB;-Nw+]*QUiT5l:');
define('SECURE_AUTH_KEY',  '9V2H1/x10$up48^x(rKzSHiUsTm!KB1$U}g{gF|uLg|ecW.}B.{*V?&!JTG3F6ym');
define('LOGGED_IN_KEY',    'H=RJrUEhNRfO F!CQ<K&%6pC_5H.YH1)W<n:|5V_?u5+.02C5;Tr/P5`.M-B^7l0');
define('NONCE_KEY',        'lEBBnJo`UOn|Q,}tazkc*k6HVi,~;VNDw]L=]Ou<:`=;FAl<eqO}w<X@_EdfrEr>');
define('AUTH_SALT',        '!hrCF=b=E;VXvIRit72se#mPCXKUg E,InCy fxy{GxX{`QY:FD7+]YD9JG7G|00');
define('SECURE_AUTH_SALT', 'Q(WQbZ$sXYL1f%D>YxcxE{Pj5#Zp&(PEJ+>=O9cr+Dy1P2_ey[M;gCxr-D!ouDHQ');
define('LOGGED_IN_SALT',   'yI>t+ed@d2o-]G`HH^L_[JBQ_^#NA/j5`s3-2BzdPr!(p/|C[jb19*N6eu)Lzj H');
define('NONCE_SALT',       ';n~w+:YnAM`3D-^T9zT&}JkCb-5M5= #f*b|z9jh-+y!0j;5Zmy3~!%bM~%t?/Y,');

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
