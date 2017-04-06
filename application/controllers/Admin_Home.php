<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Projectm');
        $this->load->model('Loginm');

    }

    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->data['project'] = $this->Projectm->get_projects();
            $this->load->view('admin_home',$this->data);
        }else{

            redirect('Home');
        }
    }
/* Start  Head*/
    public function showedit()
    {


        if ($this->session->userdata('type') == "Admin") {

            $this->load->view('edit_admin_home_header');

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

            $this->load->view('add_admin_home_services');

        }
        else{
            redirect('Home');
        }
    }

    public function showedit_services()
    {


        if ($this->session->userdata('type') == "Admin") {

            $this->load->view('edit_admin_home_services');

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
    public function insert_project()
    {
        $id = $this->session->userdata('id');
        $this->data['name']= $this->Loginm->get_username($id);
        foreach ($this->data['name'] as $n)
        {
            $insertby_name=$n->name;
        }
        $this->Projectm->insert_projects($insertby_name);
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

}
