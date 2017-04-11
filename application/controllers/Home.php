<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Homem');

    }

    public function index()
    {
        $this->data['menu']= $this->Homem->menu();
        $this->data['menuwithsubmenu']= $this->Homem->menuwithsubmenu();
        $this->data['header']= $this->Homem->header();
        $this->data['service_header']= $this->Homem->service_header();
        $this->data['services']= $this->Homem->services();
        $this->data['project_header']= $this->Homem->peoject_header();
        $this->data['projects']= $this->Homem->peojects();
        $this->load->view('index', $this->data);
    }



}
