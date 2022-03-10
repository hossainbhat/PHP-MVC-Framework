<?php include "inc/header.php"; ?>


<?php 

include_once('system/libs/Main.php');
include_once('system/libs/DController.php');

// $main = new Main();




$url = $_GET['url'];
$url = rtrim($url,'/');
$url = explode("/", $url);


include('app/controllers/'.$url['0'].'.php');

$controller = new $url['0']();

$method = $url[1];
$controller->$method($url[2]);
















?>



<?php include "inc/footer.php"; ?>