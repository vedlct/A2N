<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Servicem extends CI_Model
{

    public function get_all_service_head()
    {

        $query = $this->db->query("SELECT * FROM `services_header`");
        return $query->result();
    }
    public function service_header($name,$insertby_name)
    {



        $data = array(

            'name' => $name ,
            'insert_by' => $insertby_name
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

    public function add_new_services($design_class,$details,$service_name,$fileName,$insertby_name)
    {



        $data = array(

            'service_name' => $service_name ,
            'design_class'=>$design_class,
            'details'=>$details,
            'insert_by' => $insertby_name,
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

    public function edit_service_by_id($design_class,$details,$service_name,$id,$insertby_name)
    {
        $fileName = $_FILES["Photo"]["name"];

        if ($fileName != null) {

            move_uploaded_file($_FILES["Photo"]["tmp_name"], "images/" . $fileName);


            $data = array(

                'service_name' => $service_name,
                'design_class' => $design_class,
                'details' => $details,
                'insert_by' => $insertby_name,
                'image' => $fileName


            );

            $data = $this->security->xss_clean($data);
            $this->db->where('services_id', $id);
            $this->db->update('services', $data);
        }
        else{
            $data = array(

                'service_name' => $service_name,
                'design_class' => $design_class,
                'details' => $details,
                'insert_by' => $insertby_name,



            );

            $data = $this->security->xss_clean($data);
            $this->db->where('services_id', $id);
            $this->db->update('services', $data);

        }
    }

}