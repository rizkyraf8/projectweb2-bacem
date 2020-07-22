<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_sakit_model extends CI_Model {

    private $table_sakit = "sakit";

    function get_list(){
        $this->db->order_by("start_date", "asc");
        return $this->db->get($this->table_sakit)->result_array();
    }

    function get_data($id = ""){
        $this->db->where("id_sakit", $id);
        return $this->db->get($this->table_sakit)->result_array();
    }

}

/* End of file ModelName.php */
