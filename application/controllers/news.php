<?php

/**@author Ojumah Samuel
 * 
 */
class News extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function Index(){
		$this->load->view('include/header');
		$this->load->view('news');
		$this->load->view('include/footer');
	}
}
