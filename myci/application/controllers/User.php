<?php

class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");

		$this->backdoor();

	}
	function backdoor()
	{
		if(! $this->session->userdata('is_user_logged_in'))
		{
			redirect('home');
		}
	}



	function index()
	{
		$pagedata = array("title"=>"Dashboard Page", "pagename"=>"user/dash");
		$this->load->view("layout", $pagedata);
	}




	function profile()
	{
		$id = $this->session->userdata("id");
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_id($id);






		$pagedata = array("title"=>"User Profile Page", "pagename"=>"user/profile", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}
	function edit()
	{
		$id = $this->session->userdata("id");
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_id($id);

		

		$pagedata = array("title"=>"edit Profile Page", "pagename"=>"user/edit", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}



	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}

}
?>