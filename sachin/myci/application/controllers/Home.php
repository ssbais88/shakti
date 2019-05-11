 <?php
class Home extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}
	function index()
	{
		$pagedata = array("title"=>"Home Page", "pagename"=>"home","page_name"=>"Welcome");
		$this->load->view("layout", $pagedata);
	}
	function about()
	{
		$pagedata = array("title"=>"About Page", "pagename"=>"about","page_name"=>"about me");
		$this->load->view("layout", $pagedata);
	}
	// function contact()
	// {
 //     $pagedata = array("title"=>"Contact page", "pagename"=>"contact", "page_name"=>"contact");
 //     $this->load->view("layout",$pagedata);

	// }
	function contact()
	{
		$pagedata = array("title"=>"Contact Page", "pagename"=>"contact" ,"page_name"=>"your contact");
		$this->load->view("layout", $pagedata);
	
	}
 function help()
 {
$pagedata = array("title"=>"help page","pagename"=>"help","page_name"=>"help");

$this->load->view("layout",$pagedata);

 } 



	function login()
	{
		$pagedata = array("title"=>"Login Page", "pagename"=>"login","page_name"=>"login");
		$this->load->view("layout", $pagedata);
	}
	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name","full_name","required");
		$this->form_validation->set_rules("username","full_name","required");
		$this->form_validation->set_rules("pass","full_name","required");
		$this->form_validation->set_rules("re_pass","full_name","required");
		$this->form_validation->set_rules("add","full_name","required");
		$this->form_validation->set_rules("city","full_name","required");
		$this->form_validation->set_rules("contact","full_name","required");
		$this->form_validation->set_rules("gender","full_name","required");


		if($this->form_validation->run()==false)
		{
		$pagedata = array("title"=>"Signup Page", "pagename"=>"signup" , "page_name"=>"signup");
		$this->load->view("layout", $pagedata);
	   }
	   else
	   {
	   	echo "yes";
	   }


			
		}


}
