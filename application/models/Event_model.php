<?php

/**@author Ojumah Samuel
 * @cop
 */
class Event_model extends MY_Model {
	var $name;
	var $e_date;
	var $details;
	var $event_id;
	
	function __construct() {
		parent::__construct();
	}
	
	function Create(){
		$data = array('event_name'=>$this->name,'event_details'=>$this->details,'event_date'=>$this->e_date);
		$this->db->insert(TB_EVENTS,$data);
		return ($this->db->affected_rows()>0) ? true : false;
	}
	
	function ReturnCount(){
		$query = $this->db->get(TB_EVENTS);
		return $query->num_rows();
	}
	
	function Edit(){
		$data = array('event_name',$this->name,'event_date'=>$this->e_date,'event_details'=>$this->details);
		$this->db->select();
		$this->db->update(TB_EVENTS,$data);
	}
	
	function LoadEvents($all=false){
		if($all){
			$query = $this->db->get(TB_EVENTS);
		}
		else{
		 	$query = $this->db->get_where(TB_EVENTS,array('event_id'=>$this->event_id));
		}
		
		return ($query->num_rows()>0) ? $query->result_array() : false ;
	}
}
