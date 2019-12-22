

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

function insert_news($title,$text,$data)
	{
		$sql='insert into news(title,text,date)
		values("'.$title.'","'.$text.'","'.$data.'")';
		$query=$this->db->query($sql);
	}
	function show_news()
	{
		$sql='select * from news';
    	$query=$this->db->query($sql);
		return $query->result_array();
		
	}
	function delete_news($id)
	{
		$sql='delete  from  news where id='.$id;
    	$query=$this->db->query($sql);
	}
	function edit_news($id)
	{
		$sql='select * from  news where id='.$id;
    	$query=$this->db->query($sql);
		return $query->result_array();
	}
	function final_edit_news($id,$title,$text,$data)
	{
		$sql='update news set title="'.$title.'",text="'.$text.'",date="'.$data.'" where id='.$id;
		$query=$this->db->query($sql);
	}
	
}