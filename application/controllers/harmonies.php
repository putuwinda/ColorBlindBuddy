<?php
class harmonies extends CI_Controller {
	public function __construct()
		{
			parent::__construct();

		}
	public function index()
 	{
      $this->load->view('header');
  		$this->load->view('harmonies_V');
  		$this->load->helper('url');


 	}
  public function view_colormix(){
      $this->load->view('header');
      $this->load->view('colormix_V');

  }
  public function view_colorlab(){
      $this->load->view('header');
      $this->load->view('colorlab_V');

  }
	public function view_harmoni(){
			$this->load->view('header');
			$this->load->view('colorharmonizer_V');

	}
}

 ?>
