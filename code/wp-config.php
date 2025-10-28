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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'miappdb' );

/** Database username */
define( 'DB_USER', 'miusuario' );

/** Database password */
define( 'DB_PASSWORD', 'mipass' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'tK_k1,Vu8v4u?-94}qbBTy&e>O?<1iVT5HdpR}nuD$(+L=`Gc;e[+IG>&07ysQ7n' );
define( 'SECURE_AUTH_KEY',  'WmQUcxt hdhJ,+hFlXq>XZTHN)l(4u/>7$xbcJ,#E~Byc,wy=c7D]^1]*ghKBpS(' );
define( 'LOGGED_IN_KEY',    'Qyg O5b_BV^-:Oa(-]aNw8(/M{4^9;N1KOgoIGk]flkZEP@E?#6kymP@LWC?h[Wm' );
define( 'NONCE_KEY',        'X5*)!OrEDWH oP9sA!uv`d3@H+!X^G(Ql#D$1%)lfj=h)*>,S~s:.[g6zLfz {]+' );
define( 'AUTH_SALT',        'KoqrA{^R<bp3{rs+mTgVXZ>@e/^IPack@G>AqVkWTLHXd!3a^AO 2Mh#JQxufBwn' );
define( 'SECURE_AUTH_SALT', 'q6#;AQzhNv(10NlWQGSjVt{VUr[1k,dha:Ye,~j8bPv^F!361);}vA>%LkC&/t^n' );
define( 'LOGGED_IN_SALT',   '5eSoC1trE:lF>*(|i`){~;6x([k:b=fSA&}>32Xx!>uQGCX]G6.AD[VbE=o&?)%I' );
define( 'NONCE_SALT',       'MUaWJXQH})}]OpxF|P/Heh`|%9pMy/]}L<e&m|-,%njv-:})9^Pkh8_HC`ThD 4}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
