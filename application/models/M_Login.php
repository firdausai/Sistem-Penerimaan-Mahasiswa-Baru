<?php

class M_Login extends CI_Model{

	public function getEmail($email) {
	    $this->db->where('email',$email);
		$result = $this->db->get('account');
		if($result->num_rows()==1){
	        return True;
	    } else {
	        return False;
	    }
	}
    	
    public function login_user($email, $password){
	    $this->db->where('email',$email);
	    $this->db->where('password',$password);

		$result = $this->db->get('account');
	    if($result->num_rows()==1){
	        return $result->row(0);
	    } else {
	        return False;
	    }
    }
      
    public function getId($email, $password) {
        $this->db->select('id');
        $this->db->where('email',$email);
	    $this->db->where('password',$password);
        $query = $this->db->from('account')->get();

        return $query->row_array();
    }

	public function register_user($table,$data){
    	$insert = $this->db->insert('account', $data);

	    if ($insert) {
	      return TRUE;
	    } else {
	      return FALSE;
	    }
  	}



}