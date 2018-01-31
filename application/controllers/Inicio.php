<?php

	class Inicio extends CI_Controller {

		 public function __construct()
	    {
	        parent::__construct();
	        $this->load->model('Inicio_model');
	        $this->load->helper('url');

	    }

		public function index()
		{
			$data['coatchs'] = $this->Inicio_model->coatchs();
			$data['nuevos'] = $this->Inicio_model->nuevos();
			//var_dump($data);
			//return 0;
			$this->load->view('header');
	        $this->load->view('pages', $data);
	        $this->load->view('footer');
		}

		public function influencer($id)
		{
			$data['coatch'] = $this->Inicio_model->coatch($id);
			$this->load->helper('url');
			$this->load->view('header');
	        $this->load->view('influencer', $data);
	        $this->load->view('footer');
		}

	}