<?php

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('LoginModel');

    }

    public function index()
    {
        if($this->session->userdata('logined') && $this->session->userdata('logined') == true)
        {
            redirect('Panitia');
        }

        if(!$this->input->post())
        {
            $this->load->view('login');
        }
        else
        {
            $cek_login =$this->LoginModel->cek_login(
                $this->input->post('name'),
                md5($this->input->post('password'))
            );
            if(!empty($cek_login))
            {
                $this->session->set_userdata('logined', true);
                $this->session->set_userdata('name', $this->input->post('name'));
                redirect("Panitia");
            }
            else
            {
                redirect("");
            }
        }

    }

    function change_password() {
        $this->load->view('change_password');
    }

    function changePassword() {
        $cek_login =$this->LoginModel->cek_login(
            $this->session->userdata('name'),
            md5($this->input->post('old_password'))
        );
        if(!empty($cek_login))
        {
            $data['password'] = md5($this->input->post('password'));
            $this->LoginModel->update($this->session->userdata('name'), $data);
            redirect("Panitia");
        } else {
          redirect("Login/change_password");
        }
    }

    public function logout()
    {
        session_destroy();
        $this->session->unset_userdata('logined');
        redirect("login");
    }
}