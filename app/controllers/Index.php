<?php 

/**
 * Index Controller
 */
class Index extends DController
{
	

	function __construct(){
		parent::__construct();
	}

	public function home(){
		$this->load->view('home');
	}
}

 ?>