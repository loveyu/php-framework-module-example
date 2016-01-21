# 基本的PHP整体结构运行样例程序

## 系统需求
PHP版本必须大于等与`5.4`

## 安装步骤
Clone Git，过程中必须包含子项目，否则将导致直接不可用
```
git clone --recurse-submodules git@github.com:loveyu/php-framework-module-example.git
```

## 网站配置
由于完全依赖于伪静态，所以必须对文件进行重定向。

### nginx配置
```
location / {
	if (!-f $request_filename){
		rewrite (.*) /index.php;
	}
}
# 重定向404页面，防止静态资源404无法获取
error_page 404 /index.php;
```

### Apache 配置
```
RewriteEngine On
RewriteBase /

#不存在的文件直接重定向
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.*)$ /index.php [L]
```

同时，对于Apache也可以使用PATH_INFO的形式，如 `index.php/Home` .

系统默认将Web配置目录放到web文件夹下，其他对应的文件sys,app,install等文件均在web目录的上级目录，
这是为了安全性的考虑，如果有需要将文件调整到一个目录，可具体参考`sys/config.php`文件调整目录结构，并调整index.php文件的具体参数
同时如果未安装系统，同时可能需要修改install.php中的文件参数。