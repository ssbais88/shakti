<?php
class Project extends CI_controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");

	}
	function index()
	{
		$pagedata=array("title"=>"home","pagename"=>"project/home");
		$this->load->view("project/layout",$pagedata);
	}
	function signup()
	{ 
	   $this->load->library("form_validation");
		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username/Email", "required|valid_email");
		$this->form_validation->set_rules("password", "Password", "required");
		$this->form_validation->set_rules("ree_password", "Re-Password", "required|matches[password]");
		$this->form_validation->set_rules("address", "Address", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("contact", "Contact", "required|numeric|exact_length[10]");


		if($this->form_validation->run()==false)
		{
			$pagedata = array("title"=>"Signup Page", "pagename"=>"project/signup");
			$this->load->view("project/layout", $pagedata);
		}
		else
		{
			// $a = $_POST['full_name'];
			// print_r($_POST);
			// die;
			$data['full_name'] = $this->input->post("full_name");
			$data['username'] = $this->input->post("username");
			$data['password'] = sha1($this->input->post("password"));
			$data['address'] = $this->input->post("address");
			$data['city'] = $this->input->post("city");
			$data['gender'] = $this->input->post("gender");
			$data['contact'] = $this->input->post("contact");

			$this->load->model("mymodel");
			$this->mymodel->insert($data);

			redirect("home/login");
			// echo "yes";

	     }
	 }
	function login()
	{
		$pagedata=array("title"=>"home","pagename"=>"project/login");
		$this->load->view("project/layout",$pagedata);
	}
	function about()
	{     
	    $id = $this->session->userdata("id");
		$this->load->model("mymodel");
		$result=$this->mymodel->select_by_id($id);

		$pagedata=array("title"=>"home","pagename"=>"project/about","result"=>$result);
		$this->load->view("project/layout",$pagedata);
	}
	
	function profile()
	{
		$pagedata=array("title"=>"home","pagename"=>"project/profile");
		$this->load->view("project/layout",$pagedata);
	}
	// function logout()
	// { 
	// 	$pagedata=array("title"=>"home","pagename"=>"project/logout");
	// 	$this->load->view("project/layout",$pagedata);
	// }

	function home()
	{
		$pagedata=array("title"=>"home","pagename"=>"project/home");
		$this->load->view("project/layout",$pagedata);
	}
	function auth()
	{
		$u = $this->input->post("username");
		$p = sha1($this->input->post("password"));
		$this->load->model("mymodel");
		$result=$this->mymodel->select_by_username($u);
		// echo $result->num_rows();
		if($result->num_rows()==1)
		{
			$data=$result->row_array();
			if($data['password']==$p)
			{
				$this->session->set_userdata("id",$data['id']);
				$this->session->set_userdata("full_name",$data['full_name']);
				$this->session->set_userdata("is_user_logged_in",true);
				redirect("project/profile");
			}
			else
			{
				$this->session->set_flashdata("msg",'This password is incorrect');
				redirect("project/login");
			}
		}
		else
		{
			$this->session->set_flashdata("msg",'This username amd password is incorrect');
			redirect("project/login");

		}

	}
	
}


 ?>