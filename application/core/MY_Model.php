<?php

/**@author Ojumah Samuel
 * 
 */
class MY_Model extends CI_Model {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
		
		$this->_init();
	}
	
	function _init(){
		//Initialize database and tables 
		defined('TB_POSTS') ? NULL : define('TB_POSTS', 'posts');
		defined('TB_EVENTS') ? NULL : define('TB_EVENTS', 'events');
		defined('TB_ADMIN') ? NULL : define('TB_ADMIN', 'administrators');
		
	}
}
