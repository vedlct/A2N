<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

   public function __construct()
   {
       parent::__construct();
       $this->load->model('Loginm');
       $this->load->model('Menum');
   }

    public function index()
    {
        $this->load->view('menu');
    }


    public function add_menu(){
        $id = $this->session->userdata('id');
        $this->data['name']= $this->Loginm->get_username($id);
        $this->load->view('menu',$this->data);
    }

    public function Logout(){

        $this->session->sess_destroy();
        redirect('Home');
    }




    public function insert_menu(){
        $this->Menum->insert_menu();
        redirect('Admin_Home');
    }
}
