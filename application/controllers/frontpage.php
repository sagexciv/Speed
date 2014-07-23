<?php

/**@author Ojumah Samuel
 * @copyright 2014
 */
class FrontPage extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function Index(){
		//Load Events
		//Load News
		$this->load->model('Event_model','event_m');
		$this->load->model('Post_model','post_m');
		
		$page_data['events'] = $this->event_m->LoadEvents(1);
		$page_data['news'] = $this->post_m->LoadPosts(1);
		
		
		$this->load->view('include/header');
		$this->load->view('frontpage',$page_data);
		$this->load->view('include/footer');
	}
}
