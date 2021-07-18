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

    public function detail_barang($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_barang($id,$data)
    {

        $this->db->query("UPDATE barang SET id_barang = $data[id_barang],nama_barang = '$data[nama_barang]',ukuran = $data[ukuran],id_merek = '$data[id_merek]',kuantitas = $data[kuantitas],harga_beli = $data[harga_beli],harga_jual = $data[harga_jual] WHERE id_barang=$id");
    }

    function delete_barang($id){

        $this->db->query("DELETE FROM barang_keluar WHERE id_barang = $id");
        $this->db->query("DELETE FROM barang_masuk WHERE id_barang = $id");
        $this->db->query("DELETE FROM barang WHERE id_barang = $id");

    }


}
?>