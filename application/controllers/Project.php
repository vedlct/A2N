<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loginm');

        $this->load->model('Projectm');
    }

    public function index()
    {
        $this->data['service'] = $this->Servicem->get_service();
        $this->data['service_details'] = $this->Servicem->get_service_details();
        $this->data['service_banner'] = $this->Servicem->get_service_banner();
        $this->data['service_details_big'] = $this->Servicem->get_service_details_big();

        $this->load->view('service', $this->data);
    }

    public function project_page_admin()
    {
        if ($this->session->userdata('type') == "Admin") {


            $this->data['all_projects'] = $this->Projectm->get_all_projects();

            $this->load->view('projects_page_for_admin', $this->data);
        }
        else {
            redirect('Home');
        }
    }

    public function edit_project(){

        $id = $this->session->userdata('id');
        $this->data['name']= $this->Loginm->get_username($id);

        $id1=$this->input->post('id5');
        $this->data['show_project_by_id']= $this->Projectm->show_project_by_id($id1);
//
        $this->load->view('edit_project',$this->data);



    }

    public function edit_project_by_id($id){

        $this->data['project_edit_by_id']= $this->Projectm->project_edit_by_id($id);
        redirect('Project/project_page_admin');
//        $image = $_FILES["Photo"]["name"];
//        print_r($image);



    }

}