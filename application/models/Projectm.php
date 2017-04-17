<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Projectm extends CI_Model
{


    public function get_all_design_class()
    {
        $query = $this->db->get_where('design_class', array('type' => 'project'));
        return $query->result();
    }

    public function get_projects()
    {
        $query = $this->db->query("SELECT * FROM `projects` ORDER by `projects_id` DESC limit 4 ");
        return $query->result();
    }
    public function get_all_projects()
    {
        $query = $this->db->query("SELECT * FROM `project_admin`,`projects` WHERE  `projects`.`projects_id`=`project_admin`.`project_id`");
        return $query->result();
    }

    public function show_project_by_id($id1)
    {
        $query = $this->db->query("SELECT * FROM `project_admin`,`projects` WHERE `projects`.`projects_id`=`project_admin`.`project_id` AND `project_admin`.`project_id`='$id1'");
        return $query->result();
    }



    public function get_project_for_edit($id)
    {
        $query = $this->db->query("SELECT * FROM `projects` WHERE `projects_id`= '$id'");
        return $query->result();
    }

    public function insert_projects($insertby_name)
    {
        $design_class = $this->input->post('design_class');

        $image = $_FILES["Photo"]["name"];
        move_uploaded_file($_FILES["Photo"]["tmp_name"], "images/" . $image);

        $data = array(

            'image' => $image,
            'design_class' => $design_class,
            'insert_by' => $insertby_name

        );
        $data = $this->security->xss_clean($data);
        $this->db->insert('projects', $data);
    }

    public function update_projects($insertby_name,$id)
    {
        $design_class = $this->input->post('design_class');
        $image = $_FILES["Photo"]["name"];

        if ($image != null) {
            move_uploaded_file($_FILES["Photo"]["tmp_name"], "images/" . $image);

            $data = array(

                'image' => $image,
                'design_class' => $design_class,
                'insert_by' => $insertby_name

            );
            $data = $this->security->xss_clean($data);
            $this->db->where('projects_id', $id);
            $this->db->update('projects', $data);
        }
        else{

            $data = array(


                'design_class' => $design_class,
                'insert_by' => $insertby_name

            );
            $data = $this->security->xss_clean($data);
            $this->db->where('projects_id', $id);
            $this->db->update('projects', $data);

        }
    }




    public function get_all_project_head()
    {

        $query = $this->db->query("SELECT * FROM `project_header`");
        return $query->result();
    }
    public function edit_project_fead($project_header,$insertby_name)
    {



        $data = array(

            'name' => $project_header ,

            'insert_by' => $insertby_name,



        );

        $data = $this->security->xss_clean($data);

        $this->db->update('project_header', $data);
    }

    public function project_edit_by_id($id)
    {
        $project_name = $this->input->post('projectname');
        $project_description=$this->input->post('details');
        $insertby_name =$this->input->post('insertby');
        $image = $_FILES["Photo"]["name"];

        if ($image != null) {
            move_uploaded_file($_FILES["Photo"]["tmp_name"], "images/" . $image);

            $data = array(

                'project_image' => $image,
                'project_description' => $project_description,
                'insert_by' => $insertby_name

            );
            $data1 = array(

                'name' => $project_name,
                'insert_by' => $insertby_name


            );
            $data = $this->security->xss_clean($data);
            $this->db->where('project_id', $id);
            $this->db->update('project_admin', $data);

            $data1 = $this->security->xss_clean($data1);
            $this->db->where('projects_id', $id);
            $this->db->update('projects', $data1);
        }
        else{

            $data = array(


                'project_description' => $project_description,
                'insert_by' => $insertby_name

            );
            $data1 = array(


                'name' => $project_name,
                'insert_by' => $insertby_name

            );
            $data = $this->security->xss_clean($data);
            $this->db->where('project_id', $id);
            $this->db->update('project_admin', $data);

            $data1 = $this->security->xss_clean($data1);
            $this->db->where('projects_id', $id);
            $this->db->update('projects', $data1);

        }
    }


}

