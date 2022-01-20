<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perawat extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('perawat_model','tabel_perawat');
    }

    public function index(){
        $data['records'] = $this->tabel_perawat->find_all();
        $this->load->view('perawat/index',$data);
    }
    function tambah(){
        $this->load->view('perawat/tambah');
    }
    function tambah_save(){
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'tgl_lahir' => $this->input->post('tgl_lahir')
            ];
            $this->tabel_perawat->insert($data);
            redirect(base_url('perawat'));
    }
    function edit(){
        $id_perawat = $this->uri->segment(3);
        $data = $this->tabel_perawat->find_by_id($id_perawat);
        $this->load->view('perawat/edit',$data);
    }
    function edit_save(){
        $id_perawat = $this->input->post('id_perawat');
        $id_poliklinik = $this->input->post('id_poliklinik');
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'tgl_lahir' => $this->input->post('tgl_lahir')
        ];
            $this->tabel_perawat->update($id_perawat,$data);
            redirect(base_url('perawat'));
        
    }
    function hapus(){
        $id_perawat = $this->uri->segment(3);
        $this->tabel_perawat->delete($id_perawat);
        redirect(base_url('perawat'));
    }
    function detail(){
        $id_perawat = $this->uri->segment(3);
        $data = $this->tabel_perawat->find_by_id($id_perawat);
        $this->load->view('perawat/detail',$data);
    }
}