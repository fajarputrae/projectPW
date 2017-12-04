<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class BFA extends CI_Controller{
		
		public function __construct() {
			parent::__construct();
			
			// Load form helper library
			$this->load->helper('form');
			
			// Load form validation library
			$this->load->library('form_validation');
			
			// Load session library
			$this->load->library('session');
			
			// Load database
			$this->load->model('m_login');
		}
		
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
		
		public function contact(){
			$this->load->view('v_contact');
		}
		
		public function submit_contact(){
			$this->load->model('m_feedback');
			$data['response'] = $this->m_feedback->post();
			$this->load->view('v_contact', $data);
		}
		
		// Check for user login process
		public function login() {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
			
			if ($this->form_validation->run() == FALSE) {
				if(isset($this->session->userdata['logged_in'])){
					$this->load->view('v_admin');
				}
				else{
					$this->load->view('v_login');
				}
			} 
			else {
				$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
				);
				$result = $this->m_login->login($data);
				if ($result == TRUE) {
					$username = $this->input->post('username');
					$result = $this->m_login->read_user_information($username);
					if ($result != false) {
						$session_data = array(
						'username' => $result[0]->username
						);
						// Add user data in session
						$this->session->set_userdata('logged_in', $session_data);
						$this->load->view('v_admin');
					}
				} 
				else {
					$data = array('error_message' => 'Invalid Username or Password');
					$this->load->view('v_login', $data);
				}
			}
		}
		
		// Logout
		public function logout() {	
			// Removing session data
			$sess_array = array('username' => '');
			$this->session->unset_userdata('logged_in', $sess_array);
			$data['message_display'] = 'Successfully Logout';
			$this->load->view('v_home', $data);
		}
		
	}
?>