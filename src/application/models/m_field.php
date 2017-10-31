<?php
class m_field extends CI_Model{
	
	public function __construct(){
		$this->load->database();
	}
	
	public function get(){
		//$query = $this->db->query('SELECT * FROM field');
		$query = $this->db->get('field');
		return $query->result_array();
	}
	
}