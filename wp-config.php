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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'e05oFyw$Jvb2[6aYMiR5gL<vm0g}>Y0;x3QL,stG![HqL[d;w2-hE<qY<BKBefN@' );
define( 'SECURE_AUTH_KEY',  'P]vyfJ@9?.)bK|:,;Eo_.>>mkR~qpQZAOUx}6PDc5-_L.;|@/)b#]x,#oGI[=*ap' );
define( 'LOGGED_IN_KEY',    '-J L^M 5&2UgXG73Mcb)M+f:ZQC;C|%!l/JrR%GL0N#EI<gMVy[UAsLstS}T gNx' );
define( 'NONCE_KEY',        'J=PM3P%(-TPJY9.MpL_)Y<;SwJn/Velf~F+R9qZg@bp/+NON_?Gw^3!8KJ`^MV}l' );
define( 'AUTH_SALT',        'nZih*CJy<y.&W$f6e/Xnx|Mpwp!rkSeNFlDRe7hqMg-k,evyjn5,?kdGPd5hsNQk' );
define( 'SECURE_AUTH_SALT', '2x&Y0b8bAtfI.PD;4dDMNbPS!VG.F@tgTm=>|!#osA;JTya+)d)e&].z#N<CyzL4' );
define( 'LOGGED_IN_SALT',   'Z#GJ]80BV_m.iu;{n1(*j#lshr]};(Z?oexyK%BR9@IKUV^WB4npW2dbf=1ICt@T' );
define( 'NONCE_SALT',       '`3n&{`g/IA]B|E+5fSoO Pw=0B7*`~<SU|eSf7oGp=K:x/*O_ qrS`WX4lge)g37' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
