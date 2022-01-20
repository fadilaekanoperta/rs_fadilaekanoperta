<?php
class Pasien_model extends CI_Model{

    public $table = "tabel_pasien";

    public function __construct(){
        parent::__construct();
    }

    public function insert($data){
        return $this->db->insert($this->table,$data);
    }

    public function update($id,$data){
        $this->db->where('no_rm',$id);
        //ci mengupdate sesuai where diatas
        return $this->db->update($this->table,$data);
    }

    public function find_all(){
        return $this->db->get($this->table)->result_array();
    }

    public function find_by_id($id){
        return $this->db->get_where($this->table,['no_rm' => $id])->row_array();
    }

    public function delete($id){
        $this->db->where('no_rm',$id);
        $this->db->delete($this->table);
    }
}