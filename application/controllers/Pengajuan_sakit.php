<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_sakit extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pengajuan_sakit_model',"Pengajuan_Sakit_Model");
        $this->load->helper('url');
        $this->load->model('Login_model');
        if ($this->session->userdata('username') == null) {
            redirect(base_url().'login/ceklogin');
        }
    }

    public function index()
    {
        $data['page'] = "cuti";
        $data['subpage'] = "List";
        $data['content'] = "pengajuan_sakit/pengajuan_sakit_list";
        $data['listData'] = $this->Pengajuan_Sakit_Model->get_list();
        $this->load->view('_template/wrapper', $data, FALSE);
    }

    public function json()
    {
        header('Content-Type: application/json');
        $arrData = array();

        $query = $this->Pengajuan_Sakit_Model->get_list();

        foreach ($query as $key => $value) {
            $value['action'] = "
            <a class=\"btn btn-success\" href=\"" . base_url(getController() . "/form/" .($value['id_sakit'])) . "\">
            <i class=\"fa fa-edit\"></i>
            </a>";

            $value['action'] .= "
            <a class=\"btn btn-danger\" href=\"" . base_url(getController() . "/delete/" .($value['id_sakit'])) . "\">
            <i class=\"fa fa-trash\"></i>
            </a>";

            array_push($arrData, $value);
        }
        echo json_encode(array("data" => $arrData));
    }

    public function form($id = '')
    {
        $data['page'] = "cuti";
        $data['subpage'] = "Add";
        $data['content'] = "pengajuan_sakit/pengajuan_sakit_form";
        $data['data'] = $this->Pengajuan_Sakit_Model->get_data($id);

        $this->load->view('_template/wrapper', $data, FALSE);
    }

    public function save()
    {
        $post = $this->input->post();

        if (@$post['id_sakit']) {

            $arrSave = array(
                "start_date" => @$post['start_date'],
                "end_date" => @$post['end_date'],
                "surat_sakit" => @$post['surat_sakit'],
                "keterangan" => @$post['keterangan'],
            );

            $this->Pengajuan_Sakit_Model->update_data($arrSave, $post['id_sakit']);
            redirect(getController());
        } else {
            $arrSave = array(
                "start_date" => @$post['start_date'],
                "end_date" => @$post['end_date'],
                "surat_sakit" => @$post['surat_sakit'],
                "keterangan" => @$post['keterangan'],
            );

            $this->Pengajuan_Sakit_Model->insert_data($arrSave);
            redirect(getController());
        }
    }

    public function delete($id = "")
    {   
        $this->Pengajuan_Sakit_Model->delete_data($id);
        redirect(getController());
    }

}

/* End of file Pengajuan_sakit.php */
