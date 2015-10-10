<?php

class auth_model extends CI_Model{
	function __construct(){


	}

	public function user_verification_fxn($user, $pass){
		$this->load->library('encryption');
		$q = $this
				->db
				->where('username', $user)
				->limit(1)
				->get('users_table');
				
		if($q->num_rows() > 0){

			foreach ($q->result_array() as $row) {
				$encPass = $row['password'];
			}
			
			if($pass == $this->encryption->decrypt($encPass)){
				return true;
			}
		}
		return false;
	}

		/*if($q->num_rows() > 0){
			$encPass = 
			$this->encryption->decrypt();
			return true;
		}*/
		
}