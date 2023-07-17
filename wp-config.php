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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{_t@b}{cxn~E e;SMgup4l:K_$c,[_E]ei~`:xDilt% f&xG+TB$?t4G1oGYi7S1' );
define( 'SECURE_AUTH_KEY',  'cdKO19vA*N{Aka*M?;Uj!+hRj5OAH)I<6!/1~=4Cgo&SF|=Y]t/+nuL{[.W>]!`#' );
define( 'LOGGED_IN_KEY',    'RY_kwZ>1@@.5n#<MnaO?LsLuYj4g%[hW$+/=>9.oa:whGoIO;8kR.s:TgJOll*N#' );
define( 'NONCE_KEY',        '*ha|!hq^;74a=d[<{D(n@JSdhdz^TB5$dmw<A7)<FcNZM:[u@Aw.kVdxbVRi  2j' );
define( 'AUTH_SALT',        '$*a`QkMO?VUd02[eNra :.jbK1%f&k]yA.D_v#x8Xai]@?n!&HN1tb<e5Gqf9Fy$' );
define( 'SECURE_AUTH_SALT', ')|pMnuAmvoxx$v<n4x_xA`:S<i@[pF9s 94]U< zs{v2{J$(8y};._E[F5dY0:(F' );
define( 'LOGGED_IN_SALT',   'aYB9tI: @UVTr{X#joWf$:2E^6%TG1PKR~_/kaD$O./y`i$qN_pko,]Bstbm[sLp' );
define( 'NONCE_SALT',       'f~UNcMrKu4_>X+,sWtPm ga,]?-Kh:9*4TXD&i@{x<eBQCWl5tiH &^L](F i#1n' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
