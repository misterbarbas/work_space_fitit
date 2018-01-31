<?php

	class Queesfitit extends CI_Controller {

		public function index()
		{
			$this->load->view('header');
	        $this->load->view('infoFitit/queesfitit');
	        $this->load->view('footer');
		}

	}
