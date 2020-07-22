<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Department_model extends CI_Model {

    private $table_department = "department";

    function get_list(){
        $this->db->order_by("nama_dpt", "asc");
        return $this->db->get($this->table_department)->result_array();
    }

    function get_data($id = ""){
        $this->db->where("id_dpt", $id);
        return $this->db->get($this->table_department)->row_array();
    }

    function insert_data($data){
        return $this->db->insert($this->table_department, $data);
    }

    function update_data($data, $id){
        $this->db->where("id_dpt", $id);
        return $this->db->update($this->table_department, $data);
    }

    function delete_data($id){
        $this->db->where("id_dpt", $id);
        return $this->db->delete($this->table_department);
    }

}

