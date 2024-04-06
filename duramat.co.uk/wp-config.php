<?php
define( 'SBI_ENCRYPTION_KEY', 'NxTbL2cenQI3lSqq455)P^38@PpLhLOy&&bCEdJOL)%^bk&uWcuM&hgQyp@$ZDa*' );

define( 'SBI_ENCRYPTION_SALT', 'O&qjQbtZnGX)HkbpyXA@WED(d&DdHzu1f76Ai)HiEuGIJouczIYerjhgZiyC!bMt' );





define( 'WP_CACHE', false ); // Added by WP Rocket

//
 // Added by WP Rocket
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
// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "uPD_duramat_co_uk" );
/** MySQL database username */
define( 'DB_USER', "uPD_duramat_co_uk" );
/** MySQL database password */
define( 'DB_PASSWORD', "bMMGBZulnLygayLiMnMJuSfAZ" );
/** MySQL hostname */
define( 'DB_HOST', "localhost" );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3QgCMuy}A=[d5=iM<6$RH&/mJ`+If`b+u{^B?{9C<avzz+eGx=SCJ /[Wd5?lE%M');
define('SECURE_AUTH_KEY',  '3rV$avcS{>ATOoW?^U0j,w!.Je/y,i z_^&{@!)-cI`nEjcD9uHy* ` Mgb-m1=}');
define('LOGGED_IN_KEY',    'z(?=B?>KU2z<Fn$?>OWY;Sx`sF{%!8^$gXt?LBL_|qtCwC!|3zo1EqGwmXBGhOO-');
define('NONCE_KEY',        'R<<q*uz_na0 6}s0I`d+EKnE`89t+9x/IHh|0aVj?)[)fdx-OY?06]+bqFq_3+&#');
define('AUTH_SALT',        ',i*V$<MmQ?-COJc7fu^0J_E:)&?6n:=M&-7U>95@.pX>4uC:3v.#(ruwLR33_HoR');
define('SECURE_AUTH_SALT', 'kIU>G5d IIU[P3#u)9}d%(D60v_tl|J+2_e8#YCNx2JbP-E&IeIh: )#QOw>D-gd');
define('LOGGED_IN_SALT',   '$D%6-%W2A@iz~Wl|)nSK:86IR4|bWVi[Cnhl+lGEamBj#bGwdd10o06E2$swv;}<');
define('NONCE_SALT',       'J%IVB4~Qbq_ E +o+BiltD#3kNl=i=.|9w~0D||Qj @ebvTn^u<S}SmV@M+m-hSU');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dur_';
/** Trinitech custom settings */
 /* Blog Address and Site Address - Improve performance */
 define( 'WP_HOME', 'https://duramat.co.uk' );
 define( 'WP_SITEURL', 'https://duramat.co.uk' );
 /* Relocate the wp-content directory */
 define( 'WP_CONTENT_DIR', '/var/www/duramat.co.uk/htdocs/content' );
 define( 'WP_CONTENT_URL', 'https://duramat.co.uk/content' );
 /* Relocate the plugins directory */
 define( 'WP_PLUGIN_DIR', '/var/www/duramat.co.uk/htdocs/content/add-ons' );
 define( 'WP_PLUGIN_URL', 'https://duramat.co.uk/content/add-ons' );
 define( 'PLUGINDIR', dirname(__FILE__) . '/content/add-ons' );
 /* Create an additional theme directory */
 /* register_theme_directory( dirname( __FILE__ ) . '/themes-dev' );*/
 /* Relocate the uploads directory */
 define( 'UPLOADS', 'media' );
 /* Relocate mu-plugins (Must-use) Plugins directory */
 define( 'WPMU_PLUGIN_DIR', '/var/www/duramat.co.uk/htdocs/content/builtin' );
 define( 'WPMU_PLUGIN_URL', 'https://duramat.co.uk/content/builtin' );
 /* Compression */
 define( 'COMPRESS_CSS',        true );
 define( 'COMPRESS_SCRIPTS',    true );
 define( 'CONCATENATE_SCRIPTS', true );
 define( 'ENFORCE_GZIP',        true );
 /* UpdraftPlus tuning*/
 define('UPDRAFTPLUS_MYSQLDUMP_EXECUTABLE', '/usr/local/bin/mysqldump');
 /* Enable Debug and logging to the /wp-content/debug.log file */
 /*define( 'WP_DEBUG', false );
 if (WP_DEBUG) {
     define( 'WP_DEBUG_LOG', true );
     define( 'WP_DEBUG_DISPLAY', true );
     @ini_set( 'display_errors', 0 );
 }*/
 define( 'WP_DEBUG', false );
 define( 'WP_DEBUG_DISPLAY', false );
 define( 'WP_DEBUG_LOG', false );
 /* Disable the Plugin and Theme Editor */
 define( 'DISALLOW_FILE_EDIT', true );
 /* Disable wordpress cronjob */
 /*define( 'DISABLE_WP_CRON', true );*/
 /*  Increasing memory allocated to PHP
  *  Increase PHP Memory to 96MB for front-end and 512MB for back-end */
/* define( 'WP_MEMORY_LIMIT', '320M' );*/
define( 'WP_MEMORY_LIMIT', '10048M' );
define( 'WP_MAX_MEMORY_LIMIT', '10048M' );
 /* Change user permissions for roles created by other plugins */
 define( 'WP_ACCESS_ADVANCED', true );
 /* Save queries for analysis */
 define( 'SAVEQUERIES', true );
 /* Automatic Database Optimizing */
 define( 'WP_ALLOW_REPAIR', false );
 /* Disable WordPress Auto Updates */
 define( 'AUTOMATIC_UPDATER_DISABLED', true );
 /* Cleanup Image Edits */
 define( 'IMAGE_EDIT_OVERWRITE', true );
 /* Limit the number of saved revisions */
 define( 'WP_POST_REVISIONS', 3 );
 /* Empty Trash after 3 years*/
 define( 'EMPTY_TRASH_DAYS', 1095 );
 /* AWS Access Keys */
 define( 'WPOSES_AWS_ACCESS_KEY_ID', 'AKIAITVP2PO3THPBN7VA' );
 define( 'WPOSES_AWS_SECRET_ACCESS_KEY', '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' );
 
/** Customization END */
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname(__FILE__) . '/' );
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';