<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pagesm');
        $this->load->model('Loginm');

        //$this->load->model('Projectm');
    }

    public function index() {


    }

    public function admin_pages(){

        if ($this->session->userdata('type') == "Admin") {

        $id = $this->session->userdata('id');
        $this->data['name']= $this->Loginm->get_username($id);

        $this->data['page_name'] = $this->Pagesm->get_page_name();
        $this->data['menu_name'] = $this->Pagesm->get_menu_name();
        $this->load->view('admin_pages', $this->data);
    }
        else{
            redirect('Home');
        }
    }

    public function old_page()
    {

        if ($this->session->userdata('type') == "Admin") {

            $id1 = $this->session->userdata('id');
            $this->data['name'] = $this->Loginm->get_username($id1);

            $id = $this->input->post('id');

            $this->data['old_page'] = $this->Pagesm->get_old_page_content($id);
            $this->load->view('old_pages', $this->data);
        }
        else{
            redirect('Home');
        }
    }

    public function dropdownmenu()
    {

        if ($this->session->userdata('type') == "Admin") {
            $id = $this->input->post('id');

            $this->data['menu'] = $this->Pagesm->get_dropdown_menu($id);
            $this->load->view('menudropdownbylevel', $this->data);

        }
        else{
            redirect('Home');
        }
    }

    public function insert_pages()
    {
        if ($this->session->userdata('type') == "Admin") {
        $this->Pagesm->insert_pages();
        redirect('Pages/admin_pages');


    }
        else{
            redirect('Home');
        }
    }
    public function edit_page($id)
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->Pagesm->edit_page($id);
            redirect('Pages/admin_pages');
        }
        else{
            redirect('Home');
        }
    }
}