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
}
