<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Servicem extends CI_Model
{

    public function get_all_service_head()
    {

        $query = $this->db->query("SELECT * FROM `services_header`");
        return $query->result();
    }
    public function service_header($name)
    {

        $insert_by=$this->session->userdata('type');

        $data = array(

            'name' => $name ,
            'insert_by' => $insert_by
        );

        $data = $this->security->xss_clean($data);
//        $this->db->where('id', $id);
        $this->db->update('services_header', $data);
    }

    public function get_all_service()
    {

        $query = $this->db->query("SELECT * FROM `services`");
        return $query->result();
    }

    public function add_new_services($design_class,$details,$service_name,$fileName)
    {

        $insert_by=$this->session->userdata('type');

        $data = array(

            'service_name' => $service_name ,
            'design_class'=>$design_class,
            'details'=>$details,
            'insert_by' => $insert_by,
            'image' =>$fileName


        );

        $data = $this->security->xss_clean($data);
//        $this->db->where('id', $id);
        $this->db->insert('services', $data);
    }

    public function edit_services($id)
    {

        $query = $this->db->get_where('services', array('services_id' => $id));
        return $query->result();
    }

    public function edit_service_by_id($design_class,$details,$service_name,$fileName,$id)
    {

        $insert_by=$this->session->userdata('type');

        $data = array(

            'service_name' => $service_name ,
            'design_class'=>$design_class,
            'details'=>$details,
            'insert_by' => $insert_by,
            'image' =>$fileName


        );

        $data = $this->security->xss_clean($data);
        $this->db->where('services_id', $id);
        $this->db->update('services', $data);
    }

}