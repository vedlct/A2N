<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Deletem extends CI_Model
{

    public function delete_service_by_id($id)
    {

      $this->db->query("DELETE FROM `services` WHERE `services_id`= '$id'");
        //return $query->result();
    }

    public function delete_project_by_id($id)
    {

        $this->db->query("DELETE FROM `projects` WHERE `projects_id`= '$id'");
        //return $query->result();
    }
    public function delete_menu_by_id($id)
    {

        $this->db->query("DELETE FROM `menu` WHERE `menu_id`= '$id'");
        //return $query->result();
    }

    public function delete_about_us_banner_by_id($id)
    {

        $this->db->query("DELETE FROM `about_banner` WHERE `id`= '$id'");
    }

    public function delete_about_us_details_by_id($id)
    {

        $this->db->query("DELETE FROM `about_details` WHERE `id`= '$id'");
    }
}