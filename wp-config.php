<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'les-3-scenes' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
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
define( 'AUTH_KEY',         '=:X:XQs}wzH?m.VivF}aegfja~l}VPc0vf=U6dFdxmJXjftL!tVxE<By&Z9PB*bq' );
define( 'SECURE_AUTH_KEY',  'F^m^#mFX$Jg0aF8{7n7eKZgP7(7P8{}iOLiR)RBNYT{9xi-%U-C(nY]=;L%}}R1g' );
define( 'LOGGED_IN_KEY',    '~NchX{^!kP%hVZ.Qq.Qz6O49~A.I/xcV k%}U;+i`b8$LO3Ci11~&.]&#++z)YOg' );
define( 'NONCE_KEY',        'bqhJ(d@[8]U`~y46SDpuodfXb +N^y60;[r/Of;9N +|(k=]Ozn{5F8 ~td[OVhI' );
define( 'AUTH_SALT',        'OrVi))Xf#(s8!wqw-VSR:~oC~8JNu] Ag[_f1pFMDwDvZ_oYU!$p:vZOj6v{,sN`' );
define( 'SECURE_AUTH_SALT', 'zy?@6{{z8hPJU>q2|Lu=OoTsHu~)J~1G=T:Kqvn]EXz+L$p- )k]Z&W8):g^$R,-' );
define( 'LOGGED_IN_SALT',   '%[f=~blh5`{1Bx:DE6qkC&e8$tluSo0X3.7Zcm#ByqT[DUP007@Xwxa,h0Y*+)/P' );
define( 'NONCE_SALT',       '=.[77J>qigkKW7[N]@KY5rft]+B+ Zr[a2}@<R;DR J9o`4D0dE-kN!wI,*|<}Mb' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
