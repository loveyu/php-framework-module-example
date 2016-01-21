<?php
/**
 * 简单的配置文件
 */
return array(
	'sql' => [
		'write' => [
			'database_type' => 'mysql', //服务器类型 支持 mysql ,请勿修改
			'server'        => 'localhost', //服务器地址
			'username'      => 'root', //用户名
			'password'      => '123456', //密码
			'database_file' => '', //数据库文件,	SqLite 专有文件
			'charset'       => 'utf8', //编码
			'database_name' => 'test', //数据库名
			'option'        => [ //PDO选项
				PDO::ATTR_CASE    => PDO::CASE_NATURAL,
				PDO::ATTR_TIMEOUT => 5,
			],
		],
	],
);