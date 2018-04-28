<?php

	class Listado_de_clientes extends CI_Controller {

		public function index()
		{
			$data['sitio'] = "listado_de_clientes";
			$this->load->view('header', $data);
	        $this->load->view('coatch/listado_de_clientes');
	        $this->load->view('footer');
		}

	}
