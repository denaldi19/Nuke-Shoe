<?php
class model_barang extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Query for CRUD barang
    //Sementara menggunakan query builder milik CI
    function create_barang($data,$dest){
        return $this->db->insert($dest,$data);
    }
    function read_barang()

    {
        return $this->db->query('SELECT * FROM barang');
    }

    public function update_barang($where, $data, $dest)
    {
        $this->db->where($where);
        $this->db->update($dest, $data);
    }

    function delete_barang(){
        return $this->db->query('SELECT * FROM barang');

    }

}
?>