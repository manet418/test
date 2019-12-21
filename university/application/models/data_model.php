

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class data_model extends CI_model {
	function checklogin($username,$password)
	{	
		$sql='select user_name,user_pass from login where user_name="'.$username.'" and user_pass='.$password;
		$query=$this->db->query($sql);
		return $query->result_array();	
	}
}