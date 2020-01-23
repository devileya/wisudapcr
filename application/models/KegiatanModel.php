<?php

class KegiatanModel extends CI_Model
{
    public $tabel_name  = 'kegiatan';

    function __construct()
    {
        parent::__construct();

    }

    function get(){
        return $this->db->get_where($this->tabel_name)->result();

    }

    function insert($data)
    {
        $this->db->insert($this->tabel_name,$data);
        return $this->db->insert_id();
    }

    function getById($id)
    {
        $this->db->select('*');
        $this->db->from($this->tabel_name);
        $this->db->where('id',$id);
        return $this->db->get()->row();
    }

    function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update($this->tabel_name,$data);
    }

    function deleteById($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->tabel_name);
    }

    function delete()
    {
        $this->db->delete($this->tabel_name);
    }
}