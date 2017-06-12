<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'coop');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6($Mbg{q {4^Ec]cK`:(.;Lb*l>;Y|a?&$JZ$o;;yn<mB67>=V{x>|}V5#@)hNZ8');
define('SECURE_AUTH_KEY',  'A<~wni9x&D9Cw/RE;;5BQPYF7c|j*eI1XOw0 ~f,qMhY: W@rR*G{Xnph x)YGQV');
define('LOGGED_IN_KEY',    'fUClF7DI2%M2m:.g18mHA98@3xt/Rp80S >UDN7}=~/`G=ee3Lpf_1Tg]%[+{/+x');
define('NONCE_KEY',        '2X=;1$7&0rZMSVcq^==_(^}y]V~rpRdL|:`tzxZufApity/|p,W2#*EHxRG$@)dU');
define('AUTH_SALT',        'g9f7)P7bXQ+?u(4G}3Vl#!a@|X6$z-h|uu$0FxNr$ovfBDWBJ<v>!sq&W6)HdR,f');
define('SECURE_AUTH_SALT', 'inWV:_BS[ZC!xyVnif9_%gm{V`<;2t+!FD^xz?8ntDJ*A3T@xQwFEyEG{.@BmLC/');
define('LOGGED_IN_SALT',   'Mz0jb5}^.-Y/e#M#^Iq~NN4IE;uW^UX.zy0Q6l<$R]Av%SafUWg7qLX?N!Rdsgq%');
define('NONCE_SALT',       '_fapV(=X9Qek<|^$w!BXXrf%0xXgqS<0I%NKS@,0BpA1W5_.GS$~9c^rIv`96$r!');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');