<?php

class Chat_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function login($name, $email)
	{
		
	    // $sql = "INSERT INTO webchat_users (name, gravatar) VALUES ('".$name."','".$email."')";
	   	 //echo $query = $this->db->query($sql);
	}




	function checkLogged(){

		//$arrayName = array('email' => ,$email);
	}

}