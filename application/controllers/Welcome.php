<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}

	public function add_patient()
	{
		$this->load->view('header');
		$this->load->view('AddPatient');
	}

	public function addpatient() {

		$data = array (
			'lastname' => $this->input->post('lastname'),
			'firstname'=> $this->input->post('firstname'),
			'middlename' => $this->input->post('middlename'),
			'auxilliaryname' => $this->input->post('auxilliaryname'),
			'birthdate' => $this->input->post('product_name'),
			'address' => $this->input->post('address'),
			'contact' => $this->input->post('contact'),
			'sex' => $this->input->post('sex'),
			'allergies' => $this->input->post('desc')
			);


			 $this->load->model('Patient_model');
       		 $this->Patient_model->add_patient($data);
	}
	public function patient_profile() {
		$this->load->view('header');
		$this->load->view('patient_profile');
	}
}
