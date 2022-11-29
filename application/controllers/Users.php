<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

    function __construct() {
        parent::__construct();

        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }

        $this->load->model('m_users');
    }

	public function index()
	{
        $data['title'] = "Manajemen Data Pengguna";

        $data['users'] = $this->m_users->tampil_data()->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
		$this->load->view('users/v_data', $data); 
        $this->load->view('templates/footer');

	}

    function tambah(){
        $data['title'] = "Tambah Data Pengguna";

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
		$this->load->view('users/v_data_tambah', $data);
        $this->load->view('templates/footer');
    }
    function insert(){
        $u = $this->input->post('username');
        $n = $this->input->post('nama_lengkap');
        $p = md5($this->input->post('password'));

        $data = array(
            'username' => $u,
            'nama_lengkap' => $n,
            'password' => $p
        );

        $this->m_users->insert_data($data);

        redirect('users');
    }
    function edit($id){
        $data['title'] = "Edit Data Pengguna";
        
        $where = array('id' => $id);
        $data['r'] = $this->m_users->edit_data($where)->row_array();
        
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
		$this->load->view('users/v_data_edit', $data);
        $this->load->view('templates/footer');
    }

    function update(){
        $id = $this->input->post('id');
        $u = $this->input->post('username');
        $n = $this->input->post('nama_lengkap');
        $p = md5($this->input->post('password'));

        $data = array(
            'username' => $u,
            'nama_lengkap' => $n,
            'password' => $p
        );

        $where = array('id' => $id);
        $this->m_users->update_data($data, $where);

        redirect('users');
        
    }

    function hapus($id){
        $where = array('id' => $id);
        $this->m_users->hapus_data($where);

        redirect('users');
    }
}
