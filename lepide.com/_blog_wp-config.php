<?php

define( 'ITSEC_ENCRYPTION_KEY', 'ZTc1QmprKDhpayghN3FreXoyTkJoRDssfVBDfVV9XkhlaDg8IUQ6amtzSzY0ey8kKSp3V2g1dmVmSkBDLDU/YQ==' );

/** Enable W3 Total Cache */
define('WP_CACHE', false /* Modified by NitroPack */ ); // Added by W3 Total Cache

define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.

/** Enable W3 Total Cache */
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
//define('DB_NAME', 'lepidec_blog');
define('DB_NAME', 'lepidec_blogs');
/** MySQL database username */
//define('DB_USER', 'lepidec_blog');
define('DB_USER', 'lepidec_blogs');
/** MySQL database password */
//define('DB_PASSWORD', '_T$w_T;t18nB');
define('DB_PASSWORD', '9YR!4T,zkL0p');
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
define('AUTH_KEY',         'Ew{=a --0FM:xUyXGzlW%c28 plLv1#-2m2+tr/[7,Rj<$./y RlGKBZ0OjK+HdX');
define('SECURE_AUTH_KEY',  '@J77|0Y}dJ-jQ7SB+3(zGQ|&$C |x*1h{|`dzZVb[AS3(&|IhjB]0uv,!_h0|AYx');
define('LOGGED_IN_KEY',    '_``K$64yI)Walg=+.D=AB[|fyqrz(bWXaL@]8`b j=)um9^j2W--<]Y!nN7*JAtR');
define('NONCE_KEY',        '>t%}74eiGg0NnbW=!@+pYV-Pr+<LZ_}$N^%%|-AQ%Ugk.+~c!5ilK$_t-?`)R?EE');
define('AUTH_SALT',        'T$;]QUz#bf|=bn^iW$h`(rs)DQFtu%U;-?Dxhe7Sc_SunN,R`S@?7S_Hp4h,t&$l');
define('SECURE_AUTH_SALT', '(4{cknxYk5mo[c;xNZlJA6j;nE;{B|pY&bqR2%UI51NKEnh,2UPKIH!~s<02ua`_');
define('LOGGED_IN_SALT',   'QQ-~2/#qcLZvP%cOnyy5J;vv}$mIZg<a-C|JvcPQl=-L<:TP-JiX/^nij5K6:4pu');
define('NONCE_SALT',       'Qv%1+2?J,~|_pPk[-${Go2U!L0b~WCk-1BJ6vk8de7$CpGIaIJqzHY|^`&G :vrK');
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
define('WP_MEMORY_LIMIT', '128M');
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