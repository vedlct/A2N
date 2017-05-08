<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pagesm');

        //$this->load->model('Projectm');
    }

    public function index() {


    }

    public function admin_pages(){

        $this->data['page_name'] = $this->Pagesm->get_page_name();
        $this->data['menu_name'] = $this->Pagesm->get_menu_name();
        $this->load->view('admin_pages', $this->data);
    }

    public function old_page(){


        $id= $this->input->post('id');

        $this->data['old_page'] = $this->Pagesm->get_old_page_content($id);
        $this->load->view('old_pages', $this->data);
    }

    public function dropdownmenu(){
        $id= $this->input->post('id');

        $this->data['menu'] = $this->Pagesm->get_dropdown_menu($id);
        $this->load->view('menudropdownbylevel', $this->data);

    }
}