#  nanophp
#### 1. Instruction(tree) for nano
nanoPHP is a light php framework, partly freindy to front-ends developers and desingers.
nanoPHP是一个轻量化框架，其中包含了常用的15个类，并将所有业务逻辑采用类似Nodej.js中app的开发设置，所有页面均经过index进行业务分发，无需设置路由。
该框架有以下特点：
1. 包含常用的15个类和方法，例如http请求和返回数据类、数据接收类、数据格式转化、mySql数据库读写操作类等；
```php
例如：getArray, new httpRequest()...
```
2. 您甚至可以直接使用类似于Jquery风格的数据请求，可以直接将function作为参数传递
```php
例如：$request = new httpRequest('get',$postUrl,$postData,function($result){ $reuslt ...});
```
项目文件路径：
```
____/
    |-public
    |-views
    |-contollers
    |-models
    |-READ.ME
```

#### 2. Starting

##### 2.1 render method
render param can be null, and it will be default-index.php.
```php
//set param for template html.
$param = array(
	'name'=>'steven',
	'age'=>'19',
	'files'=>array('basic'=>'typer')
);

//use array to show the tamplet name(name standard:****.tpl.html).

$page = new newRender(array('user'=>'user'),$param);

//now start render it!
$page->render();
```
##### 2.2 get or post data
Using v(), you can get data form all paths, both get or post methods! And get_magic_quotes_gpc()id detected.


```php
v('username')//no mater username is get data or post data!
```
#### 2.3 http_request
using class 'httpRequest' to handle the data and function just like JQUERY!

```php
$request = new httpRequest('get',$postUrl,$postData,function($result){ $reuslt ...});
```
