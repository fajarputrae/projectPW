<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class BFA extends CI_Controller{
		
		public function index(){
			$this->load->view('v_home', $data);
		}
		
		public function home(){
			$this->load->model('m_field');
			$data['response'] = $this->m_field->get();
			$this->load->view('v_home', $data);
		}
		
		public function list_field(){
			$id = $this->input->get('id');
			
			$this->load->model('m_list_field');
			$data['response'] = $this->m_list_field->get($id);
			$this->load->view('v_list_field', $data);
		}
		
		public function contact(){
			$this->load->view('v_contact');
		}
		
		public function about(){
			$this->load->view('v_about');
		}
		
		public function event(){
			$this->load->model('m_field');
			$data['response'] = $this->m_field->get();
			$this->load->view('v_event', $data);
		}
		
		public function category(){
			$this->load->model('m_category');
			$data['response'] = $this->m_category->get();
			$this->load->view('v_category', $data);
		}
	}
?>