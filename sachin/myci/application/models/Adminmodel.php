<?php
class Adminmodel extends CI_Model
{
	function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	function select_by_id($id)	
	{
		$this->db->where("id",$a);
		$result=$this->db->get("adminn");
		return $result;
	}
	function select_by_username($a)
	{
		$this->db->where("username",$a);
		$result= $this->db->get("adminn");
		return $result;
	}


}
 ?>