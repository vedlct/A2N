<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delete extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Deletem');

        //$this->load->model('Servicem');

    }
    public function index()
    {

    }

    public function delete_service()
    {
            $id=$this->input->post('id');
            //$this->load->model('Deletem');
           $del= $this->Deletem->delete_service_by_id($id);
            //$this->load->view('edit_admin_home_header',$this->data);

        echo 1;
                      //echo $id;

    }
}