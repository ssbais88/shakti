<?php

class Home extends CI_Controller
{
	function __construct()
	{
		parent ::__construct();
		$this->load->helper("url");
	}
	function index()
	{
		$pageview = array("title"=>"Home Page", "pagename"=>"home");
		$this ->load->view("layout", $pageview);
	}
	function about()
	{
		$pageview = array("title"=>"About Page", "pagename"=>"about");
		$this ->load->view("layout", $pageview);

		//Here function name about() and view("about") is not meditory to same, both can be different.
	}
	function contact()
	{
		$pageview = array("title"=>"Contact Page", "pagename"=>"contact");
		$this ->load->view("layout", $pageview);
	}
	function help()
	{
		$pageview = array("title"=>"Help Page", "pagename"=>"help");
		$this ->load->view("layout", $pageview);
	}
	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name","Full Name","required");
		$this->form_validation->set_rules("username","Email Id","required");
		$this->form_validation->set_rules("pass","Password","required");
	    $this->form_validation->set_rules("re_pass","Re-Password","required");
	    $this->form_validation->set_rules("add","Address","required");
	    $this->form_validation->set_rules("city","City","required");
	    $this->form_validation->set_rules("gender","Gender","required");
	    $this->form_validation->set_rules("contact","Contact","required");

	    
		if ($this->form_validation->run()==false)
		{
			$pageview=array("title"=>"sign up","pagename"=>"signup");
			$this->load->view("layout",$pageview);
		}
		else
		{
			echo "yes";
		
		}
	}
	function signin()
	{
		$pageview = array("title"=>"Login Page", "pagename"=>"signin");
		$this ->load->view("layout", $pageview);
	}
}

?>