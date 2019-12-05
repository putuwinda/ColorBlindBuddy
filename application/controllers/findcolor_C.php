<?php
class findcolor_C extends CI_Controller {
	public function __construct()
		{
			parent::__construct();

		}
	public function index()
 	{
      $this->load->view('header');
  		$this->load->view('findcolor_V');
  		$this->load->helper('url');

 	}
}

 ?>
