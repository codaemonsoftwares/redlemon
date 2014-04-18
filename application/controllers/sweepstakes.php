<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Sweepstakes extends CI_Controller {

    /**
     *  Controller for Sweepstakes.
     *
     */
    function __construct() {
        parent::__construct();
    }

    public function register_user() {
        $page_number = $this->uri->segment(3);
        $this->data['sweepstake_id'] = '1'; // SUBODH :: Needs to be dynamic
        $this->data['sweepstake_url'] = '1';
        if ($page_number == "") {
            $this->load->view('sweepstakes/rewe/index', $this->data);
        } else {
            $this->load->view('sweepstakes/rewe/page_' . $page_number, $this->data);
        }
    }

    //Get sweepstakes data
    public function get_sweepstakes_data() {
        unset($_POST['submit']);
        
        $user_data = array();
        
        $common_data['sweepstake_id'] = (isset($_POST['sweepstake_id']) && $_POST['sweepstake_id'] !='') ? $_POST['sweepstake_id'] : '';
        $common_data['sweepstake_url'] = (isset($_POST['sweepstake_url']) && $_POST['sweepstake_url'] !='') ? $_POST['sweepstake_url'] : '';
        $common_data['date_inserted'] = date('Y-m-d h:i:s');
        $common_data['date_modified'] = date('Y-m-d h:i:s');
        
        $user_data['gender'] = (isset($_POST['gender']) && $_POST['gender'] !='') ? $_POST['gender'] : '';
        $page_number = (isset($_POST['page_number']) && $_POST['page_number'] !='') ? $_POST['page_number'] : 1; 
        $optin = (isset($_POST['agree']) && strtolower($_POST['agree']) == 'yes') ? 1 : 0;      
        $user_data['first_name'] = array('value' => (isset($_POST['first_name']) && $_POST['first_name'] != '') ? $_POST['first_name'] : '', 
                                        'date_inserted' => $common_data['date_inserted'], 
                                        'date_modified' => $common_data['date_modified'],  
        								'sweepstake' => $common_data
                                        );
        $user_data['last_name'] = array('value' => (isset($_POST['last_name']) && $_POST['last_name'] != '') ? $_POST['last_name'] : '', 
                                        'date_inserted' => $common_data['date_inserted'], 
                                        'date_modified' => $common_data['date_modified'],  
        								'sweepstake' => $common_data
                                        );
        $user_data['email'] = array('email_id' => (isset($_POST['email']) && $_POST['email'] != '') ? $_POST['email'] : '',
                                    'email_optin_flag' => $optin,
                                    'single_optin_flag' => $optin, 
                                    'double_optin_flag' => 0,
                                    'current_status' => 0,
                                    'suspicious_flag' => 0,
                                    'date_inserted' => $common_data['date_inserted'], 
                                    'date_modified' => $common_data['date_modified'],  
        							'sweepstake' => $common_data
                                    );
       $common_data['current_page'] = $page_number;
       $common_data['registration_type'] = ($page_number >=2) ? 'half' : 'full';
       $common_data['current_status'] = 'active';
       $common_data['user_ip'] = $_SERVER['REMOTE_ADDR'];
       $common_data['plausibility_error_count'] = 0;
       $common_data['agree'] = $optin;
       $user_data['registration_history'] = array($common_data);
       //echo "<pre>"; print_r($user_data); exit;        
       $user_id = $_POST['user_id'];
        if ($_POST['user_id'] == "") {
            $user_id = $this->mongo_db->insert('Lead', $user_data);
            $user_data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
            );
            //$this->session->set_userdata($user_data);
        } else {
            $this->mongo_db->where('_id', new MongoId($_POST['user_id']))
            ->set($user_data)
            ->update('Lead');
        }
        redirect(base_url() . "sweepstakes/register_user/" . $page_number . "/" . $user_id);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */