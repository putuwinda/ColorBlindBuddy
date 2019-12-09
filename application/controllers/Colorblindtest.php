<?php

class Colorblindtest extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	public function index()
	{
		$this->load->view('header');
		$this->load->view('test_V');
    }
    public function cbtest(){
		// $i = 0;
		// $this->db->query("SELECT ANSWER FROM COLORBLINDTEST;");
		// foreach ($query->result_array() as $row){
		// 		$correct[i] = $row['title'];
		// 		$i=$i+1;
		// }
		$colorblindtest = $this->db
        ->select("answer")
        ->get("colorblindtest")
        ->row();
		$correct = $this->db->get('colorblindtest')->row_array();
		
		$answer = [];
		$answer[0]= document.getElementById("ans1").innerHTML;
		// $answer[1]= document.getElementById("ans2").innerHTML;
		// $answer[2]= document.getElementById("ans3").innerHTML;
		// $answer[3]= document.getElementById("ans4").innerHTML;
		// $answer[4]= document.getElementById("ans5").innerHTML;
		// $answer[5]= document.getElementById("ans6").innerHTML;
		// $answer[6]= document.getElementById("ans7").innerHTML;
		// $answer[7]= document.getElementById("ans8").innerHTML;
		// $answer[8]= document.getElementById("ans9").innerHTML;
		// $answer[9]= document.getElementById("ans10").innerHTML;
		// $answer[10]= document.getElementById("ans11").innerHTML;
		// $answer[11]= document.getElementById("ans12").innerHTML;
		// $answer[12]= document.getElementById("ans13").innerHTML;
		// $answer[13]= document.getElementById("ans14").innerHTML;
		// $answer[14]= document.getElementById("ans15").innerHTML;
		// $answer[15]= document.getElementById("ans16").innerHTML;
		// $answer[16]= document.getElementById("ans17").innerHTML;
		// $answer[17]= document.getElementById("ans18").innerHTML;
		// $answer[18]= document.getElementById("ans19").innerHTML;
		// $answer[19]= document.getElementById("ans20").innerHTML;
		// $answer[20]= document.getElementById("ans21").innerHTML;
		// $answer[21]= document.getElementById("ans22").innerHTML;
		// $answer[22]= document.getElementById("ans23").innerHTML;
		// $answer[23]= document.getElementById("ans24").innerHTML;
		// $answer[24]= document.getElementById("ans25").innerHTML;
		
		$i=0;
		$right=0;
		while(i<2){
			if($answer[i]==$correct[i]){
				$right=$right+1;
			} 
			$i=$i+1;
		}
		$iscolorblind;
		if ($right/$wrong > 0.5){
			$iscolorblind = "normal";
		} elseif ($right/$wrong==0.5) {
			$iscolorblind = "partially colorblinded";
		} else {
			$iscolorblind = "colorblinded";
		}
		// alert("You got "+$right+" right answer out of 25. You are "+$iscolorblind);
		$this->session->set_flashdata('info',$iscolorblind);
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