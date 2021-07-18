
<?php
//CRUD barang
class Data_barang extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');

		//Authentication

		if($this->session->userdata('user') == NULL ){
            redirect("login");
        }
		
    }
	public function index()
	{
        $data['barang'] = $this->model_barang->read_barang()->result();
		$this->load->view("barang/read_barang",$data);
	
	}
	public function create_barang(){
		// Form validation
		$this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('ukuran', 'Ukuran', 'required');
        $this->form_validation->set_rules('id_merek', 'Merek', 'required');
        $this->form_validation->set_rules('kuantitas', 'Kuantitas', 'required');
        $this->form_validation->set_rules('harga_beli', 'Harga Beli', 'required');
		$this->form_validation->set_rules('harga_jual', 'Harga Jual', 'required');
        

        if ($this->form_validation->run() == false) {
			
            $this->session->set_flashdata('peringatan', '<script> alert("Data Gagal Di Tambahkan,Mohon Isi Data Dengan Benar");</script>');
			// redirect(base_url('barang/create_barang'));
            $this->load->view("barang/create_barang");
			
            
        } else {
			$id_barang = $this->input->post('id_barang');
            $nama_barang = $this->input->post('nama_barang');
            $ukuran = $this->input->post('ukuran');
            $merek = $this->input->post('id_merek');
            $kuantitas = $this->input->post('kuantitas');
            $harga_beli = $this->input->post('harga_beli');
            $harga_jual = $this->input->post('harga_jual');

			$data = array(
				'id_barang' => $id_barang,
                'nama_barang' => $nama_barang,
                'ukuran' => $ukuran,
                'id_merek' => $merek,
                'kuantitas'=>$kuantitas,
                'harga_beli' => $harga_beli,
                'harga_jual' => $harga_jual,

            );

			$this->model_barang->create_barang($data, 'barang');
            $this->session->set_flashdata('peringatan', '<script> alert("Data Berhasil Di Tambahkan");</script>');
            redirect(base_url('admin/Data_barang'));
	

	}
}

public function update_barang(){

    $id_barang = $this->input->post('id_barang');
    $nama_barang = $this->input->post('nama_barang');
    $ukuran = $this->input->post('ukuran');
    $merek = $this->input->post('id_merek');
    $kuantitas = $this->input->post('kuantitas');
    $harga_beli = $this->input->post('harga_beli');
    $harga_jual = $this->input->post('harga_jual');

    $data = array(
        'id_barang' => $id_barang,
        'nama_barang' => $nama_barang,
        'ukuran' => $ukuran,
        'id_merek' => $merek,
        'kuantitas'=>$kuantitas,
        'harga_beli' => $harga_beli,
        'harga_jual' => $harga_jual,

    );
    $where = array('id_barang' => $id_barang);
    $this->model_barang->update_barang($where, $data, 'barang');
    redirect('admin/Data_barang/index');
} 
}
?>