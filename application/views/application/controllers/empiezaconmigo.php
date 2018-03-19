<?php

	class Empiezaconmigo extends CI_Controller {

		public function index()
		{
			$this->load->view('header');
	        $this->load->view('Empiezaconmigo/empiezaconmigo');
	        $this->load->view('footer');
		}

	}
