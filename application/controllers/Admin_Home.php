<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Designm');
        $this->load->model('Servicem');
        $this->load->model('Projectm');

    }

    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {

            $this->data['design_head'] = $this->Designm->get_all_design_head();
            $this->data['service_head'] = $this->Servicem->get_all_service_head();
            $this->data['get_all_service'] = $this->Servicem->get_all_service();
            $this->data['get_all_project_head'] = $this->Projectm->get_all_project_head();
            $this->load->view('admin_home',$this->data);
        }else{

            redirect('Home');
        }
    }
/* Start  Head*/
    public function showedit()
    {


        if ($this->session->userdata('type') == "Admin") {

            $id=$this->input->post('id');
            $this->data['design_head_by_id'] = $this->Designm->get_design_head_by_id($id);
            $this->load->view('edit_admin_home_header',$this->data);

        }
        else{
            redirect('Home');
        }
    }
    /* end  Head*/
    /* Start Services*/
    public function add_services()
    {


        if ($this->session->userdata('type') == "Admin") {


            $this->data['services_design_class'] = $this->Designm->get_all_design_class();
            $this->load->view('add_admin_home_services',$this->data);

        }
        else{
            redirect('Home');
        }
    }

    public function showedit_services($id)
    {


        if ($this->session->userdata('type') == "Admin") {

            $this->data['services_design_class'] = $this->Designm->get_all_design_class();

            $this->data['edit_services'] = $this->Servicem->edit_services($id);
            $this->load->view('edit_admin_home_services',$this->data);

        }
        else{
            redirect('Home');
        }
    }
    /* end Services*/
    /* Start Projects*/
    public function add_new_projects()
    {


        if ($this->session->userdata('type') == "Admin") {

            $this->load->view('add_admin_home_projects');

        }
        else{
            redirect('Home');
        }
    }

    public function showedit_projects()
    {


        if ($this->session->userdata('type') == "Admin") {

            $this->load->view('edit_admin_home_projects');

        }
        else{
            redirect('Home');
        }
    }
    /* end Projects*/

    public function edit_header_by_id($id)
    {


        if ($this->session->userdata('type') == "Admin") {


            //$id=$this->input->post('id');
            $details=$this->input->post('destails');
            $this->data['edit_design_head'] = $this->Designm->edit_design_head($id,$details);

            redirect('Admin_Home');
            //print_r($details);

        }
        else{
            redirect('Home');
        }
    }

    public function add_design_header()
    {


        if ($this->session->userdata('type') == "Admin") {

            $this->load->view('add_design_header');

        }
        else{
            redirect('Home');
        }
    }
    public function add_design_head()
    {


        if ($this->session->userdata('type') == "Admin") {

//            $this->load->view('add_design_header');
            $details=$this->input->post('destails');
            $this->data['add_design_head'] = $this->Designm->add_design_head($details);
            redirect('Admin_Home');

        }
        else{
            redirect('Home');
        }
    }

    public function service_header()
    {


        if ($this->session->userdata('type') == "Admin") {

//            $this->load->view('add_design_header');
            $name=$this->input->post('services_header');
            //print_r($name);
            $this->data['service_header'] = $this->Servicem->service_header($name);

            redirect('Admin_Home');

        }
        else{
            redirect('Home');
        }
    }

    public function add_new_service()
    {


        if ($this->session->userdata('type') == "Admin") {

//            $this->load->view('add_design_header');
            $design_class=$this->input->post('design_class');
            $details=$this->input->post('details');
            $service_name=$this->input->post('service_name');

            $fileName = $_FILES["Photo"]["name"];
            move_uploaded_file($_FILES["Photo"]["tmp_name"], "images/" . $fileName);

            //print_r($fileName);
            $this->data['add_new_services'] = $this->Servicem->add_new_services($design_class,$details,$service_name,$fileName);

            redirect('Admin_Home');

        }
        else{
            redirect('Home');
        }
    }

    public function edit_service_by_id($id)
    {


        if ($this->session->userdata('type') == "Admin") {

//            $this->load->view('add_design_header');
            $design_class=$this->input->post('design_class');
            $details=$this->input->post('details');
            $service_name=$this->input->post('service_name');

            $fileName = $_FILES["Photo"]["name"];
            move_uploaded_file($_FILES["Photo"]["tmp_name"], "images/" . $fileName);

            //print_r($fileName);
            $this->data['add_new_services'] = $this->Servicem->edit_service_by_id($design_class,$details,$service_name,$fileName,$id);

            redirect('Admin_Home');

        }
        else{
            redirect('Home');
        }
    }

    public function edit_project_head()
    {


        if ($this->session->userdata('type') == "Admin") {

            $project_header=$this->input->post('project_header');
            //print_r($fileName);
            $this->data['add_new_services'] = $this->Projectm->edit_project_fead($project_header);

            redirect('Admin_Home');

        }
        else{
            redirect('Home');
        }
    }

}
