<?php
class Perawat_model extends CI_Model{

    public $table = "tabel_perawat";

    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }

    public function update($id_perawat,$data){
        $this->db->where('id_perawat',$id_perawat);
        return $this->db->update($this->table,$data);
    }
    
    public function find_all(){
        return $this->db->query("SELECT tabel_perawat.*,tabel_perawat.nama as nama_perawat, 
        tabel_perawat.alamat as alamat,tabel_perawat.tgl_lahir as tgl_lahir
        FROM tabel_perawat")->result_array();
        
    }

    public function find_by_id($id_perawat){
        return $this->db->get_where($this->table,['id_perawat' => $id_perawat])->row_array();
    }

    public function delete($id_perawat){
        $this->db->where('id_perawat',$id_perawat);
        $this->db->delete($this->table);
    }
}