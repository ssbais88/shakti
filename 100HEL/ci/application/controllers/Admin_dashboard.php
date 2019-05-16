<?php
/**
 * 
 */
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
		echo "yes";
	}
}
?>