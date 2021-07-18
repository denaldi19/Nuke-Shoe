<?php
class Login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
		
    }
	public function index()
	{
		
		$this->login();
	}

	    public function login(){

		// Form validation for login
		$this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
            $this->load->view('login.php');
        } else {

            $this->_login();
        }
		
	}
	private function _login()
    {
        $username = $this->input->post('username',true);
        $password = md5($this->input->post('password'));
        $user = $this->db->get_where('admin', ['username' => $username])->row_array();
		// User validation
        if ($user && $password == $user['password']) {    
			//Set session       
                $sesi = array(
                    'user' => $user['email'],
                    'role' =>$user['id_roles'],
                    'login'=>'masuk'
                ); 
                $this->session->set_userdata($sesi);
                
                //Redirect page base on role user
                if($user['id_roles'] == 1){
                    redirect(base_url("admin/Dashboard_admin"));    
                }else if($user['id_roles'] == 2){
                    
                    redirect(base_url("user/Dashboard_user"));  

                }
                        
        } 
        //Error handling
		else{
            $this->session->set_flashdata('login','<div class="alert alert-danger">Login Gagal,Harap Masukan Email Dan Password Dengan Benar</div>');
            $this->load->view('login.php');
            
        }
}

}

	?>