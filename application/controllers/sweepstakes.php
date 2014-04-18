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
        if ($page_number == "") {
            $this->load->view('sweepstakes/rewe/index', $this->data);
        } else {
            $this->load->view('sweepstakes/rewe/page_' . $page_number, $this->data);
        }
    }

    //Get sweepstakes data
    public function get_sweepstakes_data() {
        unset($_POST['submit']);
        echo "<pre>"; print_r($_POST); exit;
        $page_number = $_POST['page_number'];
        $user_id = $_POST['user_id'];
        if ($_POST['user_id'] == "") {
            $user_id = $this->mongo_db->insert('Lead', $_POST);
            $user_data = array(
                'first_name' => $_POST['first_name'],
                'last_name' => $_POST['last_name'],
            );
            $this->session->set_userdata($user_data);
        } else {
            $this->mongo_db->where('_id', new MongoId($_POST['user_id']))
            ->set($_POST)
            ->update('Lead');
        }
        redirect(base_url() . "sweepstakes/register_user/" . $page_number . "/" . $user_id);
    }

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */