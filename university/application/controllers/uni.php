

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
	
	
	function return_master()
	{
	$this->load->view('headmaster.php');}
//	function show_news()
//	{$this->load->view('food.php');}
	function heaadmaster_list()
	{$info['test']=0;
	$this->load->view('heaadmaster_list',$info);}
	//ذخیره دروس توسط مدیر گروه
	
	
	
	function save_course()
	{
	//	--------------------------------------------------------------------------------------------------------------
	$this->load->library('form_validation');
		//<!-----------------rule------------------>
		$this->form_validation->set_rules('course_name','نام درس', 'required');
		$this->form_validation->set_rules('teacher_name','نام استاد','required');
		$this->form_validation->set_rules('class_time','زمان کلاس','required');
		$this->form_validation->set_rules('exam_time','زمان امتحان','required');
		$this->form_validation->set_rules('max','ظرفیت','required');
		//------------------message-----------------
		$this->form_validation->set_message('required', 'پربودن فیلد %s اجباری است ');
		//--------------------checking------------
		if ($this->form_validation->run() == FALSE)
		{
			$info['test']=2;
	$this->load->view('heaadmaster_list',$info);
		}
		else
	{
	$this->data_model->save_course($_POST['course_name'],$_POST['teacher_name'],$_POST['class_time'],$_POST['exam_time'],$_POST['max']);
	$info['test']=1;
	$this->load->view('heaadmaster_list',$info);
	}
	}
	//نمایش دروس ذخیره شده برای مدیر گروه
	function show_course_list()
	{
		$data['info']=$this->data_model->show_course_list();
		$this->load->view('show_course_list',$data);
	}

function news_page()
	{
		$data['test']=0;
		$this->load->view('news.php',$data);
	}
	function insert_news_page()
	{
		$this->load->view('insert_news.php');
	}
	function insert_news()
	{
		//---------------------------------------------------------------------------------
		$this->load->library('form_validation');
		//<!-----------------rule------------------>
		$this->form_validation->set_rules('title','عنوان خبر', 'required');
		$this->form_validation->set_rules('text','متن خبر','required');
		$this->form_validation->set_rules('data','تاریخ خبر','required');
		//------------------message-----------------
		$this->form_validation->set_message('required', 'پربودن فیلد %s اجباری است ');
		
		//--------------------checking------------
		if ($this->form_validation->run() == FALSE)
		{
			
			$this->load->view('insert_news.php');
		}
		else
		{
		$this->data_model->insert_news($_POST['title'],$_POST['text'],$_POST['data']);
		$data['test']=1;
		$this->load->view('news.php',$data);
		}
	}
	function edit_news_page()
	{
		$data['info']=$this->data_model->show_news();
		$this->load->view('edit_news_page.php',$data);
	}
	function delete_news($id)
	{
		$this->data_model->delete_news($id);
		$data['info']=$this->data_model->show_news();
		$this->load->view('edit_news_page.php',$data);
		
		
	}
	function edit_news($id)
	{
		$data['info']=$this->data_model->edit_news($id);
		$this->load->view('edit.php',$data);
	}
	function final_edit_news($id)
	{
		$this->data_model->final_edit_news($id,$_POST['title'],$_POST['text'],$_POST['data']);
		$data['info']=$this->data_model->show_news();
		$this->load->view('edit_news_page.php',$data);
	}
	
	
}

