<?php 

/**
 * load
 */
class Load{
	
	function __construct(){}


	public function view($fileName){
		include "app/views/".$fileName.'.php';
	}
}

 ?>