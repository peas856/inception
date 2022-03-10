
<?php
/** The name of the database for WordPress */
define( 'DB_NAME', getenv("DB_NAME") );
define( 'DB_USER',  getenv("DB_USER"));
define( 'DB_PASSWORD', getenv("DB_PW") );
define( 'DB_HOST', getenv("DB") );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('WP_HOME','https://trhee.42.fr');



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aUt:)@i+a2;eR[BQ4P-c#i {86P-@K]{x:P?A2m3~?U7tUeRh|ry3-Fo9E[f#Aj}');
define('SECURE_AUTH_KEY',  '+M@+s+?db!c|WOxThx5h7VMhFqSuo1Jp9(EEi[4FKCJfxmx.Zjw79/w^}.yeivNh');
define('LOGGED_IN_KEY',    'YRvo2)!o!7E@w78|,M<`SzA^G[2+CPO&b*|_fM!2t[(bvug[+7D~4s]d|W|[-3lD');
define('NONCE_KEY',        '_Q1bnIh7b.[=]nG&wC.Gi:`pNd^&j+wXm)eK^G2?)yOFhwj1m/$uTRlMk[8X+n8y');
define('AUTH_SALT',        '-I](Zgf1B^1eo$rRQx0n_]z_N>t3X%AJ8A:Gec4MD?+=5vR+!fUNV>5A-%7lliV#');
define('SECURE_AUTH_SALT', 'tyL.r8{p26M]4Y --XJZ6!~+Cb4<6L!S}V&olu{d~o(+K[M%9cTM*QTj.,<^r@&|');
define('LOGGED_IN_SALT',   'Pk4f@mzX0B[wK_`Wf~.)jMvF7heL2$>-HQ|Bjo-oK/]r+PPK}-kaNk5&vj+db5z=');
define('NONCE_SALT',       'KuU|Di:ib[J)kMg!QvllTjsWvqo8{yz|L3L6h6u$[`<nyt?Yen3!6+^~mC|v|0Y+');

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );

if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';