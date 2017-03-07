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
define('DB_NAME', 'codersblog');

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
define('AUTH_KEY',         'RON?R _<A^EdaJ5bCF;2MZv;_H5(~dz~QH-.#;PN>YBF8Ozt=ng|CH&7t1LccS^$');
define('SECURE_AUTH_KEY',  'WPoeMxtsr3HsAr8oZ YG?3QHrHC+gm4o {Qr0Aysms.M81lL5&/R6J?Y7aBpVNaW');
define('LOGGED_IN_KEY',    'I%<.DS+dj(J[zjJA(~~Ebs0c `-mL5]#*tq%Ocod{b.3C];@uj7fP@Xaky/>N[J%');
define('NONCE_KEY',        '0K$S(uVA(R}sBLoJ/yt7,eV.s9}Zy,]r=*>SnJpU5A[>W+3iVsamCP4[Fbejhdk[');
define('AUTH_SALT',        ',iZTWE3fz--+G1.O2m?A$qYOTP[X=5WrEme}=|mziKCRG[9^<2X}} 9opX rqhX,');
define('SECURE_AUTH_SALT', 'bNG^V*`.U.h@+NiAy*p6HrFJZ=@3oI99~-($&E|s/])PFG_YgkV,eR7ENm1u>zM$');
define('LOGGED_IN_SALT',   'UlZ|BS;YHfv&{J~+W,ewh#FdC/Xal$P:/sCRZ#NtZp;(y_QMv%:;1K.m=^(?sy%l');
define('NONCE_SALT',       'ij<M>}u-pE)L<atJOW2&RT]9`+~8T8tP^ rKT-#g&wfI4=~SV!>0pa(l[H2(?]L%');

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
define('FS_METHOD','direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
