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
define('DB_NAME', 'merrifields_2018');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'flydux');

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
define('AUTH_KEY',         '`g8F+[Tw*SBGJNaDsJOJj]6|2no$vet~OXC?=1,0f0]<3F[pL4gO%Rpgm8G.~[O|');
define('SECURE_AUTH_KEY',  '*^.DTf?)]xi_~s#A:{6o3.YcW@b+mh rDGyIrgU~U<LGE!g|o21U*m]%Oll,!DW1');
define('LOGGED_IN_KEY',    'Ng$EtEfWa:pO=F_zgesG$.W)kqYkl>wBH[E@yS;~+4ORtr?N<_|&MP3v=U6-}0:#');
define('NONCE_KEY',        'BYogRtu(Nyqba`&_7k3X,:&EAT^x2tY#)$Iod{>F^e61luT{2l$4Zg/JevRubhby');
define('AUTH_SALT',        '?5hh7.__%ZoDr&h&+FSN$:tuElJo%:wl.zsX9U=-NT3]]B#b4QzAQ]r.P!sBCbH8');
define('SECURE_AUTH_SALT', '<4b?K$(QZG<M^@{O.bGd}6u!~4tC!0>^xuKShj ;j<G6tG1qF[~Uo|<1pm*QHFo(');
define('LOGGED_IN_SALT',   'Z;HI* w@n{z.P^R(|j>,u_;_WtoxJ[P!P}wL-&fMNV #|EporjYzO:UQNW3i/P]&');
define('NONCE_SALT',       'W3,y<Wu@^6i>H3hh4mC1lRQ%lih7OE^t!26iaX&PwZm5ULo5R,AzLbN`522r-1RL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'merrifields_';

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
