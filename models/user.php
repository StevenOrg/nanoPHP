<?php

$param = array(
	'name'=>'steven',
	'age'=>'19',
	'files'=>array('basic'=>'typer')
);
$page = new newRender(array('user'=>'user'),$param);
$page->render();