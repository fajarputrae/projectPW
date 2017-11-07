<?php
class m_category extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get(){
		$query = $this->db->get('category');
		return $query->result_array();
	}
	
}