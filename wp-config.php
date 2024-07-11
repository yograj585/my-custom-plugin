<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q>[#=m;>-HZM@B0uKo|o1)z!dza5eHbaF`I-]Ju_GWJm7jcvyoU!;$m?(aQkCMCW' );
define( 'SECURE_AUTH_KEY',  'R{H@C.T5wl|itf{hxAMDJ*S,>!me6.-o}9znZ8IsT,d1hJc9PfT~l|<B6vpu*&ZN' );
define( 'LOGGED_IN_KEY',    'swJoxKtU%aBbHFT!P<9o[^?/d[bwV)4/v&E:)34qxlg<%}VKgjh?^!Gl(9(DTJ[N' );
define( 'NONCE_KEY',        '[7`>aBChsA2>M@4O)|$.hR]-Q{RVBKWm;Ij?9F1qvF(>9`%u)1]o?7*aWu:(ql,r' );
define( 'AUTH_SALT',        '`3jze6@DFJ:EC,+$=D&0b:&#AW^@ V7mmQdt(=#*.vyoD2.$bb+!;G|*tv=8hu q' );
define( 'SECURE_AUTH_SALT', 'k$``9D7(gT<7p}c:@DHn3*X5*fA-:!8mav2V!5/*:02I!`<9R8f(;i}AJ.5?9q_v' );
define( 'LOGGED_IN_SALT',   'uCv*xqKtetCc *Va1xKA-q|#~cQ^L*u&}_}D1^K<RRoMS q>D;o539PX- sKD, !' );
define( 'NONCE_SALT',       '0%^-M l`m#y1v[{*dqlicb@a?+$_YX&f7G{]y ;&*1BOt~~^~Xp9W*pO^F28N3is' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
