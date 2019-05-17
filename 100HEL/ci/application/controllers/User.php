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
		// print_r($this->input->post()); die;
		$id = $this->session->userdata("id");

		$data['full_name']=$this->input->post("full_name");
		$data['gender']=$this->input->post("gender");
		$data['address']=$this->input->post("add");
		$data['city']=$this->input->post("city");
		$data['contact']=$this->input->post("contact");

		
		$this->load->model('usermodel');
		$this->usermodel->update($id, $data);
		// print_r($data);die;
		// echo "string";
		redirect("user/profile");
	}
	function change_pass()
	{
		$pagedata = array("title"=>"Change Password Page", "pagename"=>"user/change_pass");
		$this->load->view("layout", $pagedata);
	}
	function update_pass()
	{
		$id=$this->session->userdata('id');
		$current_pass=sha1($this->input->post('current_pass'));
		$new_pass=$this->input->post('new_pass');
		$confirm_pass=$this->input->post('confirm_pass');
		$this->load->model('usermodel');
		$result=$this->usermodel->select_by_id($id);
		// here we take id from usermodel f/n previusly make select_by_id method this is th advantage of ci you can use single method multiple time
		$data=$result->row_array();
		if ($data['password']==$current_pass)
		{
			if ($new_pass==$confirm_pass)
			{
				$arr['password']=sha1($new_pass);
				// make sure $data and $arr array name is diff other wise they overwrite
				$this->usermodel->update($id, $arr);
				redirect("user/profile");
			}
			else
			{
				$this->session->set_flashdata("msg", "Your New Password and Confirm Password is not matched");
				redirect("user/change_pass");
			}
		}
		else
		{
			$this->session->set_flashdata("msg", "Your Current Password is not matched");
			redirect("user/change_pass");
		}
	}
}
?>