<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

//smarty配置
define('SMARTY_TMP_DIR',    ROOT.'/views/smarty/templates/');
define('SMARTY_COMPILE_DIR',    ROOT.'/views/smarty/template_c/');
define('SMARTY_CACHE_DIR',    ROOT.'/views/smarty/cache/');
define('SMARTY_CONFIG_DIR',    ROOT.'/views/smarty/configs/');
define('PHPUI_VERSION', '201404111509');

define('PAGE_COUNT', '10');
define('DEFAULT_PASSWORD', '123456');
define('RTN_PERCENT', '50');
define('IP_WHITE_PATH',dirname(ROOT).'/data/ip_white.list');
define('FILENAME', 'customer_');

//define('BAIDU_SERVER_HOST','http://172.16.34.145:22110');

//email config
define('EMAIL_FROM',   'APIquota@haizhi.com');
define('EMAIL_TO',   'dingzhu@haizhi.com,daiwei@haizhi.com');
define('EMAIL_CC', 'dingzhu@haizhi.com');
define('EMAIL_SUBJECT',    'MCC账号API使用报告');

//define('CORE_KEYWORD',  '核心竞价词');
//define('CORE_KEYWORD_ID',  '1');
define('NULL_KEYWORD_ID',  '2');
define('SELF_KEYOWRD_TAG',  '我的竞价词');

//数据库分库数
define('SWAN_DB_COUNT',  '5');
define('SWAN_DB_PREFIX',  'swan_db_pre');
define('SWAN_DB_DEFAULT_PREFIX',  '0');

//跟踪对手最大关键词个数
define('COMPETITOR_KEYWORD_MAX',    '90');
//地域词表路径
define('REGION_PATH',dirname(ROOT).'/data/area.data');

//解密url公钥
define('URL_DECRYPT_KEY',   'H&@nvh89U15)YY');
//授权的超时时间
define('AUTH_TIMEOUT',  '17200');

//客户端UA标识
define('CLIENT_UA', 'zhitouyi-client');
//标识开关,1为开，0为关
define('CHECK_CLIENT_UA',   '0');
//数据库默认时间
define('DEFAULT_LAST_LOGIN',    '0000-00-00 00:00:00');
//海智短信后缀
define('ZTY_MSG_SUFFIX',    '【智投易团队】');

/* End of file constants.php */
/* Location: ./application/config/constants.php */
