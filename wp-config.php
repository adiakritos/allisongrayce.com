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
define('DB_NAME', 'wp_portfolio');

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
define('AUTH_KEY',         'XXKMvFU+n`4Y=!Vyc?9wIwZu]Vh#EYK#s+dC,39|;i1-f}O_OgfEDf~xH8B~I{b)');
define('SECURE_AUTH_KEY',  ',BJGoFH-:xieSX`@k)e41En?N2N_5XX%{r^U[*_APbU.t&dtq.,MQtWw0W^$Rw0X');
define('LOGGED_IN_KEY',    'Rp*iU}s.F:b|6}p6P+rfDgg)FKZ,hN+2I/yQIA oc9$|*6y6gE3/>?#/.XXW@UO<');
define('NONCE_KEY',        ':km=-)&CPKPF&q!KS_pY(6!,*<R!l+XVA1a;h4f.:8 oQ(ycKe608o6@2+`L.y^q');
define('AUTH_SALT',        'H/jMp,cNWb~GSfG<90TKlG]>RISq,^M!Z~jK8_OVx#>+c:8]RL09q2sjo+e:cXl.');
define('SECURE_AUTH_SALT', '&OCnRC+z/^L;u+iwH/CWM%tH1@dyb[7U4Tr(hVP-;RJ,g=k~*MP?]|c9Z*`}+zrY');
define('LOGGED_IN_SALT',   '/:IfN(O|41;04rDl^|6S#+*!R;pdO[||1f|)8!cq2?3$s>@LG}}vn2kKf%F_4kOa');
define('NONCE_SALT',       '[C#<>KDNud`*Xiou-80Tu?+>;uk.$sQ++[S#6V!})dK{BFp_D-!m:V5I]gfGaHPH');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpWPP_';

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
