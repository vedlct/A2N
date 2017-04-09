<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Aboutusm extends CI_Model
{
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
}