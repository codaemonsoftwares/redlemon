<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
//		$this->load->database();
//		$this->load->helper('url'); 
//		$this->load->library('mongo_db'); // SUBODH :: Use $this->mongo_db instance for accessign
		$user = $this->mongo_db->get_where('test', array('name.first_name' => "Subodh"));
		echo "<pre>"; print_r($user); echo "</pre>";
                die();
		// Get the user's ID and add it to the config array
		//$config = array('userID'=>'12345');
		// Load the ACL library and pas it the config array
		//$this->load->library('acl',$config);
		$current_action = $this->router->method ; 
		// If the user does not have permission either in 'user_perms' or 'role_perms' redirect to login, or restricted, etc		
		/*$query = $this->db->query('SELECT * FROM user_roles');
		print_r($query); */
		/*if ( !$this->acl->hasPermission($current_action) ) {
			//redirect('/auth/login/');	
			echo "<h1>Sorry you are not authenticated user.</h1>";		
		}*/
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */