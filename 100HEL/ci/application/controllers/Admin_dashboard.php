<?php
class Admin_dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->backdoor();
	}
	function backdoor()
	{
		if(! $this->session->userdata("is_admin_logged_in"))
		{
			redirect("admin");
		}
	}
	function index()
	{
		
		$pagedata = array("title" => "Admin Dashboard" , "pagename" => "admin/dashboard");
		$this->load->view("admin/admin_layout", $pagedata);
	}
	function view_user()
	{
		$this->load->model('usermodel');
		$result=$this->usermodel->select_all();
		$pagedata = array("title" => "View Users" , "pagename" => "admin/view_user", "result"=>$result);
		$this->load->view("admin/admin_layout", $pagedata);
	}
}
?>