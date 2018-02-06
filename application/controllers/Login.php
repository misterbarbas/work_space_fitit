<?php

	class Login extends CI_Controller {

		 public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Login_model');
	        $this->load->helper('url');
	    }

		public function index()
		{
			$this->load->view('header');
	        $this->load->view('login/login');
	        $this->load->view('footer');
	        //exit;
		}

		public function login_user()
		{
			$email = $this->input->post('email');
			$pass = $this->input->post('pass');
			$this->Login_model->login($email,$pass);
		}

		public function logout()
		{
			$this->session->sess_destroy();
  			redirect('http://localhost/fitit_v2');
		}


	}