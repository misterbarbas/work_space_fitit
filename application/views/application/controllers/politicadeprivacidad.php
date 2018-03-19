<?php

	class Politicadeprivacidad extends CI_Controller {

		public function index()
		{
			$this->load->view('header');
	        $this->load->view('infoFitit/politicadeprivacidad');
	        $this->load->view('footer');
		}

	}
