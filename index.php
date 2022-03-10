<?php include "inc/header.php"; ?>


<?php 

include_once('system/libs/Main.php');
include_once('system/libs/DController.php');

// $main = new Main();






$url = isset($_GET['url']) ? $_GET['url'] : NULL;
$url = rtrim($url,'/');
$url = explode("/", $url);

if($url['0']){
include('app/controllers/'.$url['0'].'.php');

$controller = new $url['0']();

	if($url[2]){
		$method = $url[1];
		$controller->$method($url[2]);
	}else{
		if($url[1]){
			$method = $url[1];
		}else{

		}
	}
}else{

}













?>



<?php include "inc/footer.php"; ?>