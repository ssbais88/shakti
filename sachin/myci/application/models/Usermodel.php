<?php
 class Usermodel extends CI_Model{
 	function __construct()
 	{

 		parent:: __construct();
 		$this->load->database();
 	}
    function insert($data)
     {

         $this->db->insert("user",$data); 	
      }

     function select_by_usename($u)
      {
       	$this->db->where("username",$u);
 	    $result=$this->db->get("user");
 	    return $result;
 }




} ?>