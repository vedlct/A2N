<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

   public function __construct()
   {
       parent::__construct();
       $this->load->model('Loginm');
   }

    public function index()
    {
        $this->load->view('login');


    }

    public  function check_user()
    {

        $result = $this->Loginm->validate_user($_POST);


        if(!empty($result)){

            $id = $result->userId;
            $name= $this->Loginm->get_username($id);
            $data = [

                'userEmail' => $result->userEmail,
                'id'=>$result->userId,
                'type'=>$result->userRole,
                'loggedin'=>"true",
                'name' => $name
            ];

            $this->session->set_userdata($data);

            if ($this->session->userdata('type') == "Admin"){
                redirect('Admin_Home');
            }

        }else {

            echo "<script>
                        alert('wrong username or password');
                     window.location=\"/A2N/Admin\";  
					
                    </script>";
        }

    }
    public function logout(){


        $this->session->sess_destroy();
        redirect('Home');

    }

}
