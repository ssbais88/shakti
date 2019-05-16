<?php
class User extends CI_controller
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
		if(! $this->session->userdata('is_user_logged_in'))
		{
			redirect('home');
		}
	}
	function index()
	{
		$pagedata = array("title"=>"Dashboard Page", "pagename"=>"user/dash");
		$this->load->view("layout", $pagedata);
	}
	function profile()
	{
		$id = $this->session->userdata("id");
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_id($id);
	
		$pagedata = array("title"=>"Profile Page", "pagename"=>"user/profile", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}
	function edit()
	{
		$id = $this->session->userdata("id");
		$this->load->model("usermodel");
		$result=$this->usermodel->select_by_id($id);

		$pagedata = array("title"=>"edit Profile Page", "pagename"=>"user/edit", "result"=>$result);
		$this->load->view("layout", $pagedata);
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}
	function update()
	{
		$this->session->userdata("id");

		$data['full_name']=$this->input->post("full_name");
		$data['gender']=$this->input->post("gender");
		$data['address']=$this->input->post("add");
		$data['city']=$this->input->post("city");
		$data['contact']=$this->input->post("contact");

		$this->load->model('usermodel');
		$this->usermodel->update($id, $data);
		redirect('user');
	}
}
?>