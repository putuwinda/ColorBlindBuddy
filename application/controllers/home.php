<?php

class home extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home_V');
	}
}
?>
