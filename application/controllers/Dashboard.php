<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct() {
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Dashboard';                                                                 
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('dashboard', $data);
        $this->load->view('templates/footer');
    }   
}
