<?php

/**@author Ojumah Samuel
 * @copyright 2014
 */
class Site_Search extends MY_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function Index(){
		$string = $this->input->get('s');
		if(empty($string)){
			echo "Please enter a Search String";
			exit;
		}
		echo $string;
		
	}
}
