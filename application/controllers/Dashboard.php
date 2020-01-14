<?php

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('WisudawanModel');
        $this->load->helper(array('url', 'file'));
    }

    function index()
    {
        $data["data"] = $this->WisudawanModel->getPesanTerbaik();
        $this->load->view('dashboard', $data);
    }
}