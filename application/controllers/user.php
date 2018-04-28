<?php

	class User extends CI_Controller {

		 public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Login_model');
	        $this->load->helper('url');
	    }

		public function index()
		{
			$data['sitio'] = "user";
			$this->load->view('header', $data);
	        $this->load->view('user/perfil');
	        $this->load->view('footer');
		}




	}