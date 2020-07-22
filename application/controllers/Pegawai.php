<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pegawai_model');
        $this->load->helper('url');
        $this->load->model('Login_model');
        if ($this->session->userdata('username') == null) {
            redirect(base_url().'login/ceklogin');
        }
    }

    public function index()
    {
        $data['page'] = "Pegawai";
        $data['subpage'] = "List";
        $data['content'] = "pegawai/pegawai_list";
        $data['listData'] = $this->Pegawai_model->get_list();
        $this->load->view('_template/wrapper', $data, FALSE);
    }

    public function json()
    {
        header('Content-Type: application/json');
        $arrData = array();

        $query = $this->Pegawai_model->get_list();

        foreach ($query as $key => $value) {
            $value['action'] = "
            <a class=\"btn btn-success\" href=\"" . base_url(getController() . "/form/" .($value['id_pgw'])) . "\">
            <i class=\"fa fa-edit\"></i>
            </a>";

            $value['action'] .= "
            <a class=\"btn btn-danger\" href=\"" . base_url(getController() . "/delete/" .($value['id_pgw'])) . "\">
            <i class=\"fa fa-trash\"></i>
            </a>";

            array_push($arrData, $value);
        }
        echo json_encode(array("data" => $arrData));
    }

    public function form($id = '')
    {
        $data['page'] = "Pegawai";
        $data['subpage'] = "Add";
        $data['content'] = "pegawai/pegawai_form";
        $data['data'] = $this->Pegawai_model->get_data($id);

        $this->load->view('_template/wrapper', $data, FALSE);
    }

    public function save()
    {
        $post = $this->input->post();

        if (@$post['id_pgw']) {

            $arrSave = array(
                "nama_pgw" => @$post['nama_pgw'],
                "bdate" => @$post['bdate'],
                "jabatan" => @$post['jabatan'],
                "jenis_kelamin" => @$post['jenis_kelamin'],
                "alamat" => @$post['alamat'],
            );

            $this->Pegawai_model->update_data($arrSave, $post['id_pgw']);
            redirect(getController());
        } else {
            $arrSave = array(
                "nama_pgw" => @$post['nama_pgw'],
                "bdate" => @$post['bdate'],
                "jabatan" => @$post['jabatan'],
                "jenis_kelamin" => @$post['jenis_kelamin'],
                "alamat" => @$post['alamat'],
            );

            $this->Pegawai_model->insert_data($arrSave);
            redirect(getController());
        }
    }

    public function delete($id = "")
    {   
        $this->Pegawai_model->delete_data($id);
        redirect(getController());
    }
}

/* End of file Department.php */

