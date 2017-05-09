<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Servicem extends CI_Model
{

    public function get_all_service_head()
    {

        $query = $this->db->query("SELECT * FROM `services_header`");
        return $query->result();
    }

    public function get_service($id)
    {

        $query = $this->db->query("SELECT * FROM `service` WHERE `serviceId`='$id'");
        return $query->result();
    }
    public function get_services()
    {

        $query = $this->db->query("SELECT * FROM `service`");
        return $query->result();
    }

    public function get_service_details($id)
    {

        $query = $this->db->query("SELECT * FROM `service_details` WHERE `service_id`='$id'");
        return $query->result();
    }

    public function get_service_banner($id)
    {

        $query = $this->db->query("SELECT * FROM `service_banner` WHERE `service_id` = '$id' ORDER by id DESC LIMIT 1");
        return $query->result();
    }

    public function get_service_images()
    {

        $query = $this->db->query("SELECT * FROM `service_images`");
        return $query->result();
    }

    public function get_service_details_big($id)
    {

        $query = $this->db->query("SELECT * FROM `service_details_big` WHERE `service_id`='$id'");
        return $query->result();
    }

    public function service_header($name,$insertby_name)
    {
        $data = array(

            'name' => $name ,
            'insert_by' => $insertby_name
        );

       // $data = $this->security->xss_clean($data);
//        $this->db->where('id', $id);
        $this->db->update('services_header', $data);
    }

    public function get_all_service()
    {

        $query = $this->db->query("SELECT * FROM `service`");
        return $query->result();
    }

    public function get_all_servicess()
    {

        $query = $this->db->query("SELECT `designclass`.* FROM `designclass` LEFT JOIN `service` ON `designclass`.`designClassId` = `service`.`designClassId` WHERE `service`.`status` = 'home'");
        return $query->result();
    }

    public function get_all_services()
    {

        $query = $this->db->query("SELECT s.* , d.designClassname FROM service s JOIN designclass d ON s.designClassId = d.designClassId");
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

        $this->db->insert('services', $data);

        $query = $this->db->query("SELECT * FROM `services` ORDER  BY `services_id` DESC limit 1 ");

        foreach ($query->result() as $r){

            $id=$r->services_id;
        }

        $data1 = array(

            'big' => $service_name ,
            'service_id'=>$id,

        );
        $data1 = $this->security->xss_clean($data1);
//        $this->db->where('id', $id);
        $this->db->insert('service', $data1);

        $data2 = array(


            'service_id'=>$id,

        );
        $data2 = $this->security->xss_clean($data2);
//        $this->db->where('id', $id);
        $this->db->insert('service_details', $data2);

        $data3 = array(


            'service_id'=>$id,

        );
        $data3 = $this->security->xss_clean($data3);
//        $this->db->where('id', $id);
        $this->db->insert('service_details_big', $data3);

        $data4 = array(


            'service_id'=>$id,

        );
        $data4 = $this->security->xss_clean($data4);
//        $this->db->where('id', $id);
        $this->db->insert('service_banner', $data4);
    }

    public function add_new_service($name)
    {
        $head= $this->input->post('service_head');
        $details= $this->input->post('service_details');
        $design_class= $this->input->post('service_design_class');
        $banner= $this->input->post('service_banner');
        $summary= $this->input->post('service_summary');
        $page_image = $_FILES["pageImage"]["name"];
        $home_image = $_FILES["homeImage"]["name"];
        move_uploaded_file($_FILES["pageImage"]["tmp_name"], "images/" . $page_image);
        move_uploaded_file($_FILES["homeImage"]["tmp_name"], "images/" . $home_image);
        $date = date("Y-m-d");

        $data = array(
            'serviceName' => $head,
            'serviceBanner' =>$banner,
            'serviceSummary' =>$summary,
            'serviceDetails' => $details,
            'image' => $page_image,
            'designClassId' =>$design_class,
            'imageHome' => $home_image,
            'addedBy' =>$name,
            'addedDate' => $date
        );
        $this->db->insert('service',$data);
    }

    public function edit_service_by_serviceId($id,$name)
    {
        $head= $this->input->post('service_head');
        $details= $this->input->post('service_details');
        $design_class= $this->input->post('service_design_class');
        $banner= $this->input->post('service_banner');
        $summary= $this->input->post('service_summary');
        $page_image = $_FILES["pageImage"]["name"];
        $home_image = $_FILES["homeImage"]["name"];
        move_uploaded_file($_FILES["pageImage"]["tmp_name"], "images/" . $page_image);
        move_uploaded_file($_FILES["homeImage"]["tmp_name"], "images/" . $home_image);
        $date = date("Y-m-d");

        if($page_image!=null && $home_image!=null)
        {
            $data = array(
                'serviceName' => $head,
                'serviceBanner' =>$banner,
                'serviceSummary' =>$summary,
                'serviceDetails' => $details,
                'image' => $page_image,
                'designClassId' =>$design_class,
                'imageHome' => $home_image,
                'lastModifiedBy' => $name,
                'lastModifiedDate' => $date
            );

            $this->db->where('serviceId',$id);
            $this->db->update('service',$data);
        }
        else
        {
            if($home_image!=null)
            {
                $data = array(
                    'serviceName' => $head,
                    'serviceBanner' =>$banner,
                    'serviceSummary' =>$summary,
                    'serviceDetails' => $details,
                    'imageHome' => $home_image,
                    'designClassId' =>$design_class,
                    'lastModifiedBy' => $name,
                    'lastModifiedDate' => $date
                );

                $this->db->where('serviceId',$id);
                $this->db->update('service',$data);
            }
            elseif($page_image!=null)
            {
                $data = array(
                    'serviceName' => $head,
                    'serviceBanner' =>$banner,
                    'serviceSummary' =>$summary,
                    'serviceDetails' => $details,
                    'image' => $page_image,
                    'designClassId' =>$design_class,
                    'lastModifiedById' => $name,
                    'lastModifiedDate' => $date
                );

                $this->db->where('serviceId',$id);
                $this->db->update('service',$data);
            }
            else
            {
                $data = array(
                    'serviceName' => $head,
                    'serviceBanner' =>$banner,
                    'serviceSummary' =>$summary,
                    'serviceDetails' => $details,
                    'designClassId' =>$design_class,
                    'lastModifiedBy' => $name,
                    'lastModifiedDate' => $date
                );

                $this->db->where('serviceId',$id);
                $this->db->update('service',$data);
            }
        }

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

           // $data = $this->security->xss_clean($data);
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

          //  $data = $this->security->xss_clean($data);
            $this->db->where('services_id', $id);
            $this->db->update('services', $data);

        }
    }

    public function get_all_service_for_admin($id)
    {

        $query = $this->db->query("SELECT * FROM `service` WHERE `service_id` = '$id' ORDER by id DESC LIMIT 1");
        return $query->result();
    }

    public function get_all_service_for_admin1($id)
    {

        $query = $this->db->query("SELECT * FROM `service` WHERE `service_id`='$id' ORDER by id DESC LIMIT 1");
        return $query->result();
    }

    public function add_service($service_head,$service_details,$service_quote,$id)
    {
        $data = array(

            'small' => $service_details,
            'quote' => $service_quote,
            'big' => $service_head,
            'service_id'=>$id

        );

        $data = $this->security->xss_clean($data);

        $this->db->insert('service', $data);

    }

    public function add_service_details_header($service_details_big,$id)
    {
      $data = array(
            'big' => $service_details_big,
            'service_id'=>$id

        );

        $data = $this->security->xss_clean($data);

        $this->db->insert('service_details_big', $data);

    }

    public function edit_service($service_id,$service_head,$service_details,$service_quote)
    {

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
        $service_head=$this->input->post('service_banner_head');
        $service_details=$this->input->post('service_banner_details');

        $data = array(
            'small' => $service_details,
            'big' => $service_head
        );

        $data = $this->security->xss_clean($data);
        $this->db->where('id', $service_id);
        $this->db->update('service_banner', $data);
    }

    public function edit_service_details($service_details_id,$service_details_big)
    {
        $data = array(
            'big' => $service_details_big,

        );

        $data = $this->security->xss_clean($data);
        $this->db->where('id', $service_details_id);
        $this->db->update('service_details_big', $data);

    }

    public function get_all_service_details_for_admin($id)
    {
        $query = $this->db->query("SELECT * FROM `service_details` WHERE `service_id` = '$id'");
        return $query->result();
    }

    public function add_new_service_details()
    {
        $header = $this->input->post("header");
        $details = $this->input->post("details");
        $id = $this->input->post("id");

        $data = array(
            'header' => $header,
            'details' => $details,
            'service_id'=>$id
        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('service_details', $data);
    }

    public function add_service_banner()
    {
        $big = $this->input->post("service_head");
        $details = $this->input->post("service_details");
        $id = $this->input->post("id");

        $data = array(
            'big' => $big,
            'small' => $details,
            'service_id'=>$id
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

    public function get_all_service_details_head_for_admin($id)
    {

        $query = $this->db->query("SELECT * FROM `service_details_big` WHERE `service_id` = '$id' ORDER by id DESC LIMIT 1");
        return $query->result();
    }

    public function add_to_home_service($id)
    {
        $data1 = array(

            'status' => 'home',


        );
        $data1 = $this->security->xss_clean($data1);
        $this->db->where('serviceId', $id);
        $this->db->update('service', $data1);
    }
    public function remove_home($id)
    {
        $data1 = array(

            'status' => 'none',


        );
        $data1 = $this->security->xss_clean($data1);
        $this->db->where('serviceId', $id);
        $this->db->update('service', $data1);
    }

}