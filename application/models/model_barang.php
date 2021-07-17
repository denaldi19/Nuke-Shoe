<?php
class model_barang extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // CRUD barang

    function create_barang($data,$dest){
        return $this->db->query('INSERT INTO $dest VALUES $data');
    }
    function read_barang()

    {
        return $this->db->query('SELECT * FROM barang');
    }

    function update_barang(){

    }

    function delete_barang(){

    }

}
?>