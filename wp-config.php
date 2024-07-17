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
define( 'DB_NAME', 'bahasajawa' );

/** Database username */
define( 'DB_USER', 'magang' );

/** Database password */
define( 'DB_PASSWORD', 'bismillah14' );

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
define( 'AUTH_KEY',         'G/O)z(r8@LLtlv1qL&OF $x<{R]s|h;$AFeBe*%qGAp:zKTYJ.n~6*ZKbxoXXZRM' );
define( 'SECURE_AUTH_KEY',  'W{Pjg:VtxEGo=wD!7q`K;IeYSa+Tm[PSW&q<<9m114=daCy>liMpApz!=2._Mu_a' );
define( 'LOGGED_IN_KEY',    'u#~aTm-ycgPqM81uifP12=%]u$cQDM>{j%-4v_Yqm5y!4*BKhjn}&Q[gD2zBd@7z' );
define( 'NONCE_KEY',        '&YiEFS*uaC}Yy{9dic=2a?VoK58x|0Kv=Jh_*O|b1v/P/2y{|RbZhgmhVY-eT#TX' );
define( 'AUTH_SALT',        'YP$vP>W}S*mWFfj V8_U?+]b#]K>_E_N(B!h[f%A{(CBEF@{1S3dDts/^# +tSbE' );
define( 'SECURE_AUTH_SALT', 'P^/`91d;@*:ar?^]Y{#A*av9V:76>hX1wM9s}B62~Kb J-ox!jYmJ{]S/Y146.JV' );
define( 'LOGGED_IN_SALT',   'f$7Y<(ZaBjN(p,E+-/2YkeMH+%,t=6<j:aI4H{|h..A!fXR*B|3)0d>9N&POY$a@' );
define( 'NONCE_SALT',       'V3^|v.4OC=f$NgS6XkoLc1VcYd8i>/lR(2LOyFtfTpY~U wce8DTa`dn`RGr;6}6' );

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
