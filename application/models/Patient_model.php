<?php 
class Patient_model extends CI_model{
	
	function add_patient($data){
		$patient_data = array(
			'lastname' => $data['lastname'],
			'firstname' => $data['firstname'],
			'middlename' => $data['middlename'],
			'auxilliaryname' => $data['auxilliaryname'],
			'address' => $data['address'],
			'contact' => $data['contact'],
			'sex' => $data['sex'],
			'allergies' => $data['allergies']
		);
		$this->db->insert('patient', $patient_data);

	}
}
