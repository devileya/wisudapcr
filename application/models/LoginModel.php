<?php

class LoginModel extends CI_Model
{
    public $admin  = 'user';

    function __construct()
    {
        parent::__construct();

    }
    function cek_login($user,$pass)
    {
        $this->db->where('username',$user);
        $this->db->where('password',$pass);
        return $this->db->get($this->admin)->result();
    }

    function update($name,$data){
        $this->db->where('username',$name);
        $this->db->update($this->admin,$data);
    }
}