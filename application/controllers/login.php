<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * Default controller of the system.
     * 	
     */
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('auth/login');
    }

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */