<?php

$param = array(
	'name'=>'steven',
	'age'=>'19',
	'files'=>array('basic'=>'typer')
);
$page = new newRender(array('user'=>'user'),$param);
$page->render();


$postUrl = 'http://1.sdli.sinaapp.com/nanoPHP/index.php';
$data= array('name'=>'steven','age'=>'19');
$request = new httpRequest('get',$postUrl,$data,function($result){});
