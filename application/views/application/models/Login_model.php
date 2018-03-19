<?php 

	class Login_model extends CI_Model 
	{
		public function __construct()
		{
			$this->load->database();
		}

		public function login($email, $pass)
		{

			$pass = md5($pass);
			$sql="SELECT * from users where email = '".$email."' AND pass = '".$pass."'";
			$query = $this->db->query($sql);
			if(count($query->result()) == 0)
			{
				return 0;
			}
			else
			{
				foreach ($query->result_array() as $row)
				{
					$this->session->set_userdata('id_user', $row['id_user']);
					$this->session->set_userdata('rol', $row['rol']);
					$this->session->set_userdata('email', $row['email']);
				}
				return 1;
			}
		}

	}
