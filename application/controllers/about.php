<?php

/**@author Ojumah Samuel
 * @copyright 2014
 */
class About extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function Index(){
		$this->load->view('include/header');
		$this->load->view('about');
		$this->load->view('include/footer');
	}
}
