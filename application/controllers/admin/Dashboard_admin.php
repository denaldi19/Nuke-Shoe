<?php
class Dashboard_admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');

        if($this->session->userdata('user') == NULL ){
            redirect("login");
        }
        if($this->session->userdata('role') != 1 ){
            redirect("user/Dashboard_user");
        }
		
    }
	public function index()
	{
		

	}
    public function read_user(){

    }


}

?>