<?php

class Home extends CI_Controller
{
	function index()
	{
		$a = "Abdul";
		$b = "Ishan";
		$demo = array("x" => "Ahmed");//This array is multidimentianal Array.

		$pageview = array("name" => $a, "name1" => $b, "data" => $demo);
		$this ->load->helper("url");
		$this ->load->view("home", $pageview);
	}
	function about()
	{
		$this ->load->helper("url");
		$this ->load->view("about");

		//Here function name about() and view("about") is not meditory to same, both can be different.
	}
	function contact()
	{
		$this ->load->helper("url");
		$this ->load->view("contact");
	}
	function help()
	{
		$this ->load->helper("url");
		$this ->load->view("help");
	}
	function signup()
	{
		$this ->load->helper("url");
		$this ->load->view("signup");
	}
	function signin()
	{
		$this ->load->helper("url");
		$this ->load->view("signin");
	}
}

?>