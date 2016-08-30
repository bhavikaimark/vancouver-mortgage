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
define('DB_NAME', 'db644208478');

/** MySQL database username */
define('DB_USER', 'dbo644208478');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

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
define('AUTH_KEY',         '$1jU Jv71-9m-Mge|5xX9!;UsBKv>g:um9G6/M@R !-5n1I6$Ruz*cQ1I/=V)[yb');
define('SECURE_AUTH_KEY',  'X!Zu (ZgMh#2N:(?^@MMy41S&[#Rn`}cY  qQL0g]=vD.j1cj@r]e8X_H )3aQ`n');
define('LOGGED_IN_KEY',    ' n_V/m-0}Y~~=P1tJQ>/W:m9nr~-#bl~QZZ?ASBDG|D~p*::oV M>fRH,_7nJT Y');
define('NONCE_KEY',        'g}Er@)IU6vY$wh`7e!atl1gl>?cl;lxazofNX&u9!m}gSvKs$+`lw?nYJ1?3`zXn');
define('AUTH_SALT',        '~0)Re39{E%Zu|mJ|`9{P*;(}t>@n8)uMjNetQ;XNGyJ_+EUb81Nu1}*tzdM.Aw:p');
define('SECURE_AUTH_SALT', ',2fnV#WlqPFgi@9`a&hB1DNB 4~%kcXx$OaS|M:)I.UVs>HtPy0-3C|IlTTE&+/F');
define('LOGGED_IN_SALT',   'g%J5s`8HJ)$R!-(<*zJ1TQ0<POwg+D30.>eXDVTC~2U,$j!X1.nYXYDS>8^F>e,4');
define('NONCE_SALT',       '$/eCDPD([e_%V>lS-P{kxT;lypI>XsrSvXq|]zOwuS[i]=KIC@FP=gj<{<=GbP+W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vc_';

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
