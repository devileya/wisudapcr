<?php

class WisudawanModel extends CI_Model
{
    public $tabel_name  = 'wisudawan';

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

    function getPesanByProdi($prodi)
    {
        $data = $this->db->query("select wisudawan.nama, wisudawan.nim, wisudawan.prodi, pesan.* from wisudawan, pesan WHERE wisudawan.id = pesan.wisudawan_id and wisudawan.prodi = '$prodi' ORDER BY nilai DESC");
        return $data->result();
    }

    function getPesanTerbaik()
    {
        $data = $this->db->query("select * from wisudawan, pesan WHERE wisudawan.id = pesan.wisudawan_id ORDER BY nilai DESC LIMIT 10");
        return $data->result();
    }

    function update($id,$data){
        $this->db->where('id',$id);
        $this->db->update($this->tabel_name,$data);
    }

    function updateNilai($id,$data){
        $this->db->where('id',$id);
        $this->db->update('pesan',$data);
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