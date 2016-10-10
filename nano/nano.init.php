<?php

include 'nano.config.php';


/**
 * Class for render.
 * set render method to render pages.
 */

if(v('p')){
	if(file_exists(ROOT.M_PATH.v('p').'.php')){
		include ROOT.M_PATH.v('p').'.php';
	}else{
		if(DEBUGM){throw new Exception("no model found for ".ROOT.M_PATH.v('p').'.php');} 
	};
}elseif(v('c') && v('m')){
	if(file_exists(ROOT.C_PATH.v('c').'.class.php')){
		include ROOT.C_PATH.v('c').'.class.php';
	}else{
		if(DEBUGM){throw new Exception("no controller found for ".ROOT.C_PATH.v('p').'.php');} 
	};
}elseif(empty(v('c')) && !empty(v('m'))){
	if(DEBUGM){throw new Exception("controller and method should be both defined! Contoller is empty, please check your 【c】 define!!");} 
}elseif(!empty(v('c')) && empty(v('m'))){
	if(DEBUGM){throw new Exception("controller and method should be both defined! Method is empty, please check your 【m】define!! ");} 
}else{
	include ROOT.M_PATH.'index.php';
}

/**
 * use a render class to paint the web world!
 * construct @param $view(full name)
 * construct @param $param (data for rendering!) 
 */
class newRender{
	private $view_page;
	private $data;

	/**
	 * recieve pages.
	 */
	public function __construct($arr,$data){
		$this->view_page = !empty($arr)?$arr:array('index'=>'index');
		$this->data = $data;
	}

	/**
	 * { get view page and render with params }
	 *
	 * @throws     Exception  (when page does not exists.)
	 */
	public function render(){
		if(!empty($this->data) && $this->data != 0){
			@extract($this->data);
		}
		if(!empty($this->view_page)){
			foreach($this->view_page as $key => $val){
				if(file_exists(ROOT.V_PATH.$key.D.$val.'.tpl.html')){
					include ROOT.V_PATH.$key.D.$val.'.tpl.html';
				}else{
					throw new Exception("no file found for ".ROOT.V_PATH.$key.D.$val.'.tpl.html'); 
				}
			}
		}
	}
}

/**
 * { data form all paths, both get or post methods! And get_magic_quotes_gpc()id detected.}
 */

function v($param){
	if(!$param){
		echo 'v should have a param';
		exit;
	}else{
		@$data = $_GET[$param]?$_GET[$param]:'';
		if(!$data){
			@$param = $_POST[$param]?$_POST[$param]:'';
		}

		if(!get_magic_quotes_gpc()){
			@$data = addslashes($data);
		}
	}

	return @$data;
}