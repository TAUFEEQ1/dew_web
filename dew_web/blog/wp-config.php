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
define( 'DB_NAME', 'wp_dew' );

/** MySQL database username */
define( 'DB_USER', 'dew' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lithium778' );

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
define( 'AUTH_KEY',         '*smi*6I8&|!DW4$}cnk`mRg2gnUIpJR4-D&i9@ Lu33c%Ot`{u#k9jU,d;/1GIW~' );
define( 'SECURE_AUTH_KEY',  '+vQ7h6.V8Tlq%1HuO<,~=X;J~4buj:nxk[wU=e.D/)UsD/&U8@K6ifGP20cc[f_5' );
define( 'LOGGED_IN_KEY',    'z+<tqrqhuddxIYO}nLzK|`@YHxR/>v:02Njt*G0+S&svul>PPz<g1qSmvJA=H!%y' );
define( 'NONCE_KEY',        '|f{XCSCW_cK)<@RlO_~JB00fdS+l2o62DzXi5>kj (r0EYGf>K/l9q@OB?SbtYx9' );
define( 'AUTH_SALT',        'y0)u(YidO>d,a}G4O#]90=xeEc=#zOE>Q$-;]BG,_69CI2=tL*38Q*@M:zee+I:)' );
define( 'SECURE_AUTH_SALT', 'd)b(+)9uHj*wy<TDy^P-z;`qIeJY{(ccE(Ckc[pDY%Rb!W&-Q]nw%i&.]Hql>4 5' );
define( 'LOGGED_IN_SALT',   'ecs`e>.(ua{;6<Osd[?(stlDM1Mf64;5FY0xnu-zX-w~oKQEQoXRUw26-i?PA}X2' );
define( 'NONCE_SALT',       'C1H:l0BaoXG/i~(ZI7 %VzD1A#`>wH7,AfIDNF<MU%Tuw8 +a(5w7`e^(/l8EYG=' );

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
