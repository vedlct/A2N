<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

   public function __construct()
   {
       parent::__construct();
       $this->load->model('Loginm');
       $this->load->model('Menum');
       $this->load->model('Pagesm');
   }

    public function index()
    {
        $id = $this->session->userdata('id');
        $this->data['name']= $this->Loginm->get_username($id);
        $this->data['show_menu']= $this->Menum->show_menu();
        $this->load->view('menu', $this->data);
    }


    public function add_menu(){
        $id = $this->session->userdata('id');
        $this->data['name']= $this->Loginm->get_username($id);
        $this->load->view('menu',$this->data);
    }

    public function edit_menu(){

        $id = $this->session->userdata('id');
        $this->data['name']= $this->Loginm->get_username($id);
        $id1=$this->input->post('id');
        $this->data['show_menu_by_id']= $this->Menum->show_menu_by_id($id1);

        $this->data['menu_by_id']= $this->Menum->get_menu_by_id($id1);
        $this->load->view('edit_menu',$this->data);
//        echo $id1;


    }

    public function edit_menu_by_id($id){

        $this->Menum->menu_edit_by_id($id);
        //print_r($this->data);

            redirect('Menu');

    }

//    public function Logout(){
//
//        $this->session->sess_destroy();
//        redirect('Home');
//    }




    public function insert_menu(){
        $this->Menum->insert_menu();
        redirect('Menu');
    }

    public function dropdownmenu(){
        $id= $this->input->post('id');


        if ($id=='0')
        {
            //$this->load->view('menudropdownbylevel', $this->data);
        }else{

            $this->data['menu'] = $this->Pagesm->get_dropdown_menu($id);
            if ($this->data['menu']==null)
            {
                echo "<b style='color: RED'>There are no menu in this level</b>";
                //redirect('admin/ahm/panel');
            }
            else{

                $this->load->view('menudropdownbylevel', $this->data);
            }
        }

        //echo $id;





    }


}
