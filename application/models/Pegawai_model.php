<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai_model extends CI_Model {

    private $table_pegawai = "pegawai";

    function get_list(){
        $this->db->order_by("nama_pgw", "asc");
        return $this->db->get($this->table_pegawai)->result_array();
    }

    function get_data($id = ""){
        $this->db->where("id_pgw", $id);
        return $this->db->get($this->table_pegawai)->row_array();
    }

    function insert_data($data){
        return $this->db->insert($this->table_pegawai, $data);
    }

    function update_data($data, $id){
        $this->db->where("id_pgw", $id);
        return $this->db->update($this->table_pegawai, $data);
    }

    function delete_data($id){
        $this->db->where("id_pgw", $id);
        return $this->db->delete($this->table_pegawai);
    }

}

