<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_cuti_model extends CI_Model {

    private $table_cuti = "cuti";

    function get_list(){
        $this->db->order_by("start_date", "asc");
        return $this->db->get($this->table_cuti)->result_array();
    }

    function get_data($id = ""){
        $this->db->where("id_cuti", $id);
        return $this->db->get($this->table_cuti)->result_array();
    }

}

/* End of file ModelName.php */
