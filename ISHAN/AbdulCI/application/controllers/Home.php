<?php

class Home extends CI_Controller
{
	function about()
	{
		$this ->load->view("about");

		//Here function name about() and view("about") is not meditory to same, both can be different.
	}
	function contact()
	{
		$this ->load->view("contact");
	}
	function help()
	{
		$this ->load->view("help");
	}
}

?>