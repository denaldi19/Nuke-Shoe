<?php
//Route for logout
class Logout extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		
    }
	public function index()
	{
    //Destroy the session
    session_destroy();
    redirect(base_url('login'));
    }
}

?>

