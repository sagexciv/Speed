<?php

/**@author Ojumah Samuel
 * @copyright 2014
 * @modified July 2014
 */
class Auth_model extends MY_Model {
	
	var $username;
	var $password;
	var $details;
	var $auth_token;
	
	function __construct() {
		parent::__construct();
		$this->load->library('session');
	}
	
	function Is_Session_Set(){
		if($this->session->userdata('auth_token')){
	  	  return true;
	  	}
		return false;
	}
		
	function GenerateAuthID(){
		
	    $charset = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		
	    $auth_id = '';
	    for ($i = 0; $i < 10; $i++) {
	        $auth_id .= $charset[rand(0, strlen($charset) - 1)];
	    }
   		 return $auth_id;
	}
	
	function Login(){
		$this->password = $this->EncryptPassword();
		//echo $this->password;
		$login_data = array('username' => $this->username,
					   'password'=> $this->password 	
						);
		//Select the username first.
		
		$query = $this->db->get_where(TB_ADMIN,$login_data);
		
		$results = $query->result();
		if((is_array($results)) && count($results) == 1){
			$this->details = $results[0];
			$this->Set_Session();
			return true;
		}
		
		return false;
		
	}
	
	 private function EncryptPassword(){
		$salt = "AlumniCESC";
		$encrypted_password = sha1($this->auth_token.md5($this->password).$salt); 
		//This is just a simple encrpting model for the passwords
		
		return $encrypted_password;
	}
	
	function Unset_Session(){
		$session_vars = array(
							'auth_token' =>'',
							);
							
		$this->session->unset_userdata($session_vars);
		
		$this->session->keep_flashdata('error');
		
		return true;		
	}
	
	function Set_Session(){

		$this->session->set_userdata(array(
				'auth_token' => $this->details->auth_token,
				'username'=>$this->details->username,
				));
		
		return true;
	} 
}
