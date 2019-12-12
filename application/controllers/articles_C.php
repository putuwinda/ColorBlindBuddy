<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class articles_C extends CI_Controller {
	public function __construct()
		{
			parent::__construct();

		}
	public function index()
 	{
      $this->load->view('header');
  		$this->load->view('articles_V');
  		$this->load->helper('url');
			

 	}
  public function view_article1(){
      $this->load->view('header');
      $this->load->view('article1_V');
  }
  public function view_article2(){
      $this->load->view('header');
      $this->load->view('article2_V');
  }
  public function view_article3(){
      $this->load->view('header');
      $this->load->view('article3_V');
  }
  public function view_article4(){
      $this->load->view('header');
      $this->load->view('article4_V');
  }
 }
 ?>
