<?php

class Colorblindtest extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function index()
	{
		$this->load->helper('form');
		$this->load->view('header');
		$this->load->model('testmodel');
		$this->data['answer'] = $this->testmodel->getAnswer();
		$this->load->view('test_V');
    }
    public function testresult(){
		$this->load->helper('form');
		$this->data['checks'] = array(
			'answ1' => $this->input->post('ans1'),
			'answ2' => $this->input->post('ans2'),
			'answ3' => $this->input->post('ans3'),
			'answ4' => $this->input->post('ans4'),
			'answ5' => $this->input->post('ans5'),
			'answ6' => $this->input->post('ans6'),
			'answ7' => $this->input->post('ans7'),
			'answ8' => $this->input->post('ans8'),
			'answ9' => $this->input->post('ans9'),
			'answ10' => $this->input->post('ans10'),
			'answ11' => $this->input->post('ans11'),
			'answ12' => $this->input->post('ans12'),
			'answ13' => $this->input->post('ans13'),
			'answ14' => $this->input->post('ans14'),
			'answ15' => $this->input->post('ans15'),
			'answ16' => $this->input->post('ans16'),
			'answ17' => $this->input->post('ans17'),
			'answ18' => $this->input->post('ans18'),
			'answ19' => $this->input->post('ans19'),
			'answ20' => $this->input->post('ans20'),
			'answ21' => $this->input->post('ans21'),
			'answ22' => $this->input->post('ans22'),
			'answ23' => $this->input->post('ans23'),
			'answ24' => $this->input->post('ans24'),
			'answ25' => $this->input->post('ans25'),
	   );
		$this->load->model('testmodel');
		$this->data['answer'] = $this->testmodel->getAnswer();
		$this->load->view('header');
		$this->load->view('testresult_V', $this->data);
	}
	// public function enable_disable1() { 
	// 	document.getElementById("ans1").disabled = true;
	// } 
	// public function enable_disable2() {
	// 	document.getElementById("ans2").disabled = true;
	// }
	// public function enable_disable3() {
	// 	document.getElementById("ans3").disabled = true;
	// }
	// public function enable_disable4() {
	// 	 document.getElementById("ans4").disabled = true;
	// }
	// public function enable_disable5() {
	// 	document.getElementById("ans5").disabled = true;
	// }
	// public function enable_disable6() {
	// 	 document.getElementById("ans6").disabled = true;
	// }
	// public function enable_disable7() {
	// 	document.getElementById("ans7").disabled = true;
	// }
	// public function enable_disable8() {
	// 	document.getElementById("ans8").disabled = true;
	// }
	// public function enable_disable9() {
	// 	document.getElementById("ans9").disabled = true;
	// }
	// public function enable_disable10() {
	// 	document.getElementById("ans10").disabled = true;
	// }
	// public function enable_disable11() {
	// 	document.getElementById("ans11").disabled = true;
	// }
	// public function enable_disable12() {
	// 	document.getElementById("ans12").disabled = true;
	// }
	// public function enable_disable13() {
	// 	document.getElementById("ans13").disabled = true;
	// }
	// public function enable_disable14() {
	// 	document.getElementById("ans14").disabled = true;
	// }
	// public function enable_disable15() {
	// 	document.getElementById("ans15").disabled = true;
	// }
	// public function enable_disable16() {
	// 	document.getElementById("ans16").disabled = true;
	// }
	// public function enable_disable17() {
	// 	document.getElementById("ans17").disabled = true;
	// }
	// public function enable_disable18() {
	// 	document.getElementById("ans18").disabled = true;
	// }
	// public function enable_disable19() {
	// 	document.getElementById("ans19").disabled = true;
	// }
	// public function enable_disable20() {
	// 	document.getElementById("ans20").disabled = true;
	// }
	// public function enable_disable21() {
	// 	document.getElementById("ans21").disabled = true;
	// }
	// public function enable_disable22() {
	// 	document.getElementById("ans22").disabled = true;
	// }
	// public function enable_disable23() {
	// 	document.getElementById("ans23").disabled = true;
	// }
	// public function enable_disable24() {
	// 	document.getElementById("ans24").disabled = true;
	// }
	// public function enable_disable25() {
	// 	document.getElementById("ans25").disabled = true;
	// }
}