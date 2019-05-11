<?php
class Home extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
	}
	function index()
	{
		$pagedata = array("title"=>"Home Page", "pagename"=>"home");
		$this->load->view("layout", $pagedata);
	}
	function about()
	{
		$pagedata = array("title"=>"About Page", "pagename"=>"about");
		$this->load->view("layout", $pagedata);
	}
	function contact()
	{
		$pagedata = array("title"=>"Contact Page", "pagename"=>"contact");
		$this->load->view("layout", $pagedata);
	}
	function help()
	{
		$pagedata = array("title"=>"Help Page", "pagename"=>"help");
		$this->load->view("layout", $pagedata);
	}
	function login()
	{
		$pagedata = array("title"=>"Login Page", "pagename"=>"login");
		$this->load->view("layout", $pagedata);
	}




	function signup()
	{

		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name", "Full Name", "required");
		$this->form_validation->set_rules("username", "Username/Email", "required|valid_email");
		$this->form_validation->set_rules("pass", "Password", "required");
		$this->form_validation->set_rules("re_pass", "Re-Password", "required|matches[pass]");
		$this->form_validation->set_rules("add", "Address", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");
		$this->form_validation->set_rules("contact", "Contact", "required|numeric|exact_length[10]");


		if($this->form_validation->run()==false)
		{
			$pagedata = array("title"=>"Signup Page", "pagename"=>"signup");
			$this->load->view("layout", $pagedata);
		}
		else
		{
			// $a = $_POST['full_name'];
			$data['full_name'] = $this->input->post("full_name");
			$data['username'] = $this->input->post("username");
			$data['password'] = $this->input->post("pass");
			$data['address'] = $this->input->post("add");
			$data['city'] = $this->input->post("city");
			$data['gender'] = $this->input->post("gender");
			$data['contact'] = $this->input->post("contact");

			$this->load->model("usermodel");
			$this->usermodel->insert($data);

			redirect("home/login");


		}



		
	}
}
?>

