<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loginm');

        $this->load->model('Servicem');
    }

    public function index()
    {
        $this->data['service'] = $this->Servicem->get_service();
        $this->data['service_details'] = $this->Servicem->get_service_details();
        $this->data['service_banner'] = $this->Servicem->get_service_banner();
        $this->data['service_details_big'] = $this->Servicem->get_service_details_big();

        $this->load->view('service',$this->data);
    }

    public function service_page_admin()
    {
        if ($this->session->userdata('type') == "Admin") {


            $this->data['all_services'] = $this->Servicem->get_services();
            $this->data['service_head'] = $this->Servicem->get_all_service_for_admin();
            $this->data['service_details'] = $this->Servicem->get_all_service_details_for_admin();
            $this->data['service_details_head'] = $this->Servicem->get_all_service_details_head_for_admin();
            $this->data['service_banner'] = $this->Servicem->get_service_banner();
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


    public function getservice_id()
    {
        if ($this->session->userdata('type') == "Admin") {

//            $this->load->view('add_new_service_head');
            $id=$this->input->post('id');

            $this->data['service_head'] = $this->Servicem->get_all_service_for_admin($id);
            $this->data['service_details'] = $this->Servicem->get_all_service_details_for_admin();
            $this->data['service_details_head'] = $this->Servicem->get_all_service_details_head_for_admin();
            $this->data['service_banner'] = $this->Servicem->get_service_banner();




        } else {
            redirect('Home');
        }
    }

    public function add_new_service_details_head()
    {
        if ($this->session->userdata('type') == "Admin") {

            $this->load->view('add_new_service_details_head');
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

    public function add_new_service_details_header()
    {
        if ($this->session->userdata('type') == "Admin") {


            $service_details_big=$this->input->post('service_details_big');

            $this->data['add'] = $this->Servicem->add_service_details_header($service_details_big);
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

    public function edit_service_details_head_for_admin()
    {
        if ($this->session->userdata('type') == "Admin") {

            $id = $this->session->userdata('id');
            $this->data['name']= $this->Loginm->get_username($id);



            $service_details_id=$this->input->post('servicedetailshead_id');

            $service_details_big=$this->input->post('service_details_big');




            $this->data['edit'] = $this->Servicem->edit_service_details($service_details_id,$service_details_big);
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

    public function view_add_banner()
    {
       if ($this->session->userdata('type') == "Admin") {
           $this->load->view('add_service_banner');
       }
       else {
                redirect('Home');
            }
   }

    public function add_service_banner()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->Servicem->add_service_banner();
            redirect('Service/service_page_admin');
        }
        else{
                redirect('Home');
            }
    }

    public function edit_service_banner()
    {
        if ($this->session->userdata('type') == "Admin") {

           $this->Servicem->edit_service_banner();
            redirect('Service/service_page_admin');



        } else {
                redirect('Home');
            }
    }






}