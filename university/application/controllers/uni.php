

<?php
session_start();
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class uni extends CI_Controller {
	function index()
	{
		$this->load->view('userlogin.php');	
	}
	
	function checklogin()
	{
		$this->load->library('form_validation');
		//<!-----------------rule------------------>
		$this->form_validation->set_rules('username','نام کاربری', 'required');
		$this->form_validation->set_rules('password','پسورد','required|numeric');
		//------------------message-----------------
		$this->form_validation->set_message('required', 'پربودن فیلد %s اجباری است ');
		$this->form_validation->set_message('numeric', 'عددی بودن فیلد %s اجباری است');
		//--------------------checking------------
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('userlogin.php');
		}
		else
		{
		$data['info']=$this->data_model->checklogin($_POST['username'],$_POST['password']);
		if($data['info']==null)
		{
			$this->load->view('userlogin_error.php');
		}
		else 
		{
			foreach($data['info'] as $row)
			{
				
				if($row['user_name']=='headmaster')
				$this->load->view('headmaster.php',$data);
				
				
				
			}
			
		}
		
		}
		
	}//end chek login
	

