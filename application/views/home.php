<?php
	if ( !$this->acl->hasPermission($current_action) ) {
		/*$this->session->set_flashdata('message', "You don't have previliges to access the page.");
		redirect('/auth/login/');*/
		echo "<h1>You don't have previleges to access this page.</h1>";
	} 
	/* Implement whole in else part*/
?>