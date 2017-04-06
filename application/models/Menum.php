<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Menum extends CI_Model
{

    public function validate_user($data)
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        return $this->db->get('login')->row();
    }

    public function insert_menu()
    {
        $menuname = $this->input->post('menuname');
        $parent_id = $this->input->post('parent_id');
        $details = $this->input->post('details');
        $insertby = $this->input->post('insertby');
        //$phone_number = $this->input->post('phone_number');
        //$type = $this->input->post('type');

        $data = array(

            'name' => $menuname,
            'parent_id' => $parent_id,
            'details' => $details,
            'insert_by' => $insertby,
        );

        $this->db->insert('menu', $data);
    }

    public function get_user($id)
    {
        $query=$this->db->query("SELECT * FROM `login` WHERE `login_id`='$id'");
        return $query->result();
    }

    public function get_username($id)
    {
        $query=$this->db->query("SELECT CONCAT(`first_name`,' ', `last_name`) AS name FROM `login` WHERE `login_id`='$id'");
        return $query->result();
    }

    public function update_user($id)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $phone_number = $this->input->post('phone_number');

        $data = array(

            'username' => $username,
            'password' => $password,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'phone_number' => $phone_number
        );

        $this->db->where('login_id', $id);
        $this->db->update('login', $data);
    }
}
