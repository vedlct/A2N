<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Servicem extends CI_Model
{

    public function get_all_service_head()
    {

        $query = $this->db->query("SELECT * FROM `services_header`");
        return $query->result();
    }

    public function get_service()
    {

        $query = $this->db->query("SELECT * FROM `service`");
        return $query->result();
    }

    public function get_service_details()
    {

        $query = $this->db->query("SELECT * FROM `service_details`");
        return $query->result();
    }

    public function get_service_banner()
    {

        $query = $this->db->query("SELECT * FROM `service_banner`");
        return $query->result();
    }

    public function get_service_images()
    {

        $query = $this->db->query("SELECT * FROM `service_images`");
        return $query->result();
    }

    public function get_service_details_big()
    {

        $query = $this->db->query("SELECT * FROM `service_details_big`");
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

    public function get_all_service_for_admin()
    {

        $query = $this->db->query("SELECT * FROM `service` ORDER by id DESC LIMIT 1");
        return $query->result();
    }

    public function add_service($service_head,$service_details,$service_quote)
    {



        $data = array(

            'small' => $service_details,
            'quote' => $service_quote,
            'big' => $service_head,




        );

        $data = $this->security->xss_clean($data);

        $this->db->insert('service', $data);

    }

    public function edit_service($service_id,$service_head,$service_details,$service_quote)
    {

//        $query=$this->db->query("SELECT * FROM `about_us` ORDER by id DESC LIMIT 1 ");
//        return $query->result();

        $data = array(

            'small' => $service_details,
            'quote' => $service_quote,
            'big' => $service_head,

        );

        $data = $this->security->xss_clean($data);
        $this->db->where('id', $service_id);
        $this->db->update('service', $data);
    }

    public function edit_service_banner()
    {
        $service_id=$this->input->post('service_id');
        $service_head=$this->input->post('service_head');
        $service_details=$this->input->post('service_details');

        $data = array(
            'small' => $service_details,
            'big' => $service_head
        );

        $data = $this->security->xss_clean($data);
        $this->db->where('id', $service_id);
        $this->db->update('service_banner', $data);
    }

    public function get_all_service_details_for_admin()
    {
        $query = $this->db->query("SELECT * FROM `service_details`");
        return $query->result();
    }

    public function add_new_service_details()
    {
        $header = $this->input->post("header");
        $details = $this->input->post("details");

        $data = array(
            'header' => $header,
            'details' => $details
        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('service_details', $data);
    }

    public function add_service_banner()
    {
        $big = $this->input->post("service_head");
        $details = $this->input->post("service_details");

        $data = array(
            'big' => $big,
            'small' => $details
        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('service_banner', $data);
    }

    public function get_edit_service_details($id)
    {
        $query = $this->db->query("SELECT * FROM `service_details` WHERE `id` ='$id'");
        return $query->result();
    }

    public function update_service_details($id)
    {
        $header = $this->input->post("header");
        $details = $this->input->post("details");

        $data = array(
            'header' => $header,
            'details' => $details
        );
        $data = $this->security->xss_clean($data);
        $this->db->where('id', $id);
        $this->db->update('service_details', $data);
    }

}