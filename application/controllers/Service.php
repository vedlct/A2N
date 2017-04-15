<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loginm');
//        $this->load->model('Menum');
        $this->load->model('Servicem');
    }

    public function index()
    {
        $this->load->view('service');
    }

    public function service_page_admin()
    {
        if ($this->session->userdata('type') == "Admin") {



            $this->data['service_head'] = $this->Servicem->get_all_service_for_admin();
            $this->data['service_details'] = $this->Servicem->get_all_service_details_for_admin();
            $this->load->view('service_page_for_admin', $this->data);
        } else {
            redirect('Home');
        }
    }

    public function add_new_service_head()
    {
        if ($this->session->userdata('type') == "Admin") {

            $this->load->view('add_new_service_head');
        } else {
            redirect('Home');
        }
    }

    public function add_new_service_header()
    {
        if ($this->session->userdata('type') == "Admin") {

            $service_head=$this->input->post('service_head');
            $service_details=$this->input->post('service_details');
            $service_quote=$this->input->post('service_quote');
            $this->data['add'] = $this->Servicem->add_service($service_head,$service_details,$service_quote);
            redirect('Service/service_page_admin');


        } else {
            redirect('Home');
        }
    }

    public function edit_service_for_admin()
    {
        if ($this->session->userdata('type') == "Admin") {

            $id = $this->session->userdata('id');
            $this->data['name']= $this->Loginm->get_username($id);



            $service_id=$this->input->post('service_id');
            $service_head=$this->input->post('service_head');
            $service_details=$this->input->post('service_details');
            $service_quote=$this->input->post('service_quote');



            $this->data['edit'] = $this->Servicem->edit_service($service_id,$service_head,$service_details,$service_quote);
            redirect('Service/service_page_admin');



        } else {
            redirect('Home');
        }
    }

    public function view_add_service_details()
    {


        if ($this->session->userdata('type') == "Admin") {

            $this->load->view('view_add_service_details');

        }
        else{
            redirect('Home');
        }
    }

    public function add_new_service_details()
    {


        if ($this->session->userdata('type') == "Admin") {

            $this->Servicem->add_new_service_details();
            redirect('Service/service_page_admin');
        }
        else{
            redirect('Home');
        }
    }

    public function show_edit_service_details()
    {
        if ($this->session->userdata('type') == "Admin") {

            $id=$this->input->post('id');

            $this->data['service_details'] = $this->Servicem->get_edit_service_details($id);
            $this->load->view('edit_admin_service_details',$this->data);

        } else {
            redirect('Home');
        }
    }

    public function update_service_details($id)
    {
        if ($this->session->userdata('type') == "Admin") {

            $this->Servicem->update_service_details($id);
            redirect('Service/service_page_admin');


        } else {
            redirect('Home');
        }
    }






}