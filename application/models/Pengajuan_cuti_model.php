<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_Cuti_Model extends CI_Model {

    private $table_cuti = "cuti";

    function get_list(){
        $this->db->order_by("start_date", "asc");
        return $this->db->get($this->table_cuti)->result_array();
    }

    function get_data($id = ""){
        $this->db->where("id_cuti", $id);
        return $this->db->get($this->table_cuti)->row_array();
    }

    function insert_data($data){
        return $this->db->insert($this->table_cuti, $data);
    }

    function update_data($data, $id){
        $this->db->where("id_cuti", $id);
        return $this->db->update($this->table_cuti, $data);
    }

    function delete_data($id){
        $this->db->where("id_cuti", $id);
        return $this->db->delete($this->table_cuti);
    }

}

/* End of file ModelName.php */
