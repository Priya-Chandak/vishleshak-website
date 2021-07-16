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
define( 'DB_NAME', 'vishleshak_website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'L([%tWC*<vS.Ji)z=5Vy5df;GX_2<U:@ED#Gv]rh70w E0L*X`)9i?|w`<(Xwzl ' );
define( 'SECURE_AUTH_KEY',  '_BLRZHFk~{m{AG*^$LR@s24wUEiRAYNtTe)VPxAHBn?bF!0/l2f0ynVXAnwt[VQ8' );
define( 'LOGGED_IN_KEY',    'eeT?(c~N+;bz3v/>h<DL,*Xf;WJ_V4R:f%H5;$`+0r4=vVB%>Qulp:oUbEQYtiua' );
define( 'NONCE_KEY',        'ftk<s#_a?FIW%Wd95eqVqN8M,$K,_tlcI9*NfvE`Nh=46 K&-+xe|4.r]{V(@><V' );
define( 'AUTH_SALT',        ';jr9>~e*rGl=5I1<%BeYh+WA6_YLyHxB$f^$^e(/rzKA=,bW}{s0Psr*39Z(Do>Q' );
define( 'SECURE_AUTH_SALT', 'zwjh8fDlOk/C%|LK7vp0D=wEO*ELtPK!V8<D8&r)BH%G M~_jmDU`z-XNu<8Oa13' );
define( 'LOGGED_IN_SALT',   'T/mQ$E(Ue7~4 ek^9Lmds2^%njwt}D`Dl~IkXl#m`nNVl>CztD%bB>2#Fwkso8:-' );
define( 'NONCE_SALT',       'uiC)w .%N{7Q6vb.vfYj|k~U#N:})gPv[0g20#ObRdySj7)-|Kg:ZMhvv!O4kHtB' );

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

define('FS_METHOD','direct');
