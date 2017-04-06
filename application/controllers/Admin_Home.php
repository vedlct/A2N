<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->load->view('admin_home');
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

}
