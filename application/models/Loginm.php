<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Loginm extends CI_Model
{

    public function validate_user($data)
    {

        $userEmail = $this->input->post('userEmail');
        $password = $this->input->post('password');
        $this->db->where('userEmail', $userEmail);
        $this->db->where('userPassword', $password);

        return $this->db->get('user')->row();
    }

    public function insert_user()
    {
        $userTitle = $this->input->post('userTitle');
        $password = $this->input->post('password');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $phone_number = $this->input->post('phone_number');
        //$type = $this->input->post('type');

        $data = array(

            'title' => $userTitle,
            'userPassword' => $password,
            'firstName' => $first_name,
            'surName' => $last_name,
            'userEmail' => $email,
            'userPhone' => $phone_number,
            'userRole' => 'Admin',
            'status'=>'Active'
        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('user', $data);
    }

    public function get_user($id)
    {
        $query=$this->db->query("SELECT * FROM `user` WHERE `userId`='$id'");
        return $query->result();
    }

    public function get_username($id)
    {
        $query=$this->db->query("SELECT CONCAT(`title`,' ',`FirstName`,' ', `SurName`) AS name FROM `user` WHERE `userId`='$id'");
        return $query->result();
    }

    public function update_user($id)
    {
        $title = $this->input->post('userTitle');
        $password = $this->input->post('password');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $phone_number = $this->input->post('phone_number');

        $data = array(

            'title' => $title,
            'userPassword' => $password,
            'firstName' => $first_name,
            'surName' => $last_name,
            'userEmail' => $email,
            'userPhone' => $phone_number
        );
        $data = $this->security->xss_clean($data);
        $this->db->where('userId', $id);
        $this->db->update('user', $data);
    }
}
