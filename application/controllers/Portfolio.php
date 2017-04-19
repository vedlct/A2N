<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loginm');

        $this->load->model('Projectm');
        $this->load->model('Homem');
    }

    public function index()
    {

        $this->data['menu']= $this->Homem->menu();

        $this->data['header']= $this->Homem->header();

        $this->data['pro'] = $this->Projectm->get_all_projects_for_portfolio();

        $this->load->view('portfolio', $this->data);
    }
}