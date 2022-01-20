<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('pasien_model','tabel_pasien');
    }

    public function index(){
        $data['records'] = $this->tabel_pasien->find_all();
        $this->load->view('pasien/index',$data);
    }
    function tambah(){
        $this->load->view('pasien/tambah');
    }
    function tambah_save(){
            $data = [
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'ttl' => $this->input->post('ttl'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'pekerjaan' => $this->input->post('pekerjaan')
            ];
            $this->tabel_pasien->insert($data);
            redirect(base_url('pasien'));
    }
    function edit(){
        $no_rm = $this->uri->segment(3);
        $data = $this->tabel_pasien->find_by_id($no_rm);
        $this->load->view('pasien/edit',$data);
    }
    function edit_save(){
        $no_rm = $this->input->post('no_rm');
        $id_poliklinik = $this->input->post('id_poliklinik');
        $data = [
            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'ttl' => $this->input->post('ttl'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'pekerjaan' => $this->input->post('pekerjaan')
        ];
            $this->tabel_pasien->update($no_rm,$data);
            redirect(base_url('pasien'));
        
    }
    function hapus(){
        $no_rm = $this->uri->segment(3);
        $this->tabel_pasien->delete($no_rm);
        redirect(base_url('pasien'));
    }
    function detail(){
        $no_rm = $this->uri->segment(3);
        $data = $this->tabel_pasien->find_by_id($no_rm);
        $this->load->view('pasien/detail',$data);
    }
}