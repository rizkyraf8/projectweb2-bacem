<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_Sakit_Model extends CI_Model {

    private $table_sakit = "sakit";

    function get_list(){
        $this->db->order_by("start_date", "asc");
        return $this->db->get($this->table_sakit)->result_array();
    }

    function get_data($id = ""){
        $this->db->where("id_sakit", $id);
        return $this->db->get($this->table_sakit)->row_array();
    }

    function insert_data($data){
        return $this->db->insert($this->table_sakit, $data);
    }

    function update_data($data, $id){
        $this->db->where("id_sakit", $id);
        return $this->db->update($this->table_sakit, $data);
    }

    function delete_data($id){
        $this->db->where("id_sakit", $id);
        return $this->db->delete($this->table_sakit);
    }

}

/* End of file ModelName.php */
