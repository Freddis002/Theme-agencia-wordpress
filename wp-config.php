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
define( 'DB_NAME', 'agencia' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'GIw:-X]#Z0L_dBEOPPEM+89-xg_J]ZG}1!=olcS/|`:u<|l<3.t65joEH(ryWM1m' );
define( 'SECURE_AUTH_KEY',  'dT&J=%DHhD_0c7y3h(8b)SW|DKw^yD,,@YNSqSq4>S.RC2^_ee>`G#PACHn3_>Dy' );
define( 'LOGGED_IN_KEY',    'T:`TrcpYh<!a#IsGs.%?5t<KUr<sZf`>%|mc-EkA_tF,*u1Z}LQY}Pk:Ck=&^x/d' );
define( 'NONCE_KEY',        ':SUh{H53E#+EzqU3#g$?ZOf-zM.Shwd!ttQRArP&AQdb&|qrY;9Y.d`[fOc{pa;X' );
define( 'AUTH_SALT',        'n;MHQ]lHZK-LifY^8fgxl^h[&^e))p !m9Q=(CbQ&G1n9T<1xFG%Y6vyZYY9QG/w' );
define( 'SECURE_AUTH_SALT', ')CwtB`%8:|3xl 4QAd(,( h/9W2$T{)6>5_GP+{h(!3Bn_YQADxn6?-Kit8=(y8u' );
define( 'LOGGED_IN_SALT',   'rr ,|~}UEt?m!,~qkU|$Er&uD<tubDCCv[6sE4;p$Hhwu$R>r28oy2_ew(ph!b+0' );
define( 'NONCE_SALT',       'uNT(&O>$}TNUg4]):L%dvct9j=jhug)?%$rj(q~ _N2=SZ5jwu0+l 83.yP0xQFy' );
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
