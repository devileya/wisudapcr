<?php

class Wisudawan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('PesanModel');
        $this->load->model('WisudawanModel');
        $this->load->helper(array('url', 'file'));
    }

//    fungsi untuk mengarahkan ke halaman input data wisudawan
    function index()
    {
        $this->load->view('wisudawan/index');
    }

//    fungsi untuk menyimpan data wisudawan
    function add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'prodi' => $this->input->post('prodi')
        );
        $id_wisudawan = $this->WisudawanModel->insert($data);
        redirect("wisudawan/pesan/$id_wisudawan");
    }

//    fungsi untuk mengarahkan ke halaman input pesan dan kesan
    function pesan(){
        $this->load->view('wisudawan/pesan');
    }

//    fungsi untuk menyimpan data pesan dan kesan wisudawan
    function addPesan()
    {
        $data = array(
            'wisudawan_id' => $this->uri->segment(3),
            'pesan' => $this->input->post('pesan'),
            'kesan' => $this->input->post('kesan'),
            'tanggal' => date("Y-m-d H:i:s")
        );
        $this->PesanModel->insert($data);
        redirect('wisudawan/terimaKasih');
    }

    function terimaKasih(){
        $this->load->view('wisudawan/terimakasih');
    }
}