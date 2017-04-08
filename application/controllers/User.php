<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

//        $this->load->model('Projectm');
        $this->load->model('Loginm');

//        $this->load->model('Designm');
//        $this->load->model('Servicem');
//        $this->load->model('Projectm');


    }

    public function index()
    {

    }
    public function get_user_admin(){

        if ($this->session->userdata('type') == "Admin") {

        $id=$this->session->userdata('id');
        $this->data['user_info']=$this->Loginm->get_user($id);

        $this->load->view('edit_user',$this->data);
    }
    else{
         redirect('Home');
        }
    }

    public function edit_user(){

        //$id=$this->session->userdata('id');
        if ($this->session->userdata('type') == "Admin") {

            $id = $this->input->post('id');
            $this->Loginm->update_user($id);
            $this->data['user_info']=$this->Loginm->get_user($id);

            $this->load->view('edit_user',$this->data);
    }
    else{
        redirect('Home');

        }
    }

    public function create_new_user()
    {
        if ($this->session->userdata('type') == "Admin") {

            $this->load->view('add_user');
        }else{

            redirect('Home');
        }
    }

    public function insert_user()
    {

        if ($this->session->userdata('type') == "Admin") {
            $this->Loginm->insert_user();
            //$this->load->view('edit_user',$this->data);
            redirect('User/get_user_admin');

        }else{

            redirect('Home');
        }
    }
}