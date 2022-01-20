<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tindakan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('tindakan_model','tabel_tindakan');
    }

    public function index(){
        $data['records'] = $this->tabel_tindakan->find_all();
        $this->load->view('tindakan/index',$data);
    }

    function tambah(){
        $this->load->view('tindakan/tambah');
    }

    function tambah_save(){
        $data = [
            'id_perawat' => $this->input->post('id_perawat'),
            'nama_pasien' => $this->input->post('nama_pasien'),
            'jam' => $this->input->post('jam'),
            'diagnosa' => $this->input->post('diagnosa'),
            'tindakan_keperawatan' => $this->input->post('tindakan_keperawatan'),
            'no_ruang' => $this->input->post('no_ruang'),
            'keterangan' => $this->input->post('keterangan')
        ];
        $this->tabel_tindakan->insert($data);
        redirect(base_url('tabel_tindakan'));
    }

    //menampilkan form edit
    function edit(){
        $id = $this->uri->segment(3);
        //untuk select jabatan
        $jabatan = [
            "Manajer" => "Manajer",
            "Supervisor" => "Supervisor",
            "Karyawan" => "Karyawan"
        ];
        $data = $this->karyawan->find_by_id($id);
        $data['jabatans'] = $jabatan;
        $data['divisi'] = $this->divisi->find_all();
        $this->load->view('karyawan/edit_karyawan',$data);
    }

    //menyimpan data pada form edit
    function edit_save(){
        //validasi server side
        $id = $this->input->post('id');
        $this->form_validation->set_rules('nama','Nama karyawan','required');
        $this->form_validation->set_rules('email','email karyawan','required');
        if($this->form_validation->run() == FALSE){
            //validasi menemukan error
            $data = $this->karyawan->find_by_id($id);
            $this->load->view('karyawan/edit_karyawan',$data);
        }else{
            //handle upload
            $file_name = $this->input->post('foto_lama');
            if($_FILES['foto']['name'] != ""){
                $config = array(
                    'upload_path' => "./assets/uploads/",
                    'allowed_types' => "*",
                    'overwrite' => TRUE,
                    'file_name' => "foto_".date('YmdHis'),
                    'max_size' => "2048000" // Can be set to particular file size , here it is 2 MB(2048 Kb)
                );
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('foto')) {
                    $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
                    $file_name = $upload_data['file_name'];
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                    exit;
                }
            }
            //lolos validasi
            $data = [
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'no_tlp' => $this->input->post('no_tlp'),
                'jabatan' => $this->input->post('jabatan'),
                'jk' => $this->input->post('jk'),
                'id_divisi' => $this->input->post('id_divisi'),
                'foto' => $file_name
            ];
            $this->karyawan->update($id,$data);
            redirect(base_url('karyawan'));
        }
    }

    //menampilkan detail data
    function detail(){
        $id = $this->uri->segment(3);
        $data = $this->karyawan->find_by_id($id);
        $this->load->view('karyawan/detail_karyawan',$data);
    }

    //menghapus data
    function hapus(){
        $id = $this->uri->segment(3);
        $this->karyawan->delete($id);
        redirect(base_url('karyawan'));
    }

}