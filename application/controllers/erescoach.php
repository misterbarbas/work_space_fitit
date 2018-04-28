<?php

	class Erescoach extends CI_Controller {

		public function index()
		{
			$data['sitio'] = "erescoach";
			$this->load->view('header',$data);
	        $this->load->view('infoFitit/erescoach',$data);
	        $this->load->view('footer');
		}

	}
