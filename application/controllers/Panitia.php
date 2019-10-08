<?php

class Panitia extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('PanitiaModel');
        $this->load->helper(array('url', 'file'));
    }

    function index()
    {
        $data["data"] = $this->PanitiaModel->get();
        $this->load->view('panitia/index', $data);
    }

//   Fungsi untuk menambahkan panitia
    function add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'prodi' => $this->input->post('prodi'),
            'divisi' => $this->input->post('divisi'),
        );
        $this->PanitiaModel->insert($data);
        redirect("Panitia/lists/".$this->input->post('divisi'));
    }

//    Fungsi untuk melihat daftar panitia per divisi
    function lists()
    {
        $divisi = $this->uri->segment('3');
        $data["data"] = $this->PanitiaModel->getByDivisi($divisi);
        $this->load->view('panitia/lists', $data);
    }

    function edit()
    {
        $id = $this->uri->segment('3');
        $data["data"] = $this->PanitiaModel->getById($id);
        $this->load->view('panitia/edit', $data);
    }

    function update(){
        $id = $this->uri->segment('3');
        $data = array(
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'prodi' => $this->input->post('prodi'),
            'divisi' => $this->input->post('divisi'),
        );
        $this->PanitiaModel->update($id, $data);
        redirect("Panitia/lists/".$this->input->post('divisi'));
    }

    function delete(){
        $id = $this->uri->segment('3');
        $divisi = $this->uri->segment('4');
        $this->PanitiaModel->deleteById($id);
        redirect("Panitia/lists/".$divisi);
    }
}