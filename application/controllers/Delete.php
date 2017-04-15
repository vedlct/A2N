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

    public function delete_project()
    {
        $id=$this->input->post('id');
        //$this->load->model('Deletem');
        $this->Deletem->delete_project_by_id($id);
        //$this->load->view('edit_admin_home_header',$this->data);
        echo 1;

       // redirect('Admin_Home');
        //echo $id;

    }
    public function delete_menu()
    {
        $id=$this->input->post('id');
        //$this->load->model('Deletem');
        $del= $this->Deletem->delete_menu_by_id($id);
        //$this->load->view('edit_admin_home_header',$this->data);

        echo 1;
        //echo $id;

    }

    public function delete_about_us_banner()
    {
        $id=$this->input->post('id');
        $this->Deletem->delete_about_us_banner_by_id($id);

        echo 1;
    }

    public function delete_about_us_details()
    {
        $id=$this->input->post('id');
        $this->Deletem->delete_about_us_details_by_id($id);

        echo 1;
    }

    public function delete_service_details()
    {
        $id=$this->input->post('id');
        $this->Deletem->delete_service_details_by_id($id);

        echo 1;
    }
}