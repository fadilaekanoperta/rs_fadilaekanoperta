<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('home_model','tabel_tindakan');
    }

    //menampilkan semua data
    public function index(){
        $data['records'] = $this->tabel_tindakan->find_all();
        $this->load->view('home',$data);
    }
}
