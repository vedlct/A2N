<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Home extends CI_Controller {


    public function index()
    {
        $this->load->view('admin_home');
    }

}
