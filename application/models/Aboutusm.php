<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Aboutusm extends CI_Model
{

    public function get_aboutus()
    {
        $query = $this->db->query("SELECT * FROM `about_us`");
        return $query->result();
    }

    public function get_aboutus_details()
    {
        $query = $this->db->query("SELECT * FROM `about_details`");
        return $query->result();
    }

    public function get_aboutus_banner()
    {
        $query = $this->db->query("SELECT * FROM `about_banner`");
        return $query->result();
    }

    public function get_edit_aboutus_banner($id)
    {
        $query = $this->db->query("SELECT * FROM `about_banner` WHERE `id` ='$id'");
        return $query->result();
    }

    public function update_aboutus_banner($id)
    {
        $header = $this->input->post("header");
        $details = $this->input->post("details");

        $data = array(
            'header' => $header,
            'details' => $details
        );

        $this->db->where('id', $id);
        $this->db->update('about_banner', $data);
    }

    public function get_all_about_us()
    {

        $query=$this->db->query("SELECT * FROM `about_us` ORDER by id DESC LIMIT 1 ");
        return $query->result();
    }
}
