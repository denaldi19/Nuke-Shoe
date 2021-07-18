<?php
class model_user extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Query for CRUD user
    //Sementara menggunakan query builder milik CI

    function create_user($data,$dest){
        return $this->db->insert($dest,$data);
    }
    function read_user()

    {
        return $this->db->query('SELECT * FROM admin');
    }

    function update_user(){
        return $this->db->query('SELECT * FROM admin');

    }

    function delete_user(){
        return $this->db->query('SELECT * FROM admin');

    }


}
?>