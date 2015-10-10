<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authenticator_Class extends CI_Controller {

	function __construct(){
		parent::__construct();
		session_start();
		$this->load->library('encryption');
		$this->load->library('form_validation');
	}

	public function authenticator_method(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
		
		if($this->form_validation->run() !== false){

			$this->load->model('auth_model');
			$res = $this->auth_model->user_verification_fxn($this->input->post('username'), $this->input->post('password'));
			
			if($res == true){
				$_SESSION['user_ID'] = $this->input->post('username');
				redirect('Welcome');
			}
		}	
		/*$data = array(
				'img_path' => './authenticator_class/authenticator_method/',
				'img_url' => 'http://localhost/auth1/index.php/authenticator_class/authenticator_method/',
				'img_width' => '150',
				'img_height' => '30');*/

		$this->load->view('login_view');
	}

	public function logout_user(){
		session_destroy();
		$this->load->view('login_view');
	}
}
