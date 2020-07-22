<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }

    public function index()
    {
        $this->load->view('login_view');   
    }

    function ceklogin(){
        $post = $this->input->post();
        $username = $post['username'];
        $password = $post['password'];

        $query = $this->Login_model->check_login($username,$password);

        if($query){
            $arrSession = array(  
                "username" => $query['username'],
                "password" => $query['password'],
            );

            $this->session->set_userdata($arrSession);
            redirect('dashboard');
        }else{
            echo "<script>alert('Username dan password salah');window.location = '".base_url('login')."'</script>";
        }
    }

    public function logout() {
        $array_items = array('username', 'password' );
        $this->session->unset_userdata( $array_items );
        redirect( 'login' );
    }

}

/* End of file Login.php */

?>