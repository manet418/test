

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class data_model extends CI_model {
	function checklogin($username,$password)
	{	
		$sql='select user_name,user_pass from login where user_name="'.$username.'" and user_pass='.$password;
		$query=$this->db->query($sql);
		return $query->result_array();	
	}
	
	
	
	function save_course($course_name,$teacher_name,$class_time,$exam_time,$max)
	{
		$sql='insert into course(course_name,teacher_name,class_time,exam_time,max)
		values("'.$course_name.'","'.$teacher_name.'","'.$class_time.'","'.$exam_time.'",'.$max.')';
		$this->db->query($sql);
		
	}
	function show_course_list()
	{
		
		$sql='select * from course';
    	$query=$this->db->query($sql);
		return $query->result_array();
	}
	
}