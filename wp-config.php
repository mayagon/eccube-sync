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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp1013164' );

/** MySQL database username */
define( 'DB_USER', 'wpuser12511' );

/** MySQL database password */
define( 'DB_PASSWORD', 'J3ufQxCenTsEUpt' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '$~GP~1mJ^`*T9M@)=_j;Wu*M+hM)Q8sKYQdS8]rz8q2x#(JtJK*k&->-oIU@Z?f8' );
define( 'SECURE_AUTH_KEY',  'D 2VLiTN-S,LSpY}2vbe842`Ni%7+o :b;bRmN2N5,[cHm`wPed}&hLTZ+-&]]r|' );
define( 'LOGGED_IN_KEY',    '3Uo<b^P[wwC<EttXU/RB,T2C1s[VSZ6_eGwizOc1VVmP}Ug7?!2P}/%W6#7?88}e' );
define( 'NONCE_KEY',        'X6/]7/9YMK8<ZiCjk0w*ISoiMI-6$z*l9r6 d6&N2hW49/|XXL|{QOPNjpQOz09/' );
define( 'AUTH_SALT',        '6N>km*@(){D?dR!DxDPLcwMoz/kv|Y?Toxn@fW(IILZtqJmSo0%tagkwh;fn3$W!' );
define( 'SECURE_AUTH_SALT', '<x{MHV#w#^34x--^:LJ}S+Co%igjPf>d%&/CtU`eMy/x7]~y*=WkccJL0_1Qr<#5' );
define( 'LOGGED_IN_SALT',   'QmIlZ3#uRJqbMn(R[PbwU}oDX>+VLuF4@,Gr8~^PCvHPCo}&^QQ7X{)sI.+#6tK$' );
define( 'NONCE_SALT',       't!^r%lu9*pmmH<PH$1p^zs]mm<@g_Y`3nYG~+]QICojMfxo5LSiKq,2P4q[Jg0cq' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'FORCE_SSL_ADMIN', false );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
