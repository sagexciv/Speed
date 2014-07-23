<?php

/**@author Ojumah Samuel
 * @copyright 2014
 */
class Admin_model extends MY_Model{
	
	var $admin_name;
	
	function __construct() {
		parent::__construct();
	}
	
	function ReturnCount(){
		$this->load->model('Event_model','event_m');
		$this->load->model('Post_model','post_m');
		$query = $this->db->get('administrators');
		
		$data['admin']  = $query->num_rows();
		$data['events'] = $this->event_m->ReturnCount();
		$data['posts'] = $this->post_m->ReturnCount();
		
		
		return $data;

	}
	
	function ChangePassword(){
		echo "Time to change your password";
	}
	
	function AddUser(){
		$data = array('admin_name' => $this->admin_name);
		$this->db->insert(TB_ADMIN,$data);
		
		return ($this->db->affected_rows()>0) ? true : false;
	}
	
	function ChangePassword($old_password,$new_password){
		//Check if current password matches after encryption...if not send an error
		$this->load->model('Auth_model');
		
		$this->Auth_model->password = $old_password;
		$enc_old_password = $this->Auth_model->EncryptPassword();
		
		//Check the database
		$query = $this->db->get_where(TB_ADMIN,array('auth_token'=>$this->auth_token,'password'=>$enc_old_password));
		if($query->num_rows()==0){
			return false;
		}
		
		$this->Auth_model->password = $new_password;
		$new_enc_password = $this->Auth_model->EncryptPassword();
		
		//Update the Users table
		$password_data = array('password'=>$new_enc_password);
		$this->db->where('user_id',$this->user_in_session);
		$this->db->update('users',$password_data);
		
		return true;
		
		//If it does Change to new one and return true as success
	}
}
