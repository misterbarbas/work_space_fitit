<?php

	class Erescoach extends CI_Controller {

		public function index()
		{
			$this->load->view('header');
	        $this->load->view('infoFitit/erescoach');
	        $this->load->view('footer');
		}

	}
