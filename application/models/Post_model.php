<?php

/**@author Ojumah Samuel 
 * @copyright July 2014
 */
class Post_model extends MY_model {
	
	var $title;
	var $content;
	var $date;
	var $uri;
	var $p_id; //ID for posts
	var $image; 
			
	function __construct() {
		parent::__construct();
 	}
	
	function AddPost(){
		$post_data = array('post_title' => $this->title,'post_content'=>$this->content,'post_uri'=>$this->uri,'post_image'=>$this->image);
		$this->db->insert(TB_POSTS,$post_data);
	}
	
	function ReturnCount(){
		$query = $this->db->get(TB_POSTS);
		return $query->num_rows();
	}
	
	private function UploadImage(){
		$config['upload_path'] = './assets/images/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
		$config['max_size']	= '2048';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$config['encrypt_name'] = TRUE;
		$config['remove_spaces'] = TRUE;
		
		$this->load->library('upload', $config);
		$field_name = "featured_image";
		
		if($this->upload->do_upload($field_name)){
			$picture_data = $this->upload->data();

			$picture_location = '/'.$this->user_auth_id.'/'.$picture_data['file_name'];
			return $picture_data['file_name'];			

		}		
			return false;
	}
	
	function EditPost(){
		$data = array('post_content'=>$this->content);
		$this->db->select();
		$this->db->update(TB_POSTS,$data);
	}
	
	function CreateUri(){
		$title = $this->title;
	}
	
	function LoadPosts($all=false){
		if($all){
			$query = $this->db->get(TB_POSTS);
		}
		else {
			$query = $this->db->get_where(TB_POSTS,array('post_id'=>$this->p_id));	
		}

		return ($query->num_rows()>0) ? $query->result_array() : false ;
	}
}
