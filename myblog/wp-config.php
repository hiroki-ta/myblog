<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'LAA0494216-blog');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'LAA0494216');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'birthday0923');

/** MySQL のホスト名 */
define('DB_HOST', 'mysql013.phy.lolipop.lan');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wT}AQ+%ZV#-q<Wc<.d[Wcz:sU5 ;]dqAtEq[-mU`c>/[$0Y;CF}XqDRucW=2_|--');
define('SECURE_AUTH_KEY',  'q3g~-}Mf)*l5)5duuT_]Y0}Y5l}%+QFrIMF;:-P?2GfX*lp59t{@}sf7MrMZU<(-');
define('LOGGED_IN_KEY',    '1X(dK<EsM?->NyjOjU5[-2^w_z;e@8jCJ?vhJJ,-vOAMd-oG2C8::+UeuQ&]VBzM');
define('NONCE_KEY',        ',Z;~^Ob|$)9k0KCy#tq!Fy<Z)T7v:ZZxUKL[od#0-JW{Plc7&r}y.Q|{PG_?y&EL');
define('AUTH_SALT',        'iS}RG8+r/+)QThc_vC,z 6Mzk?DSS=]Cf`g4,{ Q}x^::RG~+AGCdx<Ie$v]>g)&');
define('SECURE_AUTH_SALT', '#X,<+FqOLJ{O8LQR~3(C[=@fDL[Wj7K=-6kHCm&oj1dX+.9;X$0no.!sNpX+?k(M');
define('LOGGED_IN_SALT',   '.5oX6t#pT].:Z>%u+L0K`esw2fZJ46%3vQ+_xT>k1q8tZ-bXz}-$?NGG#*XAe`&9');
define('NONCE_SALT',       ',wry* }t!c9rfbezC5l(e7x0Vur%v30TYnC.bdfTQ|~=zaO0j5uR^pd_!x>vOItu');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'myblog_';

/**
 * ローカル言語 - このパッケージでは初期値として 'ja' (日本語 UTF-8) が設定されています。
 *
 * WordPress のローカル言語を設定します。設定した言語に対応する MO ファイルが
 * wp-content/languages にインストールされている必要があります。たとえば de_DE.mo を
 * wp-content/languages にインストールし WPLANG を 'de_DE' に設定すると、ドイツ語がサポートされます。
 */
define('WPLANG', 'ja');

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
