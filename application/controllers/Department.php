<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Department_model');
        $this->load->helper('url');
        $this->load->model('Login_model');
        if ($this->session->userdata('username') == null) {
            redirect(base_url().'login/ceklogin');
        }
    }

    public function index()
    {
        $data['page'] = "department";
        $data['subpage'] = "List";
        $data['content'] = "department/department_list";
        $data['listData'] = $this->Department_model->get_list();
        $this->load->view('_template/wrapper', $data, FALSE);
    }

    public function json()
    {
        header('Content-Type: application/json');
        $arrData = array();

        $query = $this->Department_model->get_list();

        foreach ($query as $key => $value) {
            $value['action'] = "
            <a class=\"btn btn-success\" href=\"" . base_url(getController() . "/form/" .($value['id_dpt'])) . "\">
            <i class=\"fa fa-edit\"></i>
            </a>";

            $value['action'] .= "
            <a class=\"btn btn-danger\" href=\"" . base_url(getController() . "/delete/" .($value['id_dpt'])) . "\">
            <i class=\"fa fa-trash\"></i>
            </a>";

            array_push($arrData, $value);
        }
        echo json_encode(array("data" => $arrData));
    }


    public function form($id = '')
    {
        $data['page'] = "department";
        $data['subpage'] = "Add";
        $data['content'] = "department/department_form";
        $data['data'] = $this->Department_model->get_data($id);
        $this->load->view('_template/wrapper', $data, FALSE);
    }

    public function save()
    {
        $post = $this->input->post();

        if (@$post['id_dpt']) {

            $arrSave = array(
                "nama_dpt" => @$post['nama_dpt'],
                "lokasi" => @$post['lokasi'],
            );

            $this->Department_model->update_data($arrSave, $post['id_dpt']);
            redirect(getController());
        } else {
            $arrSave = array(
                "nama_dpt" => @$post['nama_dpt'],
                "lokasi" => @$post['lokasi'],
            );

            $this->Department_model->insert_data($arrSave);
            redirect(getController());
        }
    }

    public function delete($id = "")
    {   
        $this->Department_model->delete_data($id);
        redirect(getController());
    }
}

/* End of file Department.php */

