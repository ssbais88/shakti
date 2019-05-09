<?php

class Home extends CI_Controller
{


	function index()
	{
		$a = "rohit";
		$b = "nilesh";
		$demo = array("x"=>"shubh");

		$pagedata = array("name1"=>$a, "name2"=>$b, "data"=>$demo);
		$this->load->helper("url"); 
		$this->load->view("home", $pagedata);
	}

	function contact()
	{
		$this->load->helper("url"); 
		$this->load->view("about");
	}
	function contact()
	{
		$this->load->helper("url"); 
		$this->load->view("contact");
	}
	function help()
	{
		$this->load->helper("url"); 
		$this->load->view("help");
	}


}

?>