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
define( 'DB_NAME', 'HM01' );

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
define( 'AUTH_KEY',         '6bRCb$]Tjx[X)4&/wQ&]CN n*f=9s0~hCO0Y*@nN>%n(_?Tb<BAYc>.CeaGw{1,7' );
define( 'SECURE_AUTH_KEY',  'VD0>2THYYWiZ@-8Pbh%~E`PzZbVH5##M#_{aS6]J9s)VtcX;ls2e?4-NgU|%sUQ$' );
define( 'LOGGED_IN_KEY',    'ed,^oZC9^ceD6>U~?kJ[Repfl&EHN2FfS` JT5dFK({wxGC3I}!Z1-|Q_e{r U!(' );
define( 'NONCE_KEY',        'I]R[;MG?#f$8zF~QJrB6kZf4;M+v4Wdcb| TA18P{U%skGUBZZk1/HU;F^HD2VZd' );
define( 'AUTH_SALT',        'vZYIQiTTIDxAVue:F&:x9/;HtrdFi:WT[OeXW?J.xxY<&QrrHq.j&Y6O|z#~13jk' );
define( 'SECURE_AUTH_SALT', '%KU8X%HpU(/x`N)A[b}P3+ )_=2aLo2Y]2R|4bsg*k{*V6Yl2M7OVU{U8L2CKge&' );
define( 'LOGGED_IN_SALT',   '`V3!b.Y4en/4l>iVU[HQx*z!i{Kbno& DFXcS|MP2a6+_C D7E}Iva&beZr<Mw6L' );
define( 'NONCE_SALT',       '*n]1IUC)PJ>:R%K>W{K!hJ1&n@r&2b!AV G 1:WSEFQ$Cp<Mu}WY+~D?FkP]IW=F' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hm_';

define('WP_POST_REVISIONS', 3);

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
