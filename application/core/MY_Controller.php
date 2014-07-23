<?php

/**@author Ojumah Samuel
 * @copyright July 2014
 */
class MY_Controller extends CI_Controller {
	
	function __construct() {
		parent::__construct();
			  
	   $this->load->model('Auth_model');
	  
	  if(!$this->Auth_model->Is_Session_Set()){
	  	redirect(base_url().'signin');
	  }
	  
	}
}
