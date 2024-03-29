<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\views_counter\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'count_views' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'TT!<3G/hD_;vk>6Oifa39cX &+USCoD#8&;Reh{UE!!tk%7m/k~7!(8!^[$9J@P ' );
define( 'SECURE_AUTH_KEY',  '5%wGL|&qE#q-<e1U;YLg71VJP#JvUKUE2ai[QarCy).nS)zS_Wa5mZH.1eOxDt`j' );
define( 'LOGGED_IN_KEY',    'g-;?d#Xc:g+i9rKT!I8Qb|R>b7dvY 2p{HGzg/f%s3EzxFD:,a5l1K~Ocyww0.*6' );
define( 'NONCE_KEY',        'tU[~f;_(vsdk9OJ#m%+lS7^,gdc5NFANvEf`CJT3NhD6z*B?iwmTMx?r)-nyo(^~' );
define( 'AUTH_SALT',        'z(Mz&S<wsN*gO;bMo<dkKdDbO7P#Jvm t5u=a1ZPip#mD|FWSyw>RG[cX 68A!l{' );
define( 'SECURE_AUTH_SALT', 'fflvxY|tS=^~O6&.DU:r_qvAreSrB`Wetd*ns/b3t_[5hJH[u(ua4/1BC$SHy*$8' );
define( 'LOGGED_IN_SALT',   'csz3/G@[xAY1wkD]zz_/Mv/[7li}(mFzTO+9Aj!XFJeE0_<}&GGNbL3]Ngk9qFHG' );
define( 'NONCE_SALT',       'R=OQlXh?<9t<k-wI8bYP`QwhGu>+.@}!C2GPmzm@(;Ulh3(ZgD11&v1z6g16@+/j' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
