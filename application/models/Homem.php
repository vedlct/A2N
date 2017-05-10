<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Homem extends CI_Model
{

    public function menu(){

        //$this->db->where('parent_id', '0');
        $query = $this->db->get('menu');
        return $query->result();
    }




    public function header(){

        $this->db->where('name', 'header');
        $this->db->order_by("design_page_id", "desc");
        $query = $this->db->get('design_page',1);
        return $query->result();
    }

    public function service_header(){

        $this->db->order_by("id", "desc");
        $query = $this->db->get('services_header',1);
        return $query->result();
    }

    public function services(){
        $this->db->order_by("services_id", "desc");
        $query = $this->db->get('services');
        return $query->result();
    }

    public function peoject_header(){

        $this->db->order_by("id", "desc");
        $query = $this->db->get('project_header', 1);
        return $query->result();
    }

    public function peojects(){

        $this->db->order_by("id", "desc");
        $query = $this->db->get('project_admin');
        return $query->result();
    }


    public function get_service(){

        $query=$this->db->query("SELECT s.* , d.designClassname FROM service s JOIN designclass d ON s.designClassId = d.designClassId WHERE s.status='home'");
        return $query->result();
    }
    public function get_project(){

        $query=$this->db->query("SELECT p.* , d.designClassname FROM project p JOIN designclass d ON p.designClassId = d.designClassId  WHERE p.status='home'");
        return $query->result();
    }
    public function get_menu(){

        $query=$this->db->query("SELECT * FROM menu");
        return $query->result();
    }


}
