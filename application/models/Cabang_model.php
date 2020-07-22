<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang_model extends CI_Model {

    private $table_cabang = "cabang";

    function get_list(){
        $this->db->order_by("nama_cabang", "asc");
        return $this->db->get($this->table_cabang)->result_array();
    }

    function get_data($id = ""){
        $this->db->where("id_cabang", $id);
        return $this->db->get($this->table_cabang)->row_array();
    }

    function insert_data($data){
        return $this->db->insert($this->table_cabang, $data);
    }

    function update_data($data, $id){
        $this->db->where("id_cabang", $id);
        return $this->db->update($this->table_cabang, $data);
    }

    function delete_data($id){
        $this->db->where("id_cabang", $id);
        return $this->db->delete($this->table_cabang);
    }

}

/* End of file ModelName.php */
