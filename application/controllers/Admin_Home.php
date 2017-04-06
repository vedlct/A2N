<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Home extends CI_Controller {


    public function index()
    {
        if ($this->session->userdata('type') == "Admin") {
            $this->load->view('admin_home');
        }else{

            redirect('Home');
        }
    }

}
