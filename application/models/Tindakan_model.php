<?php
class Tindakan_model extends CI_Model{

    public $table = "tabel_tindakan";

    public function __construct(){
        parent::__construct();
        $this->load->model('perawat_model','tabel_perawat');
        $this->load->model('pasien_model','tabel_pasien');
    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }

    public function update($no_registrasi,$data){
        $this->db->where('no_registrasi',$no_registrasi);
        //ci mengupdate sesuai where diatas
        return $this->db->update($this->table,$data);
    }

    public function find_all(){
        return $this->db->query("SELECT tabel_tindakan.*,tabel_perawat.nama as nama_perawat, tabel_pasien.nama as nama_pasien 
        FROM tabel_tindakan 
        INNER JOIN tabel_perawat ON tabel_perawat.id_perawat = tabel_tindakan.id_perawat
        INNER JOIN tabel_pasien ON tabel_pasien.no_rm = tabel_tindakan.nama_pasien")->result_array();
        
    }

   
    public function find_by_id($no_registrasi){
        return $this->db->query("SELECT tabel_tindakan.*,tabel_perawat.nama as nama_perawat, tabel_pasien.nama as nama_pasien 
        FROM tabel_tindakan 
        INNER JOIN tabel_perawat ON tabel_perawat.id_perawat = tabel_tindakan.id_perawat 
        INNER JOIN tabel_pasien ON tabel_pasien.id_pasien = tabel_tindakan.nama_pasien 
        WHERE tabel_tindakan.no_registrasi='$no_registrasi'")->row_array();
    }
    public function delete($no_registrasi){
        $this->db->where('no_registrasi',$no_registrasi);
        $this->db->delete($this->table);
    }
}