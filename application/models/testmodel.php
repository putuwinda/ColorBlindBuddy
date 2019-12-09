<?php

class testmodel extends CI_Model {
	
	public function getAnswer()
	{
		$this->db->select("id, answer");
		$this->db->from("colorblindtest");
		
		$query = $this->db->get();
		
		return $query->result();
		
		$num_data_returned = $query->num_rows;
		
		if ($num_data_returned < 1) {
		  echo "There is no data in the database";
		  exit();	
		}
	}
}
