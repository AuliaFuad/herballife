<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("penyakit_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["penyakits"] = $this->penyakit_model->getAll();
        $this->load->view("penyakit", $data);
    }

    public function view($id = null)
    {  
        $penyakit = $this->penyakit_model;

        $data["penyakits"] = $penyakit->getById($id);
        if (!$data["penyakits"]) show_404();
        
        $this->load->view("vpenyakit", $data);
    }

    public function search()
    {
        $data['cari'] = $this->penyakit_model->get_penyakit_keyword();
        $this->load->view('result', $data);
    }
}