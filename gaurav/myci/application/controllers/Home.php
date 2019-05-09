<?php
class Home extends CI_Controller
{
	function index()
	{
		$a = "ram";
		$b = "rohit";
		$demo = array("x"=>"subh");
		$demo2 = array("y"=>"lakhan");
	    $pagedata = array("name1"=>$a,"name2"=>$b,"data"=>$demo,"data2"=>$demo2);
		$this->load->helper("url");
		$this->load->view("home" , $pagedata);
	}
	function about1()
	{
		$this->load->helper("url");
		$this->load->view("about1");
	}
	function contact1()
	{
		$this->load->helper("url");
		$this->load->view("contact1");
	}
	function help()
	{
		$this->load->helper("url");
		$this->load->view("help");
	}
}


?>