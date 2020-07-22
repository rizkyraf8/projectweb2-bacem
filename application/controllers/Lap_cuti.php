<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lap_cuti extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Lap_cuti_model');
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
        $data['content'] = "lap_cuti/lap_cuti_list";
        $data['listData'] = $this->Lap_cuti_model->get_list();
        $this->load->view('_template/wrapper', $data, FALSE);
    }

    public function json()
    {
        header('Content-Type: application/json');
        $arrData = array();

        $query = $this->Lap_cuti_model->get_list();

        foreach ($query as $key => $value) {
            $value['action'] = "
            <a class=\"btn btn-success\" href=\"" . base_url(getController() . "/xls/" .$value['id_cuti']) . "\">
            <i class=\"fa fa-file-excel\">EXCEL</i>
            </a>";

            $value['action'] .= "
            <a class=\"btn btn-danger\" href=\"" . base_url(getController() . "/pdf/" .$value['id_cuti']) . "\">
            <i class=\"fa fa-file-pdf\">PDF</i>
            </a>";

            array_push($arrData, $value);
        }
        echo json_encode(array("data" => $arrData));
    }

    public function save()
    {
        $post = $this->input->post();

        if (@$post['id_cuti']) {

            $arrSave = array(
                "start_date" => @$post['start_date'],
                "end_date" => @$post['end_date'],
                "keterangan" => @$post['keterangan'],
            );

            $this->Lap_cuti_model->update_data($arrSave, $post['id_cuti']);
            redirect(getController());
        } else {
            $arrSave = array(
                "start_date" => @$post['start_date'],
                "end_date" => @$post['end_date'],
                "keterangan" => @$post['keterangan'],
            );

            $this->Lap_cuti_model->insert_data($arrSave);
            redirect(getController());
        }
    }

    public function delete($id = "")
    {   
        $this->Lap_cuti_model->delete_data($id);
        redirect(getController());
    }

    public function pdf()
    {
        $id = $this->uri->segment( 3 );
        $this->load->library('Pdf');
        $data['data'] = $this->Lap_cuti_model->get_data($id);
        $this->load->view('lap_cuti/lap_cuti_pdf', $data);
    }

    public function xls()
    {
        $id = $this->uri->segment( 3 );
        $query = $this->Lap_cuti_model->get_data($id);
        
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=\"Report.xls\"");
        header("Content-Transfer-Encoding: binary ");
        
        
        $this->load->view('lap_cuti/lap_cuti_xls', array("data" => $query), FALSE);
    }

}

/* End of file Pengajuan_cuti.php */
