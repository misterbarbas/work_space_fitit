<?php

	class Queesfitit extends CI_Controller {

		public function index()
		{
			$data['sitio'] = "queesfitit";
			$this->load->view('header', $data);
	        $this->load->view('infoFitit/queesfitit', $data);
	        $this->load->view('footer');
		}

	}
