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
define('DB_NAME', 'my_website');

/** MySQL database username */
define('DB_USER', 'my_website');

/** MySQL database password */
define('DB_PASSWORD', 'ijLIcT97UcwbohxW');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


/** Dynamically set WP_SITEURL based on $_SERVER['HTTP_HOST'] * */
//define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/my-website');
define('WP_SITEURL', 'http://localhost:8080/my-website');


/** Dynamically set WP_HOME based on $_SERVER['HTTP_HOST'] * */
//define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/my-website');
define('WP_HOME', 'http://localhost:8080/my-website');


/* * #@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ')H7oxIH#~JfCHV<)TgBkXR<-~$(p03I]GU?wUnH7h;YoCHv^$EP)(H9EV*MC]28+');
define('SECURE_AUTH_KEY', 'R?yZ!(Er{1o7dB0@/8k1yOq ov=%6CN]f+A8%aR<>?b`q#eJL4LnTP*I8W<eztO>');
define('LOGGED_IN_KEY', '>m-HYr5,}~GSv5);1BB&;qkb% I0d86kUs 4soU&}cx`Nl9<u:x-d%QboO_?MNW1');
define('NONCE_KEY', '{/{)gx&#-w:aYtH&?#Z>R8l!,K3=m$8::R>fUpEZ?5(.<b,!V!j6#H<HO]U(Mj(%');
define('AUTH_SALT', '>RU=ojo0)-1VSU9<e&6A#uhX41 lAp~Ld_o&sNc>Hif1aVx QFpXRWxXl^+<fjaO');
define('SECURE_AUTH_SALT', 'z1#MuII,Vpu5nl9CoTEbkreK8b^9!)po4Tyzr1(Gvw?Je@_FJ9WWQ2`uC@YXe{?C');
define('LOGGED_IN_SALT', ',9Pk27K@h$tzdqYYoF)IwdX=70b)_v*eh-3rr26Yxfj7vJWIfBKuQ@6lVB3+{tHJ');
define('NONCE_SALT', 'W~N~(8mf2;N@_+k|;R0hBs$Zw8S.Kt;_W,Dp%gtUqxFr!T,aJ{$-xklnb>uSe=}#');

/* * #@- */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vup_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');



