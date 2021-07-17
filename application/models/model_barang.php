<?php
class model_barang extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    function show_data()
    {
        return $this->db->query('SELECT * FROM barang');
    }
}
?>