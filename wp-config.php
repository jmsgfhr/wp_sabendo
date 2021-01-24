<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

define('FS_METHOD', 'direct');

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', "sabendo_mais" );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', "admin" );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', "admin" );

/** Nome do host do MySQL */
define( 'DB_HOST', "localhost" );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PDq,cI8}lfgDyIfn+!n{yE!4*sT~0>RFkyr9U>@gnD>F&3vFy7-5s^bbn)HtpXr8' );
define( 'SECURE_AUTH_KEY',  '$(CDq=*jvJ4PVJC>UKkJYpSBvqR>mQkax9;`C@3b2%P[ErlK$AB^TXmrt;%Ur-w?' );
define( 'LOGGED_IN_KEY',    '3i~YD7wDST4F2FcTHID2}<jFVFb^1r,.~q T0JI&??:Hjy29N)FZyNQ+M!kOUBQx' );
define( 'NONCE_KEY',        'H4c~sLp41z4eG$iwWqOyhy4K;@Rl0WIyGO||7=M]-~9G}_wydGWTd<IpPm qyCV%' );
define( 'AUTH_SALT',        '&=B_mH4C*xY0TjSPf]B&Vc=SNmx;8u[mRxrJv<mo2~}Q:kn:U.)SxEs=[JQQbL~f' );
define( 'SECURE_AUTH_SALT', '9K{QSZ~GzAsce<tm+,D~IGW2g9d[mMvp[8#Gw3/r@oRekL.Ie>qu50 e:6FzH$^-' );
define( 'LOGGED_IN_SALT',   'D4RmY+ {s&7RQL0IhIQP#2_5^9fVB,Ry=w%4<RvdA6j$+-Yb@Jd,F+ajf4l6Sk]+' );
define( 'NONCE_SALT',       'Dd`Qql@W4#RrsM$jD.U-~I%}n=vSGxM8u>L]QyU=8OR`F7/;#ozxCy^*CMnC4qd)' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
