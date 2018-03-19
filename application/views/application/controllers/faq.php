<?php

	class Faq extends CI_Controller {

		public function index()
		{
			$this->load->view('header');
	        $this->load->view('infoFitit/faq');
	        $this->load->view('footer');
		}

	}
