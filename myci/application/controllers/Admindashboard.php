<?php

class Admindashboard extends CI_Controller{
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
			redirect("home");
		}
	}
	function index()
	{
		//echo "yes";
	}
}

?>