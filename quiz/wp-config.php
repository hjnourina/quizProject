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
define( 'DB_NAME', 'pJn6Z10luZ' );

/** MySQL database username */
define( 'DB_USER', 'pJn6Z10luZ' );

/** MySQL database password */
define( 'DB_PASSWORD', 'muEv6KoLho' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '4cKlo2_E,n!{fA4Zao_i3)pZQr[;HV+F^YY7RU=FJA9MX>cdkzDev4JK/<~Sn@_t' );
define( 'SECURE_AUTH_KEY',  '7&V z2p2&&n&&fAqgk=o0Aj=s]2sejnYAv`P 2So&t VVR]0WWn$v>Lx`|bxb1Rb' );
define( 'LOGGED_IN_KEY',    'Cl3NA,?bDor(:n) !WxCVUNWJ6WB=N::zOfzRglqXg4BL7Ew6*h!V:c_lr]HB3<,' );
define( 'NONCE_KEY',        'SOkxJF$6of [i9|$EP>vD*Id+[[*v~/29tW2U$WM-P(Q0^4A6k(9HEZ2dh3[yeh`' );
define( 'AUTH_SALT',        '33Lr>@%[%>DIZ.VUt&jq+tS~:opQ)$zsJ<4.tPB?;bqS5xYP41Q6PfcW$qRU<[=N' );
define( 'SECURE_AUTH_SALT', '3jQ5 5[u=SvH3YT.rE[k|kD%{N5Xsgan+955S}>zz_gEClfWtfS~;w!XM+5W`89j' );
define( 'LOGGED_IN_SALT',   'CXgR)f`!0(tLuI+5GTZ=J!rH7:^9YzR0yilqI?OpHh+ti7{=8UF>{mLRboa(n.4E' );
define( 'NONCE_SALT',       'CyoEw2`SD}nYW</< OmCC/A-{Y6KXL~Maz7gNF?HbCO+-ViK63P3kP!URWTw?Sdu' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
