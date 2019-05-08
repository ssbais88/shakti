<?php

class Home extends CI_Controller{


<<<<<<< HEAD
	function about()
	{
=======
	function index()
	{
		$a = "rohit";
		$b = "nilesh";
		$demo = array("x"=>"shubh");

		$pagedata = array("name1"=>$a, "name2"=>$b, "data"=>$demo);
		$this->load->helper("url"); 
		$this->load->view("home", $pagedata);
	}

	function about()
	{
		$this->load->helper("url"); 
>>>>>>> 72c74d3e160286d982d75ba4237a39095739b1fb
		$this->load->view("about");
	}
	function contact()
	{
<<<<<<< HEAD
=======
		$this->load->helper("url"); 
>>>>>>> 72c74d3e160286d982d75ba4237a39095739b1fb
		$this->load->view("contact");
	}
	function help()
	{
<<<<<<< HEAD
=======
		$this->load->helper("url"); 
>>>>>>> 72c74d3e160286d982d75ba4237a39095739b1fb
		$this->load->view("help");
	}


}

?>