<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loginm');
        $this->load->model('Menum');
        $this->load->model('Aboutusm');
    }

    public function index()
    {

        $this->data['aboutus'] = $this->Aboutusm->get_aboutus();
        $this->data['about_details'] = $this->Aboutusm->get_aboutus_details();
        $this->data['about_banner'] = $this->Aboutusm->get_aboutus_banner();
        $this->load->view('about_us',$this->data);
    }
}