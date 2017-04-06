<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Projectm extends CI_Model
{

    public function get_all_project_head()
    {

        $query = $this->db->query("SELECT * FROM `project_header`");
        return $query->result();
    }
    public function edit_project_fead($project_header)
    {

        $insert_by=$this->session->userdata('type');

        $data = array(

            'name' => $project_header ,

            'insert_by' => $insert_by,



        );

        $data = $this->security->xss_clean($data);

        $this->db->update('project_header', $data);
    }


}