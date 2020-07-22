<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cabang extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cabang_model');
        $this->load->helper('url');
        $this->load->model('Login_model');
        if ($this->session->userdata('username') == null) {
            redirect(base_url().'login/ceklogin');
        }
    }

    public function index()
    {
        $data['page'] = "cabang";
        $data['subpage'] = "List";
        $data['content'] = "cabang/cabang_list";
        $data['listData'] = $this->Cabang_model->get_list();
        $this->load->view('_template/wrapper', $data, FALSE);
    }

    public function json()
    {
        header('Content-Type: application/json');
        $arrData = array();

        $query = $this->Cabang_model->get_list();

        foreach ($query as $key => $value) {
            $value['action'] = "
            <a class=\"btn btn-success\" href=\"" . base_url(getController() . "/form/" .($value['id_cabang'])) . "\">
            <i class=\"fa fa-edit\"></i>
            </a>";

            $value['action'] .= "
            <a class=\"btn btn-danger\" href=\"" . base_url(getController() . "/delete/" .($value['id_cabang'])) . "\">
            <i class=\"fa fa-trash\"></i>
            </a>";

            array_push($arrData, $value);
        }
        echo json_encode(array("data" => $arrData));
    }

    public function form($id = '')
    {
        $data['page'] = "cabang";
        $data['subpage'] = "Add";
        $data['content'] = "cabang/cabang_form";
        $data['data'] = $this->Cabang_model->get_data($id);

        $this->load->view('_template/wrapper', $data, FALSE);
    }

    public function save()
    {
        $post = $this->input->post();

        if (@$post['id_cabang']) {

            $arrSave = array(
                "nama_cabang" => @$post['nama_cabang'],
                "alamat" => @$post['alamat'],
            );

            $this->Cabang_model->update_data($arrSave, $post['id_cabang']);
            redirect(getController());
        } else {
            $arrSave = array(
                "nama_cabang" => @$post['nama_cabang'],
                "alamat" => @$post['alamat'],
            );

            $this->Cabang_model->insert_data($arrSave);
            redirect(getController());
        }
    }

    public function delete($id = "")
    {   
        $this->Cabang_model->delete_data($id);
        redirect(getController());
    }
    
}

/* End of file Cabang.php */
