<?php

	class Contactanos extends CI_Controller {

		public function index()
		{
			$this->load->view('header');
	        $this->load->view('infoFitit/contactanos');
	        $this->load->view('footer');
		}

	}
