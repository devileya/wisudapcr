<?php

class Prodi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('WisudawanModel');
        $this->load->helper(array('url', 'file'));
    }

//    Fungsi untuk melihat daftar Wisudawan per prodi
    function lists()
    {
        $index_prodi = $this->uri->segment('3');
        $list_prodi = array("Sistem Informasi (D4)",
                            "Teknik Informatika (D4)",
                            "Teknik Elektronika Telekomunikasi (D4)",
                            "Teknik Mesin (D4)",
                            "Teknik Listrik (D4)",
                            "Teknik Komputer (D3)",
                            "Teknik Elektronika (D3)",
                            "Teknik Mekatronika (D3)",
                            "Teknik Telekomunikasi (D3)",
                            "Akuntansi (D3)");
        $prodi = $list_prodi[$index_prodi];
        $data["prodi"] = $prodi;
        $data["index_prodi"] = $index_prodi;
        $data["data"] = $this->WisudawanModel->getPesanByProdi($prodi);
        $this->load->view('Prodi/lists', $data);
    }

    function edit()
    {
        $id = $this->uri->segment('3');
        $data["data"] = $this->WisudawanModel->getById($id);
        $this->load->view('Prodi/edit', $data);
    }

//    Fungsi untuk mengupdate nilai pesan dan kesan
    function update(){
        $id = $this->uri->segment('3');
        $index_prodi = $this->uri->segment('4');
        $data = array('nilai' => $this->input->post('nilai'));
        $this->WisudawanModel->updateNilai($id, $data);
        echo "<script>alert('Nilai berhasil ditambahkan');</script>";
        redirect("Prodi/lists/$index_prodi");
    }

    function delete(){
        $id = $this->uri->segment('3');
        $this->WisudawanModel->delete($id);
        echo "<script>alert('Data berhasil dihapus'); window.location='../';</script>";
    }
}