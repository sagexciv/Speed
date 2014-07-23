<?php

/**@author Ojumah Samuel 
 * 
 */
class Post extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model('Post_model','post_m');
	}
	
	function Index(){
		
		$this->post_m->title =  $this->input->post('title');
		$this->post_m->content =  $this->input->post('content');
		$this->post_m->AddPost();
	}
	
	function Edit($post_id=false){
		if(!$post_id){
			echo "No Posts Selected!";
			exit;
		}
		$this->post_m->p_id = $post_id;
		$data = $this->post_m->LoadPost();
		if(empty($data)){
			echo "Post does not Exist";
			exit;
		}
		print_r($data);
	}
}
