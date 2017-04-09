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

    public function get_edit_aboutus_details($id)
    {
        $query = $this->db->query("SELECT * FROM `about_details` WHERE `id` ='$id'");
        return $query->result();
    }

    public function update_aboutus_details($id)
    {
        $header = $this->input->post("header");
        $details = $this->input->post("details");

        $data = array(
            'header' => $header,
            'details' => $details
        );

        $this->db->where('id', $id);
        $this->db->update('about_details', $data);
    }

    public function get_aboutus_banner()
    {
        $query = $this->db->query("SELECT * FROM `about_banner`");
        return $query->result();
    }

    public function get_edit_aboutus_banner($id)
    {
        $query = $this->db->query("SELECT * FROM `about_banner` WHERE `id` ='$id'");
        return $query->result();
    }

    public function update_aboutus_banner($id)
    {
        $header = $this->input->post("header");
        $details = $this->input->post("details");

        $data = array(
            'header' => $header,
            'details' => $details
        );

        $this->db->where('id', $id);
        $this->db->update('about_banner', $data);
    }

    public function get_all_about_us()
    {

        $query=$this->db->query("SELECT * FROM `about_us` ORDER by id DESC LIMIT 1 ");
        return $query->result();
    }


    public function edit_about_us($id1,$about_us_head,$about_us_details,$about_us_quote)
    {

//        $query=$this->db->query("SELECT * FROM `about_us` ORDER by id DESC LIMIT 1 ");
//        return $query->result();

        $data = array(

            'small' => $about_us_details,
            'quote' => $about_us_quote,
            'big' => $about_us_head,




        );

        $data = $this->security->xss_clean($data);
        $this->db->where('id', $id1);
        $this->db->update('about_us', $data);

    }

    public function add_about_us($about_us_head,$about_us_details,$about_us_quote)
    {

//        $query=$this->db->query("SELECT * FROM `about_us` ORDER by id DESC LIMIT 1 ");
//        return $query->result();

        $data = array(

            'small' => $about_us_details,
            'quote' => $about_us_quote,
            'big' => $about_us_head,




        );

        $data = $this->security->xss_clean($data);

        $this->db->insert('about_us', $data);

    }

    public function add_new_banner()
    {
        $header = $this->input->post("header");
        $details = $this->input->post("details");

        $data = array(
            'header' => $header,
            'details' => $details
        );

        $this->db->insert('about_banner', $data);
    }

    public function add_new_details()
    {
        $header = $this->input->post("header");
        $details = $this->input->post("details");

        $data = array(
            'header' => $header,
            'details' => $details
        );

        $this->db->insert('about_details', $data);
    }
}



