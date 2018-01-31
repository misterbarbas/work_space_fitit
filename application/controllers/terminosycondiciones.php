<?php

	class Terminosycondiciones extends CI_Controller {

		public function index()
		{
			$this->load->view('header');
	        $this->load->view('infoFitit/terminosycondiciones');
	        $this->load->view('footer');
		}

	}
