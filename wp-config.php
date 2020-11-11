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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'projetos_labqi_site' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '24368' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'ishP(W[a03|o(}SC[=P)/KOmF&!ez81R,VnY AAA27tD{(JFqN7ua4_`b{{Or^qE' );
define( 'SECURE_AUTH_KEY',  'Y*P0w2uw)]9}~9zF{W#xG<vG~PtW(H~a-Lm.IQ;hhgUZ/?^0jWOLTNT&T.P}cyFk' );
define( 'LOGGED_IN_KEY',    '$&g B5E-j{>h2(-LzeC*T7*tWeb9!`Q =~mCQyPcz>%K8`,8ou!.=h So;%/Cs3x' );
define( 'NONCE_KEY',        'xhqdyt+-uXc&jGZ`@(eJGquo3/iT]^vl(&k/;.CSM{V~Mt;4hHIt*wZ^iTqz6e+M' );
define( 'AUTH_SALT',        'jh!.Q>dLX|0Z/3nR*:m6BU{W8cH c1E4M_PS0ws2n+=sN+Dq*PC~zmP(?awX$A6M' );
define( 'SECURE_AUTH_SALT', 'k]6:qwF_z#*C?#vSbaN# YaE7XL.~z=>6&uV[%^*RNqW=5f#c;>q,h}b-H$|2~$K' );
define( 'LOGGED_IN_SALT',   '{s@>bVQhZ<zU:$BAuup?za*LA|$gN?QMw43}x%Dw$[Mk>cOVa;B8dRoS/{;3C?Tr' );
define( 'NONCE_SALT',       'fonq1GS%s7tOGkp&Q=IGaRm@,+t-PTQ3Es;EUF).2NV5rai%3a|vcT$MGHJ/ry%H' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'lq_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
