<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {
    function __construct() {
        parent::__construct();

        $this->load->model('Accounts_model');
    }

    function index() {
        $data['users'] = $this->Accounts_model->get_members();
        $this->load->view('accounts');
    }


  
}
