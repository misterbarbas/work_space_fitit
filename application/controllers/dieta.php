<?php

class Dieta extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('user/dieta');
        $this->load->view('footer');
    }

}