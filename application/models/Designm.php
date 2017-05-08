<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Designm extends CI_Model
{

    public function get_all_design_head()
    {

        $query=$this->db->query("SELECT * FROM `design_page` ORDER by `design_page_id` DESC LIMIT 1");
        return $query->result();
    }

    public function get_design_class_service()
    {

        $query=$this->db->query("SELECT * FROM `designclass` WHERE `type` = 'service'");
        return $query->result();
    }

    public function get_design_head_by_id($id)
    {

        $query = $this->db->get_where('design_page', array('design_page_id' => $id));
        return $query->result();
    }

    public function edit_design_head($id,$details,$insertby_name)
    {


        $data = array(

            'details' => $details ,
            'insert_by' => $insertby_name
        );

        $data = $this->security->xss_clean($data);
        $this->db->where('design_page_id', $id);
        $this->db->update('design_page', $data);


    }

    public function add_design_head($details,$insertby_name){

        /*$query=$this->db->query("SELECT * FROM `restaurant`");
        return $query->result();*/

        $data = array(

            'details'=>$details,
            'insert_by' => $insertby_name,
            'name'=>'header',

        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('design_page', $data);


    }

    public function get_all_design_class()
    {

        $query = $this->db->get_where('design_class', array('type' => 'service'));
        return $query->result();
    }
}