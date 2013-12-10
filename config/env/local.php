<?php
define('WP_HOME', 'http://localhost:8888/ordbild/public');
define('WP_SITEURL', WP_HOME . '/site/');
define('WP_CONTENT_DIR', APP_ROOT . '/public/content');
define('WP_CONTENT_URL', WP_HOME . '/content');

define('WP_DEBUG', true);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ordbild');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '3]=W3ST8]AO9+l-?;Si=t$|hxc]D`fd(si{kA-{@:h0T+,4|.5P|%0:K-s1$Qi[Q');
define('SECURE_AUTH_KEY',  '^iX/+v~&#wQK{9&ZlfB.AfQhnL*AQ#g48:@TarWRmx)y8B4=@.9}P|s{p7K:!yP6');
define('LOGGED_IN_KEY',    'G&DxPg1?xA|%TCIr1rcmM{-;cdGfVuwjpx4YV3c?x0D>@xrP`[Z|4eZ#e->|M2:l');
define('NONCE_KEY',        'V;k6Bf&8u0Iblj|Z62#o8iUsUmUdtfo13Fq&9n Tn,tC+wc;5K$/E2JGN?#S~;J?');
define('AUTH_SALT',        'sfU=H*.i{o:G&3(^Wk0y.!KwyJ~ {_]iCukUrNUyT_;{!an%n*S,][ko}+!0qphw');
define('SECURE_AUTH_SALT', '9:L<`yTLYd]7tl!P6+}P&YdYPJ9bNQW)WeL%aq-]j}q*M#) |L+&^o1/;#%#Z+D9');
define('LOGGED_IN_SALT',   '>~mpqf,ekf-N`/8;) mGemTrMD(+1;=T`x~_Byk4Cgs*5.Ts@#BQ%YHVyc&}0H^P');
define('NONCE_SALT',       '#2(4e.i]KaQn84B|@q[8R(>19zLZZT(69.x.AUqK32_{@kGi4rJYq&HC4_~|-9@k');

/**#@-*/