<?php

class Chat extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Chat_model');
		$this->load->helper('url');
	}


	public function login_chat()
	{
		$data['sitio'] = "chat";
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		//$this->Chat_model->checkLogged($name,$email);
		$this->load->view('header', $data);
		$this->load->view('login/chat');
		$this->load->view('footer');

	}
}