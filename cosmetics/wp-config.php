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
define('DB_NAME', 'Cosmetics');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '`XfpoMk _q4H4`jo_?9.-WJxMTVFX26^Z-eKaXK`Z;)Ai1A4S#!HdRJ:05+w)lf8');
define('SECURE_AUTH_KEY',  'M@009t,&3s9)*CuXw*I9`~j6qcO&0nm0g5A%&>VM#X{#+Lo`z_dWNgInVn+#h/Zx');
define('LOGGED_IN_KEY',    '*IMwCout&<j$(3;G}[,;/3PI>hDfh;+B&3V$~%~2~([v`7P=6JaB7ya$Z<5jf(bo');
define('NONCE_KEY',        '0jgI3tnu+~a9_7X+0Cy@FSR6/5QSL8^rxsTTT.4@y|1Up&M2,{42Pc GdoR|_I=-');
define('AUTH_SALT',        '#Zm$u]]_d|:oayov{[6L%Pra,SksT`++*]m(XOv8?.r5wn8r`:MMSXCDf[HNV6;d');
define('SECURE_AUTH_SALT', '_0Fj7v$`Vi|`A^mphB=~_MtkMN)*O$PiyjS5*:yC7!o<^iO:Sx9*p2)6_nXBe8jU');
define('LOGGED_IN_SALT',   '^,r7Ch**/uSQOy$;-wQZ :R!`V<$YK?x4=zk*$m/T6[`RY?EZr,8yXiY}EvV4^O*');
define('NONCE_SALT',       'eS7pCXMEJ#nuT_)WY(g3kg]>t,=IG7XG+OmsE)6acFc#h2Ok}ua4_.yf`C<EC274');

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
