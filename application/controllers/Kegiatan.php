<?php

class Kegiatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('KegiatanModel');
        $this->load->helper(array('url', 'file'));
    }

    function index()
    {
        $data["data"] = $this->KegiatanModel->get();
        $this->load->view('kegiatan/index', $data);
    }

//   Fungsi untuk menambahkan kegiatan
    function add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'divisi' => $this->input->post('divisi'),
            'tanggal' => $this->input->post('tanggal'),
            'kegiatan' => $this->input->post('kegiatan'),
            'status' => "Open",
        );
        $this->KegiatanModel->insert($data);
        redirect("Kegiatan/lists");
    }

//    Fungsi untuk melihat daftar kegiatan
    function lists()
    {
        $data["data"] = $this->KegiatanModel->get();
        $this->load->view('kegiatan/lists', $data);
    }

    function edit()
    {
        $id = $this->uri->segment('3');
        $data["data"] = $this->KegiatanModel->getById($id);
        $this->load->view('kegiatan/edit', $data);
    }

    function update(){
        $id = $this->uri->segment('3');
        $data = array(
            'nama' => $this->input->post('nama'),
            'divisi' => $this->input->post('divisi'),
            'tanggal' => $this->input->post('tanggal'),
            'kegiatan' => $this->input->post('kegiatan'),
            'status' => $this->input->post('status'),
        );
        $this->KegiatanModel->update($id, $data);
        redirect("Kegiatan/lists/".$this->input->post('id'));
    }

    function delete(){
        $id = $this->uri->segment('3');
        $this->KegiatanModel->deleteById($id);
        redirect("Kegiatan/lists");
    }

    function data(){
        $data["data"] = $this->KegiatanModel->get();
        header('Content-Type: application/json');
        echo json_encode($data);
    }
}