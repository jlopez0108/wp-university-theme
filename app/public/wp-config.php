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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'bkEoCdqrdCku0sGYF5X3ssvdGnxLHb2IuUc4Xf6fEJmT8vqdZb38JoqOGJyos3H6D3mhXJFYUtVPR6gxMUGiYQ==');
define('SECURE_AUTH_KEY',  'aBLEmBt9T5WNrw0+yTWvkf2883EoOYcwn2xtY6dxm/zW63Ct+/ojL8moZMn7TqGPrXYTkMuA2Y2SShOuia1rEg==');
define('LOGGED_IN_KEY',    '/o0S9ypDen07wF7rZD3cLLuhqdl9fHRs8chnIy6MxvJzL9t6KFITzaya4TRLRnG0TR89xHLFowu9DqI19pnFyw==');
define('NONCE_KEY',        '9ImmkTamoyZ/aB0ijSSoUxHymdZRqA/+Z8HBBit/lhl5UAPhoHnbLnSgAPEcNf/LS+1Vk2kvhLzDmJ1Zyui5yw==');
define('AUTH_SALT',        'FTh7xrZXRAq3aGCBo9dGomiswBsJc43WF08LE6Aw9ZawEetmX+demBdTgLrJVq//3u4RBkrvvMg4K4zKluzwNw==');
define('SECURE_AUTH_SALT', 'grfIDWlakfTMzjm7LnCg3Rst3hosDFIwJSm0sX9qgLsmbyijXQsV7u+7gyrpzU51JzYGVHoMRW6nawV5jbqPxQ==');
define('LOGGED_IN_SALT',   'eSI0xzMDLVyAjdHyklFTZ3IrExnpULLXUETJGKFq92MQqAahBlkXajovgVMBKtXl0secYi5XV401tE2TXU9stw==');
define('NONCE_SALT',       '76Pfbdr3npFLIsT2rxJBqg4CuCsHUCI3qnFotaZ43BWcVGCVNIAX/wVRwgfCMANj/wWxQF8bzt05X+6veOtVjQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
