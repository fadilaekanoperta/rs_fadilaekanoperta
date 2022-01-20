<?php
class Home_model extends CI_Model{

    public $table = "tabel_tindakan";

    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }

    public function update($id,$data){
        $this->db->where('no_registrasi',$id);
        //ci mengupdate sesuai where diatas
        return $this->db->update($this->table,$data);
    }

    public function find_all(){
        return $this->db->query("SELECT tabel_perawat.*,tabel_pasien.*,tabel_tindakan.*,
        tabel_perawat.nama as nama_perawat, tabel_pasien.nama as nama_pasien 
        FROM tabel_tindakan 
        INNER JOIN tabel_perawat ON tabel_perawat.id_perawat = tabel_tindakan.id_perawat
        INNER JOIN tabel_pasien ON tabel_pasien.no_rm = tabel_tindakan.nama_pasien")->result_array();
        
    }

    public function find_by_id($id){
        return $this->db->query("SELECT tabel_tindakan.*,tabel_perawat.nama as nama_perawat 
        FROM tabel_tindakan 
        INNER JOIN tabel_perawat ON tabel_perawat.id_perawat = tabel_tindakan.id_perawat 
        WHERE tabel_tindakan.id_perawat='$id'")->row_array();
    }
    public function delete($id){
        $this->db->where('no_registrasi',$id);
        $this->db->delete($this->table);
    }
}