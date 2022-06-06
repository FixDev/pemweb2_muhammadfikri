<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prodi extends CI_Controller
{
    public function index()
    {
        $this->load->model('prodi_model', 'prodi');
        $list_prodi = $this->prodi->getAllData();

        $data['list_prodi'] = $list_prodi;

        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('prodi/index', $data);
        $this->load->view('layouts/footer');
    }
}