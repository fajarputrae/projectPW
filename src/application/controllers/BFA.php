<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class BFA extends CI_Controller{
		
		public function index(){
			$this->load->model('m_field');
			$data['response'] = $this->m_field->get();
			$this->load->view('v_json', $data);
		}
		
		public function home(){
			$this->load->model('m_field');
			$data['response'] = $this->m_field->get();
			$this->load->view('v_home', $data);
		}
		
		public function contact(){
			$this->load->model('m_field');
			$data['response'] = $this->m_field->get();
			$this->load->view('v_contact', $data);
		}
		
		public function about(){
			$this->load->model('m_field');
			$data['response'] = $this->m_field->get();
			$this->load->view('v_about', $data);
		}
		
		public function event(){
			$this->load->model('m_field');
			$data['response'] = $this->m_field->get();
			$this->load->view('v_event', $data);
		}
		
		public function category(){
			$this->load->model('m_field');
			$data['response'] = $this->m_field->get();
			$this->load->view('v_category', $data);
		}
	}
?>