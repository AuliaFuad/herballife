<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tumbuhan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("tumbuhan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["tumbuhans"] = $this->tumbuhan_model->getAll();
        $this->load->view("katalog", $data);
    }
    public function view($id = null)
    {  
        $tumbuhan = $this->tumbuhan_model;

        $data["tumbuhans"] = $tumbuhan->getById($id);
        if (!$data["tumbuhans"]) show_404();
        
        $this->load->view("vtumbuhan", $data);
    }
}