

<?php 

include_once('system/libs/Main.php');
include_once('system/libs/DController.php');
include_once('system/libs/Load.php');

// $main = new Main();






$url = isset($_GET['url']) ? $_GET['url'] : NULL;
if($url != NULL){
	$url = rtrim($url,'/');
	$url = explode("/", filter_var($url,FILTER_SANITIZE_URL));
}else{
	unset($url);
}


if(isset($url['0'])){
include('app/controllers/'.$url['0'].'.php');

$controller = new $url['0']();

	if(isset($url[2])){
		$method = $url[1];
		$controller->$method($url[2]);
	}else{
		if(isset($url[1])){
			$method = $url[1];
		}else{

		}
	}
}else{

include('app/controllers/Index.php');

$ctrl = new Index();
$ctrl->home();

}













?>
