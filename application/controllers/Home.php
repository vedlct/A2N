<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Homem');
        $this->load->model('Menum');
        $this->load->model('Servicem');
        $this->load->model('Projectm');

    }

    public function index()
    {
        //$this->data['menu']= $this->Homem->menu();
//        $this->data['menuwithsubmenu']= $this->Homem->menuwithsubmenu();
        //$this->data['header']= $this->Homem->header();
        //$this->data['service_header']= $this->Homem->service_header();
        //$this->data['services']= $this->Homem->services();
        //$this->data['project_header']= $this->Homem->peoject_header();
        //$this->data['projects']= $this->Homem->peojects();
        //$this->data['menu'] = $this->Menum->get_menu();
        $this->data['get_all_services'] = $this->Homem->get_service();
        $this->data['get_all_projects'] = $this->Homem->get_project();
        $this->data['menu'] = $this->Homem->get_menu();
        $this->load->view('index', $this->data);
    }



}
