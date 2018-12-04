<?php

	class Edit_accounts_model extends CI_Model{

		public function upddata($data) {
    		extract($data);
		    $this->db->where('u_id', $u_id);
		    
		    $this->db->update($users, array('username' => $username));
		    $this->db->update($users, array('email' => $email));
		    $this->db->update($users, array('password' => $password));
		    return true;
		  $this->load->view('edit_accounts'); 
}
	}
	
?>