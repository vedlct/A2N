<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Aboutusm extends CI_Model
{
    public function get_all_about_us()
    {

        $query=$this->db->query("SELECT * FROM `about_us` ORDER by id DESC LIMIT 1 ");
        return $query->result();
    }
}