<?php

/**@author Ojumah Samuel
 * @copyright July 2014
 */
class SignIn extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function Index(){
		if(isset($_POST['signin'])){
				
			$this->load->model('Auth_model','auth');
			$admin_name = $this->input->post('admin_name');
			$password = $this->input->post('password');

			$this->auth->username = $admin_name;
			$this->auth->password = $password;
			if($this->auth->Login()){
				echo "Successful!";
			}
			exit;
		}	
		
		
		$this->load->view('include/header');
		$this->load->view('signin');
		$this->load->view('include/footer');
	}
}
