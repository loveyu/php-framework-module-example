<?php
$time = microtime();
require_once("../sys/config.php");
c()->getTimer()->setBeginTime($time); //修正启动时间
cfg()->load(_ConfigPath_.'/db.php'); //加载其他配置文件
u()->home(array(
	'Home',//默认主页
	'main',
), array(
	'Home',//默认404
	'not_found',
));