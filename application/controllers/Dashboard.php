<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Login_model');
        if ($this->session->userdata('username') == null) {
            redirect(base_url().'login/ceklogin');
        }
    }

    public function index()
    {   
        $this->load->view('_template/wrapper', null, FALSE);
        
        
    }

}

/* End of file Dashboard.php */
