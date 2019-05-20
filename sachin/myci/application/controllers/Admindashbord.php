<?php
class Admindashboard extends CI_Controller
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
		if(! $this->session->userdata("is_addmin_logged_in"))
		{
			redirect("admin");
		}
	}
	function index()
	{
		$this->load->view("admin/dash");
	}
	function logout()
	{
	$this->session->sess_destroy();
	redirect("admin");
    }
    function view_user()
    {
    	$this->load->model("usermodel"); 
   	    $result=$this->usermodel->select_all();
    	$pagedata =array("result"=>$result);
    	$this->load->view("admin/view_user",$pagedata);
    	
    }
}
 ?>