<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'testwordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'fberanger' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Austr@l1e76!' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'w>ZWg^$5tmz?6![24+Il?wqxu_H=o2,:c:=3B^0g_<HpN?W4ryzS}8m),V(AEC$`' );
define( 'SECURE_AUTH_KEY',  '%}wE6E4 s{H$-h#ujySJA G7+bW6GH4(?WCHP+W{bpjNL=B*pYd~NUg(EnJZi9v(' );
define( 'LOGGED_IN_KEY',    '&9b1i{2;z)2f3-UR$-3OH9ucJihH8rPWw3@b(a99G:O3&,SrB2(q=NsZ=SY6Bvia' );
define( 'NONCE_KEY',        ',{zZt&8d{ds<opsyv~/pt?p^g-8^cs ry@aIs^Y?7vnV1H|R`=$iw%J=l2y3/>u(' );
define( 'AUTH_SALT',        '<ki {5ui,zvtf;!8D94WP[,@:u&;8[N9ynBPA2uPO&z}hsf@DWr/],-;`$iijt6Y' );
define( 'SECURE_AUTH_SALT', 'OuW-vuOcDK$:OMyD|1-Q, NL**tr_~1qn]/lA 0=oObFw9x?T`1|5zdf<deg?Tzy' );
define( 'LOGGED_IN_SALT',   'em0rP|Aw//w*wN4wHl~^Ieg4LD`OZQ{k~THd1KtA}CW)<xPoe j)&k{R1{NX-9RO' );
define( 'NONCE_SALT',       'Y.%&4+Lc@Rb}/XNatZ2@I!s*pE2kC:5C0UKpKpIJIRA@R[ZU)egiVMsn42T?M:T]' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
