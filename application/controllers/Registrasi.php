<?php
class Registrasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

    public function index()
    {
       $this->register();
       
    }
    public function register()
    {
		    
		$this->form_validation->set_rules('username', 'UserName', 'required|trim', [
            'required' => 'Username Tidak Boleh Kosong'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim', [
            'required' => 'Email Tidak Boleh Kosong',
            'valid_email' => 'Masukan Email Yang Valid',
            'is_unique' => 'Email Sudah Terdaftar'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('registrasi.php');
           
        }else{
            $id_user = $this->input->post('id_user');
            $username= htmlspecialchars($this->input->post('username', true));
            $email = htmlspecialchars($this->input->post('email', true));
            $password = md5($this->input->post('password'));

			$this->load->view('registrasi.php');


			$data = array(
				'id_user' => $id_user,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'id_roles' =>2,
            );

			$user=$this->model_user->insert_user($data, 'admin');

			if($user){
                $this->session->set_flashdata("regis","<div class='alert alert-success'>User Berhasil Di Tambahkan</div>");
                redirect(base_url("Login"));
            }else{
                $this->session->set_flashdata("regis","<div class='alert alert-danger'>User gagal Di Tambahkan</div>");
                redirect(base_url("Login"));
            }

		}
		
    }
}