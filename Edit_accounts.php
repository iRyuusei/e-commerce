<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Edit_accounts extends CI_Controller{

    public function updtitle() {   
        $data = array
        (
            'users' => 'users', // pass the real table name
            'u_id' => $this->input->post('u_id'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $this->input->post('password'),
        );
        

         $this->load->model('Edit_accounts_model'); // load the model first
        if($this->Edit_accounts_model->upddata($data)) // call the method from the model
        {
        // update successful
        }
        else
        {
        // update not successful
        }
    }
}
?>
