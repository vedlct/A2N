<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loginm');
        $this->load->model('Menum');
    }

    public function index()
    {

        $this->load->view('about_us');
    }
}