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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_portfolio' );

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
define( 'AUTH_KEY',         ':*#{d#k{3huRFJ3^futxdV, QI/@x+o2T2QE0PNG}PsZOJYv!~%@|7`^|!sK~.o8' );
define( 'SECURE_AUTH_KEY',  'qV[$x sxtS@:|zWV)HktB$el0  Ti(,`IyP*~8->};J>zDe.M w!niQM<vVW@v<3' );
define( 'LOGGED_IN_KEY',    'i+5g?L}*.~I`sov9|YL:TFE|~9zpoE3 W&hYqJ*&aU@mZ(Q9wV Blc!E4#IBfYjc' );
define( 'NONCE_KEY',        '7l/c?uk0jNhz~g?^Ja5db#MNkOc-=lJ)gc$gh4PS(V-xbEQxr#dPF`e^eES-a^)S' );
define( 'AUTH_SALT',        'eHQKr%wa^ r9;WIgEbQ]tCxkPkNz=7ec^W7jO[)wYF7eF{}!A@zp]`&^.r?.ohR<' );
define( 'SECURE_AUTH_SALT', 'Zxv8d$7,g;q8;v;W?3oKplf-{GfayFUI)H[c4s0e4g!9Yoi;.G|([yoo(Wr,QrX4' );
define( 'LOGGED_IN_SALT',   'GbnM!9>skY_6z#g},!^Jn9qr#;1=8$6q~V]Xa*<NJ:X=4@gi6EU]dT)!rP/||2{U' );
define( 'NONCE_SALT',       '_[$HeZRrV47F9)$~ws*^BwE>6uvYOm d+t*xp3&SF:pBI:1rcH9c-{e9eI{F0db%' );

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
