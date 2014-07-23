<?php

/**@author Ojumah Samuel 
 * @copyright 2014
 * @created July 2014
 */
class Groups extends MY_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function Index(){
		$this->load->view('include/header');
		$this->load->view('groups');
		$this->load->view('include/footer');
	}

}
