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
define( 'DB_NAME', 'cloudfm' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BTjuauE0|(5sfIW`d=z&23bAD||$<KBJk2m6] IJ^RNncq>~spqyM#X]eTX)|eyR' );
define( 'SECURE_AUTH_KEY',  'j`=StRP/(kvvJNXG5P 2Rtodx:BwJ+RjGAiSrcOF*iD(?oV5t6jS3hA!3.(~JX.H' );
define( 'LOGGED_IN_KEY',    '4Jw25Gvwd=!mQLY~Heo]%szt[an k;ZlGR4LL9q|~jg&-qpeb*u!F=%G+o:jWmP%' );
define( 'NONCE_KEY',        'mvR@@nl+Lw.ITbjEe@bq_mH@!^TQa=jAZ>Y/l.-#%Hm1YnN2.^8/~Er~~sKOX@y%' );
define( 'AUTH_SALT',        'O{-Y>UV+w_) ycORZ3a|jDFV`:nvA< 9.;4d> $MP P,#S:1CCq:+90%vE^  VJc' );
define( 'SECURE_AUTH_SALT', 'Zhf-:r- XoE:{h!KEc2jA28@iJ}]NT{wO_)Ak]zKBY-d3@$wTOv7@4nM}Zb0)zYn' );
define( 'LOGGED_IN_SALT',   'HL3k)mKFw*1ibysRj*M|&>,mGU>>Os _! C3$%+]Z(P73E`;`rH$@@^;$Xb*~7TV' );
define( 'NONCE_SALT',       'sue+kr2U)3_j7!a=[;dS`FTY+^*ME`2,*+ugFnZNgh3?gGDrhTv4[ue2xH,cSjSD' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp987667_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
