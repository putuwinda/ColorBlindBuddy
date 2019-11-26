<?php

class Colorblindtest extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('test_V');
    }
}