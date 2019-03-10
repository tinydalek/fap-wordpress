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
define('DB_NAME', 'fijialbinismproject');

/** MySQL database username */
define('DB_USER', 'fijialbinismproject');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'mJN(#eJH7_+uwlPjP^}^PW.cG|~hSDgl}rEw8+ol/4% W2~d-.O$G>tl+W_SN;}+');
define('SECURE_AUTH_KEY',  'O<jqj>:.?.!8DB0qGWyr-KrVc_E`8fAPk_-,om5Ki_+<6NX_tLJ]4S1u7s&OpE}?');
define('LOGGED_IN_KEY',    '_&Ko&Xv71uq}_78.4YL5^?uS|J8nDcAiAyDmIw)YQ_:Q)-B.2/_-)dxV*FcKy&oJ');
define('NONCE_KEY',        ']=|r6`?v(0h{zp|@5r*{7Q 37i4BI~!{*-d_nIvri/m(,1[fz]#+Rs(UZ9x=P`}Q');
define('AUTH_SALT',        '@x~1xJ&ZV^|I7~8@](|,1~yA{+&HCNP.~5B#e{~_Ja9t{N_T8hfd;r^[;Hz{MwfU');
define('SECURE_AUTH_SALT', 'Wk.z.DRGGxNyF7c@V]EIZm/]a$&!-4V5U]g$_P:y#0AGJNwZMV&_Ei)jyH%d3,#N');
define('LOGGED_IN_SALT',   'z2&1e-Xy<(AV7e&|sEj/G5J@+<4vQtcMznfq`1PNQjiwKi31}.WYm]QhG})n}a)=');
define('NONCE_SALT',       'e7v&%v{qGUAuOKadJ7*1@X#[<UDV{=Hw$ii/+gA01lG#Kl#aw[>m9`xNZMw5+M8]');

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
