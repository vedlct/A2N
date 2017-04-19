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
        $query = $this->db->get('services',4);
        return $query->result();
    }

    public function peoject_header(){

        $this->db->order_by("id", "desc");
        $query = $this->db->get('project_header', 1);
        return $query->result();
    }

    public function peojects(){

        $this->db->order_by("id", "desc");
        $query = $this->db->get('projects');
        return $query->result();
    }

}
