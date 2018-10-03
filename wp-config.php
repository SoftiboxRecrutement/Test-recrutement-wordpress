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
define('DB_NAME', 'test-recrutement-wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'ddroot');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'gx$cUY8g~640&~>G}!;;&(-+h<r5igW}{wTg*$  ey:p(Mb wt;R;;>:|h~E4JYO');
define('SECURE_AUTH_KEY',  ' :}LE2u:N6pKi`_DOr3a>y&h Bu6nMH>$jre@<#[qu`lLj|PC1dS&OrjRk4 YIW1');
define('LOGGED_IN_KEY',    'ofoRagP{q*EB?P3Tgm66[{Kyl6:5vY#G_B3> >aL+bk^,Z|y92L;h D{h-.lcG6#');
define('NONCE_KEY',        'g]sI0M$=wI=7tA-Nsr2%Daj2`_mF1^@3}}W)lJ6XCjzFv5)zg]/+-QqR@aj?M(o#');
define('AUTH_SALT',        '4}JU~GILrjpx$(81lnNEa%}bmH=(mxGzz5w?=16G)gw]$Odx?HrQ:EDPt.Z/P.F ');
define('SECURE_AUTH_SALT', 'lBz?x*p!f*u,Z&R22@)V_<8.NYT@`e<APj?Q+?Zl;+87zY/`LylSKAjd)ck9m>83');
define('LOGGED_IN_SALT',   'U}Rt=XU/*][ x.ieF=T.?vbUu[>0iV5x8tg6&.+a5V5]ij_%9`.&!>{4(Ma.{{}u');
define('NONCE_SALT',       'H5MwaWHM1.o?yY{Ffdm4TGccqTEVgG>`>]Oj];-md|XNdr4mO9w~+KR6R4Um9)Gg');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'rtw_';

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