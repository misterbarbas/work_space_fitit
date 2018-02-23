<?php

	class Calendario extends CI_Controller {

		public function index()
		{
			$this->load->view('header');
	        $this->load->view('user/calendario');
	        $this->load->view('footer');
		}

	}
