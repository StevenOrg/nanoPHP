#  nanophp
#### 1. Instruction(tree) for nano
nanoPHP is a light php framework, partly freindy to front-ends developers and desingers.
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
