<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Projectm');
        $this->load->model('Loginm');

        $this->load->model('Designm');
        $this->load->model('Servicem');
        $this->load->model('Projectm');


    }

    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {

            $this->data['project'] = $this->Projectm->get_projects();


            //$this->data['design_head'] = $this->Designm->get_all_design_head();
            //$this->data['service_head'] = $this->Servicem->get_all_service_head();
            $this->data['get_all_projects'] = $this->Projectm->get_all_projects();
            $this->data['get_all_services'] = $this->Servicem->get_all_services();
            //$this->data['get_all_project_head'] = $this->Projectm->get_all_project_head();

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

            $this->data['projects']= $this->Projectm->get_all_design_class();
            $this->data['all_projects']= $this->Projectm->get_all_projects();

            $this->load->view('add_admin_home_projects',$this->data);

        }
        else{
            redirect('Home');
        }
    }

    public function showedit_projects()
    {


        if ($this->session->userdata('type') == "Admin") {

            $id= $this->input->post('id');
            $this->data['edit_project'] = $this->Projectm->get_project_for_edit($id);
            $this->data['projects']= $this->Projectm->get_all_design_class();

            $this->load->view('edit_admin_home_projects',$this->data);

        }
        else{
            redirect('Home');
        }
    }
    /* end Projects*/

    /*   start Header edit */




    public function edit_header_by_id($id)
    {


        if ($this->session->userdata('type') == "Admin") {


            //$id=$this->input->post('id');
            $details=$this->input->post('destails');

            $id1 = $this->session->userdata('id');
            $this->data['name']= $this->Loginm->get_username($id1);
            foreach ($this->data['name'] as $n)
            {
                $insertby_name=$n->name;
                $this->data['edit_design_head'] = $this->Designm->edit_design_head($id,$details,$insertby_name);
            }


            redirect('Admin_Home');
            //print_r($details);

        }
        else{
            redirect('Home');
        }
    }
    /*   end Header edit */

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
            $id1 = $this->session->userdata('id');
            $this->data['name']= $this->Loginm->get_username($id1);
            foreach ($this->data['name'] as $n)
            {
                $insertby_name=$n->name;
                $this->data['add_design_head'] = $this->Designm->add_design_head($details,$insertby_name);
            }

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
            $id1 = $this->session->userdata('id');
            $this->data['name']= $this->Loginm->get_username($id1);
            foreach ($this->data['name'] as $n)
            {
                $insertby_name=$n->name;
                $this->data['service_header'] = $this->Servicem->service_header($name,$insertby_name);
            }

            //print_r($name);
//            $this->data['service_header'] = $this->Servicem->service_header($name);

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

            $id1 = $this->session->userdata('id');
            $this->data['name']= $this->Loginm->get_username($id1);
            foreach ($this->data['name'] as $n)
            {
                $insertby_name=$n->name;
                $this->data['add_new_services'] = $this->Servicem->add_new_services($design_class,$details,$service_name,$fileName,$insertby_name);
            }

            //print_r($fileName);


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



            $id1 = $this->session->userdata('id');
            $this->data['name']= $this->Loginm->get_username($id1);
            foreach ($this->data['name'] as $n)
            {
                $insertby_name=$n->name;
                $this->data['add_new_services'] = $this->Servicem->edit_service_by_id($design_class,$details,$service_name,$id,$insertby_name);
            }


            //print_r($fileName);
//            $this->data['add_new_services'] = $this->Servicem->edit_service_by_id($design_class,$details,$service_name,$fileName,$id);

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

            $id1 = $this->session->userdata('id');
            $this->data['name']= $this->Loginm->get_username($id1);
            foreach ($this->data['name'] as $n)
            {
                $insertby_name=$n->name;
                $this->data['add_new_services'] = $this->Projectm->edit_project_fead($project_header,$insertby_name);
            }
            //print_r($fileName);


            redirect('Admin_Home');

        }
        else{
            redirect('Home');
        }
    }

    public function insert_project()
    {
        $id = $this->session->userdata('id');
        $this->data['name']= $this->Loginm->get_username($id);
        foreach ($this->data['name'] as $n)
        {
            $insertby_name=$n->name;
        }


        $this->Projectm->insert_projects($insertby_name);
        redirect('Admin_Home');
    }

    public function update_project($pid)
    {
        $id = $this->session->userdata('id');
        $this->data['name']= $this->Loginm->get_username($id);
        foreach ($this->data['name'] as $n)
        {
            $insertby_name=$n->name;
        }
        //print_r($id);
        $this->Projectm->update_projects($insertby_name,$pid);
        redirect('Admin_Home');
    }

    public function add_to_home($id)
    {


        if ($this->session->userdata('type') == "Admin") {



            $this->data['add_home'] = $this->Projectm->add_home($id);
            //$this->load->view('edit_admin_home_services',$this->data);
            redirect('Admin_Home');

        }
        else{
            redirect('Home');
        }
    }

    public function add_to_home_service($id)
    {


        if ($this->session->userdata('type') == "Admin") {



            $this->data['add_to_home_service'] = $this->Servicem->add_to_home_service($id);
            //$this->load->view('edit_admin_home_services',$this->data);
            redirect('Admin_Home');

        }
        else{
            redirect('Home');
        }
    }

    public function remove_from_home($id)
    {


        if ($this->session->userdata('type') == "Admin") {



            $this->data['remove_home'] = $this->Projectm->remove_home($id);
            //redirect('Admin_Home');
            //$this->load->view('edit_admin_home_services',$this->data);

        }
        else{
            redirect('Home');
        }
    }

    public function remove_from_home_service($id)
    {


        if ($this->session->userdata('type') == "Admin") {



            $this->data['remove_home'] = $this->Servicem->remove_home($id);
            //redirect('Admin_Home');
            //$this->load->view('edit_admin_home_services',$this->data);

        }
        else{
            redirect('Home');
        }
    }

}
