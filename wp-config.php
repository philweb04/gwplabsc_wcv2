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
define('DB_NAME', 'gwplabsc_wcv2');

/** MySQL database username */
define('DB_USER', 'gwplabsc_uwcv2');

/** MySQL database password */
define('DB_PASSWORD', 'I7hH+R0hU!RG');

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
define('AUTH_KEY',         'WVkqfB$n#A[W`1}oyWh)G`ttf1wN_)J=As7emxVmV__Yl:3stk_=zLyJz%KAKwN#');
define('SECURE_AUTH_KEY',  '32Fv_[Ft**&1T).9*]:;?9SV;3@lB3!#S> a-+Tz|Kg4a3?0P+,j^|38J:|z;&RY');
define('LOGGED_IN_KEY',    'V%0$EdB]eN._uO}0dLd!wM+(:%,oWK?Ow-gp%j+*I*aDN1}O4#)E>s|*dG[QV-IE');
define('NONCE_KEY',        'x{|?Gz-H|-6rD.fReDWAUV kSn.mT> ,aP=rGw-1>T4poJF%N#y^Nm%1`|^/-[J$');
define('AUTH_SALT',        'rZ0#S_`ogo{#l-a*[B*fLCv^vT~$TrO]epw:I@VCPmzCP)C&.t,2t|x00VYW]}~z');
define('SECURE_AUTH_SALT', '=i xt?j};[%-;I)ql>vv>Nu5gkhP,e)c6x/u*,FXsX4&w,[fs%FjCN=+ ;}3vW+t');
define('LOGGED_IN_SALT',   'hM#&hjr-|]NoyGjgcu%6VdPSEM1r!GtfkRHY??%68$KB=RAr?WBho!M<sP>TUo<@');
define('NONCE_SALT',       'N)EG)Qa^|}oy9NV>Gugo]9a^h+l=%beKtq{7`Aq%+:Es^ te@^Xh8d.47kDpYUcU');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'klyf_';

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
