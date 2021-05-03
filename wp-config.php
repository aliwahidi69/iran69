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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mohammad' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '`#bR*2GWCL/COxN (6f;b-JXh=T+c&+kh+81wHeu)mbv?7rD`nBnW3a+Q+fKW<dY');
define('SECURE_AUTH_KEY',  '46X%] J`JSw~i+Zk[u&X!1_GP1E|0DQ9f&LLftWb(Z/H3lh@qE]|A7hW>5lz|N3S');
define('LOGGED_IN_KEY',    'mV;B~nq%%(!`9;}+|?i_ZFh|OS!CwT|ftL!}<{|X8./?vk;z1xWX|?c-9!fHsFE-');
define('NONCE_KEY',        '7$VWP+M~{2CCW.$lM2cuNw69-!UP5~tKm)3BOCxi gf_K1*M,J<7}Aa74o_e+|-Q');
define('AUTH_SALT',        'Flgz#1:L/7k&-U3_eSY}7C+Sw>7|u0trJOs*/MQnp o3<sr19O)%1C4)q|Pt)&T+');
define('SECURE_AUTH_SALT', 'm|Qn7RCb4Qe}Y$?m_N-plr2|FB)ErDPNjSK8|XjMct@JV%^V %kC`Z_zx^+g$||`');
define('LOGGED_IN_SALT',   ')D<GE;+;w)1PXY!tK:&$5PU1FURttIt4Ge:W$GD9dP%Q+#[72%k 95pvfY~QN:K>');
define('NONCE_SALT',       ')/p;j`#,cATV#]l~GI)cF62b+VP<6VTTAMf)pN}(Km.aDnB:0{9[.+%3I6U+-3=/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fddb_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
