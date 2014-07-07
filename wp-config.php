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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '/1r=3Q!Y6_!rdg-5%XQC;O8U2}nTQg0-HdQI}ss>#b>@?=d~lF^V,]FvNv9c^X*3');
define('SECURE_AUTH_KEY',  'Y2g&I2Q;6#qcv~;1nT-+trh@`#I?dqMK-DH uT%D*^t>!s#+9cq*5sl86g1b,Ci:');
define('LOGGED_IN_KEY',    '-L!T#m7dvr8=T*s3o<C{Gi5Cz}H`.K|ds|m18 @K`=* -w4|ue+M-c<`^R-Ux*_{');
define('NONCE_KEY',        'ryxEPfgRhx#T/i2]G 4C%Sg3R:b WyoL1$NP .nxRYRP-RKt+;Iv{AQ=!0/Ddd&W');
define('AUTH_SALT',        '?FADs#ji*2z<<5o|]qKqw|#>W*o+Q-=qG|zze7TzEE:|UJd0g*sdN};++:u<}Fp;');
define('SECURE_AUTH_SALT', '7bH=|h2&3}1XRSl&zH#()QH57|5j7(NkY,/d8-BNzgnw4MZfc^wAi8yZA0&J~N!O');
define('LOGGED_IN_SALT',   '?,[u2z<(PsD+QavHWJd#@pBXy[uSOa|&#a0dy|{p4:Au6^Ms_aI(OO(Og[;<?t|*');
define('NONCE_SALT',       'v/Rgb?Xf+(uEiTC{7$l*wT)3zW+WMK-|?k)-QIj*muv2(RPhe6t-NAH>Dgf^gWWt');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
