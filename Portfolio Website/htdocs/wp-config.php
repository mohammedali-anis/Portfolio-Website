<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define( 'DB_NAME', 'epiz_27956302_w708' );

/** MySQL database username */
define( 'DB_USER', '27956302_1' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p523!62LS-' );

/** MySQL hostname */
define( 'DB_HOST', 'sql211.byetcluster.com' );

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
define( 'AUTH_KEY',         '5pzvx8v1kdlsmlx5by6yyknzpzipkbtckz9pl0ccmm7rb0xflf0mde7a4mn5uu9j' );
define( 'SECURE_AUTH_KEY',  'zhdj5mqrrmf27raziwoiuuqpje7qsbxb90y1ib1z49b1oh9rgf5u011caz02heqb' );
define( 'LOGGED_IN_KEY',    'wehm6uabezksbmqjfk3gvhswrpzfcx60zcj4lxyznoilczbkjzx33wwm0wcgopta' );
define( 'NONCE_KEY',        'xhtlqyg0xatfhfzrufjdzsrwqwhpdna85jebitgeeb3vobqhtd7jutm8qpcy0uqp' );
define( 'AUTH_SALT',        'pgquqqj7vvbha9een1twc1z1ltimb4ytjdrvnvjovnmg3szvxd3gpcbrpauyoa50' );
define( 'SECURE_AUTH_SALT', 'xmrbpuco1grgccsabyw7xwxy3ql3fkv76zqecldzacg1ajmynlvor78styoriudz' );
define( 'LOGGED_IN_SALT',   'uv77gq3xtnulsazvtivziuyaipaxpw5or2ycdldcv8l4egpp8irob3jljaudfe5q' );
define( 'NONCE_SALT',       'eas9fwuiww5ytrmsyhevzhc4zcwvvtb3q3lknjozlws2tem6n2hegyjfoasfjfy4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppa_';

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
