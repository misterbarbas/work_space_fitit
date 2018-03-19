<?php

	class Politicadecookies extends CI_Controller {

		public function index()
		{
			$this->load->view('header');
	        $this->load->view('infoFitit/politicadecookies');
	        $this->load->view('footer');
		}

	}
