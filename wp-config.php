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
define( 'DB_NAME', 'db_wp_cs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UuLk;%*}[m1bt9d{q8Cya_*C%Z*k<B7a3:}O;-n_;;&6e58vteyG:Q[u7QU:DbF=' );
define( 'SECURE_AUTH_KEY',  'VOgdvq)wl+u{L>!,+i[8F${o=yLC<art/Tfm{P%Kq}C=JL&DyUI`u+Nmhhh0Q9 I' );
define( 'LOGGED_IN_KEY',    '{5Aod~*45q4JMgOrr(bXKSr66]k!5e$wxUp(f>I&{V~GfyjB`bzWX`O[e3&m?j|A' );
define( 'NONCE_KEY',        'oox}~M_Llf1H3ffT(0`EPX;g}1Bd3x[UA5sBo<-uL}VZ:[Pl:+@isOhwWlG|=&yt' );
define( 'AUTH_SALT',        '<&x3q?&;CilDo)bv#4Z>`*6sCO*.uiY[<]~:((NB<L_-@<6x$Anq|hac{mv(0h(S' );
define( 'SECURE_AUTH_SALT', '|`tV%=fKU,u]l^Qw0Jf9q-ex*abj<fW`=sH)&mx_AnrV](dr`1m!DU1Xxl-l-4:/' );
define( 'LOGGED_IN_SALT',   'wQI=q!z9~o^a]{mR3R?!4FQkT(/,=BKF3bIj7TeN#zmK{RpAX4F`x9vnp9`epNl<' );
define( 'NONCE_SALT',       '#SMDfc]|I.^rSx)qQfJDtNlW3=x~?gS-%UEn{Y&e,%u4?O46N8P6jbZEp{}oBbTg' );

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
