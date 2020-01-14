<?php

class Rapat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('RapatModel');
        $this->load->helper(array('url', 'file'));
    }

    function index()
    {
        $data["data"] = $this->RapatModel->get();
        $this->load->view('rapat/index', $data);
    }

//   Fungsi untuk menambahkan rapat
    function add()
    {
        $data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'tanggal' => $this->input->post('tanggal'),
            'kesimpulan' => $this->input->post('kesimpulan'),
        );
        $this->RapatModel->insert($data);
        redirect("Rapat/lists");
    }

//    Fungsi untuk melihat daftar rapat
    function lists()
    {
        $data["data"] = $this->RapatModel->get();
        $this->load->view('rapat/lists', $data);
    }

    function edit()
    {
        $id = $this->uri->segment('3');
        $data["data"] = $this->RapatModel->getById($id);
        $this->load->view('rapat/edit', $data);
    }

    function update(){
        $id = $this->uri->segment('3');
        $data = array(
            'judul' => $this->input->post('judul'),
            'deskripsi' => $this->input->post('deskripsi'),
            'tanggal' => $this->input->post('tanggal'),
            'kesimpulan' => $this->input->post('kesimpulan'),
        );
        $this->RapatModel->update($id, $data);
        redirect("Rapat/lists/".$this->input->post('id'));
    }

    function delete(){
        $id = $this->uri->segment('3');
        $this->RapatModel->deleteById($id);
        redirect("Rapat/lists");
    }
}