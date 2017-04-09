<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Loginm');
        $this->load->model('Menum');
        $this->load->model('Aboutusm');
    }

    public function index()
    {

        $this->data['aboutus'] = $this->Aboutusm->get_aboutus();
        $this->data['about_details'] = $this->Aboutusm->get_aboutus_details();
        $this->data['about_banner'] = $this->Aboutusm->get_aboutus_banner();
        $this->load->view('about_us',$this->data);
    }

    public function about_us_page()
    {
        if ($this->session->userdata('type') == "Admin") {

//            $id = $this->session->userdata('id');
//            $this->data['user_info'] = $this->Loginm->get_user($id);

            $this->data['about_us'] = $this->Aboutusm->get_all_about_us();
            $this->data['aboutus'] = $this->Aboutusm->get_aboutus();
            $this->data['about_details'] = $this->Aboutusm->get_aboutus_details();
            $this->data['about_banner'] = $this->Aboutusm->get_aboutus_banner();
            $this->load->view('about_us_for_admin', $this->data);
        } else {
            redirect('Home');
        }
    }

    public function add_new_about_head()
    {
        if ($this->session->userdata('type') == "Admin") {

//            $id = $this->session->userdata('id');
//            $this->data['user_info'] = $this->Loginm->get_user($id);


            $this->load->view('add_new_about_head');
        } else {
            redirect('Home');
        }
    }

    public function add_new_about_us()
    {
        if ($this->session->userdata('type') == "Admin") {

//            $id = $this->session->userdata('id');
//            $this->data['user_info'] = $this->Loginm->get_user($id);


            //$this->load->view('add_new_about_head');


            $about_us_head=$this->input->post('about_us_head');
            $about_us_details=$this->input->post('about_us_details');
            $about_us_quote=$this->input->post('about_us_quote');
            $this->data['add'] = $this->Aboutusm->add_about_us($about_us_head,$about_us_details,$about_us_quote);
            redirect('About_us/about_us_page');


        } else {
            redirect('Home');
        }
    }


    public function edit_about_us()
    {
        if ($this->session->userdata('type') == "Admin") {

            $id = $this->session->userdata('id');
            $this->data['name']= $this->Loginm->get_username($id);

//            $this->data['about_us'] = $this->Aboutusm->get_all_about_us();
//            $this->load->view('about_us_for_admin', $this->data);

            $id1=$this->input->post('about_us_id');
            $about_us_head=$this->input->post('about_us_head');
            $about_us_details=$this->input->post('about_us_details');
            $about_us_quote=$this->input->post('about_us_quote');

            $this->data['edit'] = $this->Aboutusm->edit_about_us($id1,$about_us_head,$about_us_details,$about_us_quote);
            redirect('About_us/about_us_page');



        } else {
            redirect('Home');
        }
    }

    public function update_about_us($id)
    {
        if ($this->session->userdata('type') == "Admin") {

            $this->Aboutusm->update_aboutus_banner($id);
            redirect('About_us/about_us_page');


        } else {
            redirect('Home');
        }
    }
}