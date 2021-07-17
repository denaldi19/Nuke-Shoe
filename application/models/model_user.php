<?php
class model_user extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // CRUD user

    function insert_user($data,$dest){
        return $this->db->insert($dest,$data);
    }


}
?>