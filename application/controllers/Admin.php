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


            $data = [

                'username' => $result->username,
                'id'=>$result->login_id,
                'type'=>$result->type,
                'loggedin'=>"true"

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
    public function Logout(){
        /*$this->session->unset_userdata('username');
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('type');*/

        $this->session->sess_destroy();
        redirect('Home');

    }

    public function get_user(){

        $id=$this->session->userdata('id');
        $this->data['user_info']=$this->Loginm->get_user($id);

        $this->load->view('edit_user',$this->data);
    }

    public function edit_user(){

        //$id=$this->session->userdata('id');
        $id = $this->input->post('id');
        $this->Loginm->update_user($id);
        $this->data['user_info']=$this->Loginm->get_user($id);

        $this->load->view('edit_user',$this->data);
    }

    public function add_user(){

        //$id=$this->session->userdata('id');
        //$id = $this->input->post('id');
        //$this->Loginm->update_user($id);
        //$this->data['user_info']=$this->Loginm->get_user($id);

        $this->load->view('add_user');
    }

    public function insert_user(){

        //$id=$this->session->userdata('id');
        //$id = $this->input->post('id');
        //$this->Loginm->update_user($id);
        //$this->data['user_info']=$this->Loginm->get_user($id);
        $this->Loginm->insert_user();
        $this->load->view('edit_user',$this->data);

    }
}
