<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**@author Ojumah Samuel
 * @copyright 2014
 */
class Admin extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('Admin_model','admin_m');
	}
	
	function Index(){
		$page_data['stats'] = $this->admin_m->ReturnCount();
		
		$this->load->view('include/header');
		$this->load->view('admin/admin',$page_data);
		$this->load->view('include/footer');
	}
	
	function Dashboard(){
		$this->load->view('include/header');
		$this->load->view('admin/admin');
		$this->load->view('include/footer');
	}
	
	function Events(){
		$this->load->model('Event_model','event_m');
		$this->event_m->name = $this->input->post('event_name');
		$this->event_m->details = $this->input->post('event_details');
		$this->event_m->e_date = $this->input->post('event_date');
		//$this->event_m->Create();
		
		$this->load->view('include/header');
		$this->load->view('admin/newevent');
		$this->load->view('include/footer');
	}
	
	function News(){
		$this->load->view('include/header');
		$this->load->view('admin/newpost');
		$this->load->view('include/footer');
	}
	
	function ChangePassword(){
		$this->load->view('include/header');
		$this->load->view('admin/changepassword');
		$this->load->view('include/footer');
	}
	
	function Users(){
		$this->load->view('include/header');
		$this->load->view('admin/newuser');
		$this->load->view('include/footer');
	}
}
