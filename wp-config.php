<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wordpress');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yHWc 4Xy@EL:]gjkI,6<B!gv$N|X-f9t{w!C4Z3`y]qK<2TmD;s._E&*L`1WgjE;');
define('SECURE_AUTH_KEY',  '>19-G3Vp6>N!@5;F/Ejnq^04[TI6m>b#m~jz6mck6LN-+}KJ,$z&5Y_gE:=!7nM`');
define('LOGGED_IN_KEY',    'hz$<KAHy!({p)[slHXDlPV$2|)?9]vexF!b{~}sl<P&xvXhXDKOT@E_b{hO(NEQL');
define('NONCE_KEY',        '`.S.52UfwStU!cE=A~J*7hR402KZ<%i{k1G,d:2FJ6Sz~bv~mAO5?{fNlu49v+b~');
define('AUTH_SALT',        '4(b3 AQFJ0nk}!W!}hC_~eQ?.|JIzWGZgtV,5#yq*@7TkF,@ZNJ6mp;<VVc&gp},');
define('SECURE_AUTH_SALT', '@-/t9d<]]5/od5YB};? mDm!buX$6._w,gAlx^I>SiKYeMa{6GAajzVC/ye^Zhfc');
define('LOGGED_IN_SALT',   'J2PUHLd+)5i~. |;-!5rykp<uU]VY%BW66+ >/VfhmQ{}J=L/lw>s`$Xi1G*S0ju');
define('NONCE_SALT',       'zD^|%vg a`mJSKKPl{h%fWy=Yk4D o4;S1vO^+hDsD@ ;vo4V*}Un[xP9kgjpP<S');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
