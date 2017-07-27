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
define('DB_NAME', 'law');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '430587sl');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5xu@,oC+l&H)_OEGbvRyA.IL<im-}O 1NhBr (V{z#{+O?|nF#I]&@$-f:^7,0=@');
define('SECURE_AUTH_KEY',  '@RR?@84:2GT~4y<<uonuH>b]kbn7F.{].qeK24,GXmm.+UWb __X)~`K@lFJimzZ');
define('LOGGED_IN_KEY',    'i^){vcZ^gOHPBlE8{M/1Kk/+U]|UX7J(1~QwZfDsBp&x1 Z,nk6z5s-#3YxX^UHc');
define('NONCE_KEY',        'CyqRM}jUBhkSm=^/Ej.bF8FNFw!O%L,9H$=~!#u*.E`RfY%/@`}(y5w}I{8J=XYQ');
define('AUTH_SALT',        '^;;KWyKYK]VE)u;@w5De8%|<(0fjLW:sb)B@}[hS9K <KBr{<:Au@1{rnV{mor<^');
define('SECURE_AUTH_SALT', '8q{wc^>9(,|L@JO9<,x(M$AjJ%dVp p)9h.fs&:|oo;!HhnZ#IUY8xrnu{ylkWm@');
define('LOGGED_IN_SALT',   'VJw5UxV$_-{^x=}il?N6nrWaEC08Fim8Iqe%HuM&)1:-eqq#%f.}v1t-)|rslGGk');
define('NONCE_SALT',       '-J-qo&[VTSm}<LC>iWMooR;dVYF-Su4Z[6{CjO/}Dc093_,qbXU6+_<h@<m]o-A}');

/**#@-*/
define('FS_METHOD', 'direct');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
