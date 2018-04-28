<?php

	class Calendario extends CI_Controller {

		public function index()
		{
			$data['sitio'] = "calendario";
			$this->load->view('header', $data);
	        $this->load->view('user/calendario');
	        $this->load->view('footer');
		}

	}
