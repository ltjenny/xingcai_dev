<?php
require_once('xingcai_sqlin.php');
$conf['debug']['level']=1;

/*		数据库配置		*/
$conf['db']['dsn']='mysql:host=39.106.128.170;dbname=0xc;charset=utf8';
$dbname='0xc';
$dbhost='39.106.128.170';
$conf['db']['user']='root';
$conf['db']['password']='As5207758510';
$conf['db']['charset']='utf8';
$conf['db']['prename']='blast_';

$conf['cache']['expire']=0;
$conf['cache']['dir']='_xingcai_buffer/';

$conf['url_modal']=2;

$conf['action']['template']='xingcai_Front/';
$conf['action']['modals']='xingcai_back/';

$conf['member']['sessionTime']=15*60;	// 用户有效时长
$conf['node']['access']='http://localhost:65531';	// node访问基本路径
error_reporting(E_ERROR & ~E_NOTICE);

ini_set('date.timezone', 'PRC');

ini_set('display_errors', 'Off');

if(strtotime(date('Y-m-d',time()))>strtotime(date('Y-m-d',time()))){
	$GLOBALS['fromTime']=strtotime(date('Y-m-d',strtotime("-1 day")));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',time()));
}else{
	
	$GLOBALS['fromTime']=strtotime(date('Y-m-d'));
	$GLOBALS['toTime']=strtotime(date('Y-m-d',strtotime("+1 day")));
}
?>
<?php
error_reporting(0);
//$config = mysql_connect("127.0.0.1","root","sibery520")or die("Mysql Connect Error");//设置数据库IP，账号，密码
//mysql_select_db("0xc");//数据库库名
//mysql_query("SET NAMES UTF8");
$config = mysqli_connect("39.106.128.170", "root", "As5207758510", "0xc")or die("Mysql Connect Error");
//mysqli_query("SET NAMES UTF8");
?>