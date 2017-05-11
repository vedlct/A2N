<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loginm');
        $this->load->model('Homem');
        $this->load->model('Projectm');
    }

    public function index()
    {
//        $this->data['service'] = $this->Servicem->get_service();
//        $this->data['service_details'] = $this->Servicem->get_service_details();
//        $this->data['service_banner'] = $this->Servicem->get_service_banner();
//        $this->data['service_details_big'] = $this->Servicem->get_service_details_big();
            $this->data['pro'] = $this->Projectm->get_all_projects();

        $this->load->view('projects', $this->data);
    }


    public function project_details($id)
    {
        $this->data['menu'] = $this->Homem->get_menu();
        $this->data['pro'] = $this->Projectm->get_projects_info($id);

            $this->load->view('projects', $this->data);

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

    public function edit_project()
    {

        if ($this->session->userdata('type') == "Admin") {
            $id = $this->session->userdata('id');
            $this->data['name'] = $this->Loginm->get_username($id);

            $this->data['projects'] = $this->Projectm->get_all_design_class();

            $id1 = $this->input->post('id5');
            $this->data['show_project_by_id'] = $this->Projectm->show_project_by_id($id1);
//
            $this->load->view('edit_project', $this->data);


        }
        else {
            redirect('Home');
        }
    }

    public function edit_project_by_id($id)
    {

        if ($this->session->userdata('type') == "Admin") {

            $this->data['project_edit_by_id'] = $this->Projectm->project_edit_by_id($id);
            redirect('Project/project_page_admin');
//        $image = $_FILES["Photo"]["name"];
//        print_r($image);


        }
        else {
            redirect('Home');
        }
    }

    public function add_new_project_by_admin()
    {

        if ($this->session->userdata('type') == "Admin") {
            $id = $this->session->userdata('id');
            $this->data['name'] = $this->Loginm->get_username($id);


            $this->data['projects'] = $this->Projectm->get_all_design_class();
            $this->load->view('add_new_projects_admin', $this->data);


        }
        else {
            redirect('Home');
        }
    }

    public function add_new_project()
    {

        if ($this->session->userdata('type') == "Admin") {
            $this->data['project_add'] = $this->Projectm->project_add();
            redirect('Project/project_page_admin');
//        $image = $_FILES["Photo"]["name"];
//        print_r($image);


        }
        else {
            redirect('Home');
        }
    }
}