<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('m_login');
    }

	public function index()
	{
        $this->load->view('templates/auth_header');
        $this->load->view('v_login');
        $this->load->view('templates/auth_footer');
	}
    public function login_aksi(){

        $user = $this->input->post('username', true);
        $pass = md5($this->input->post('password', true));

        // role validasi
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() != FALSE ){

            $where = array(
                'username' => $user,
                'password' => $pass
            );

            $cekLogin = $this->m_login->cek_login($where)->num_rows();

            if($cekLogin > 0){

                $sess_data = array(
                    'login' => 'OK',
                    'username' => $user
                );

                $this->session->set_userdata($sess_data);

                redirect(base_url());
            } else {
                redirect('auth');
            }

        } else {
            $this->load->view('v_login');
        }
    }

    public function registration()
    {   
        if ($this->session->userdata('email')){
            redirect('user');
        }
        $this->form_validation->set_rules('username','username','required|trim');
        $this->form_validation->set_rules('password1','password','required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'password dont match',        
                'min_length' => 'password to short'
            ]
        );
       
            $data['title'] = 'registration pages';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('v_registration');
            $this->load->view('templates/auth_footer');
  
        
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('auth');
    }
}
