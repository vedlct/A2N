<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Projectm extends CI_Model
{


    public function get_all_design_class()
    {
        $query = $this->db->get_where('designclass', array('type' => 'project'));
        return $query->result();
    }

    public function get_projects()
    {
        $query = $this->db->query("SELECT * FROM `project` ORDER by `projectId` DESC limit 4 ");
        return $query->result();
    }
    public function get_all_projects()
    {
        $query = $this->db->query("SELECT p.* , d.designClassname FROM project p JOIN designclass d ON p.designClassId = d.designClassId");
        return $query->result();
    }

    public function get_all_projects_for_portfolio()
    {
        $query = $this->db->query("SELECT * FROM `project_admin` GROUP BY `id`");
        return $query->result();
    }

    public function get_projects_info($id)
    {
        $query = $this->db->query("SELECT * FROM `project_admin` WHERE `id`='$id'");
        return $query->result();
    }

    public function show_project_by_id($id1)
    {
        $query = $this->db->query("SELECT * FROM `project`WHERE `projectId`='$id1'");
        return $query->result();
    }



    public function get_project_for_edit($id)
    {
        $query = $this->db->query("SELECT * FROM `projects` WHERE `id`= '$id'");
        return $query->result();
    }
    public function get_id($projectname)
    {
        $query = $this->db->query("SELECT * FROM `project_admin` WHERE `title`= '$projectname'");
        return $query->result();
    }

    public function insert_projects($insertby_name)
    {
        $design_class = $this->input->post('design_class');
        $project_id = $this->input->post('project');


        if ($project_id == 'Select Project') {
            $projectname = $this->input->post('projectname');
            $image = $_FILES["Photo"]["name"];


            if ($image != null) {


                $data1 = array(


                    'insert_by' => $insertby_name,
                    'title'=>$projectname,
                    'design_class'=>$design_class,
                    'design_image'=>$image

                );
                $data1 = $this->security->xss_clean($data1);
                $this->db->insert('project', $data1);

                $query = $this->db->query("SELECT * FROM `project_admin` ORDER  BY `id` DESC limit 1 ");

                foreach ($query->result() as $r){

                    $id=$r->id;
                }

                $data = array(

                    'image' => $image,
                    'design_class' => $design_class,
                    'insert_by' => $insertby_name,
                    'title'=>$projectname,
                    'project_id'=>$id

                );
                $data = $this->security->xss_clean($data);
                $this->db->insert('project', $data);


            }else{

                $data1 = array(


                    'insert_by' => $insertby_name,
                    'title'=>$projectname,
                    'design_class'=>$design_class,


                );
                $data1 = $this->security->xss_clean($data1);
                $this->db->insert('project_admin', $data1);

                $query = $this->db->query("SELECT * FROM `project_admin` ORDER  BY `id` DESC limit 1 ");

                foreach ($query->result() as $r){

                    $id=$r->id;
                }



                $data = array(


                    'design_class' => $design_class,
                    'insert_by' => $insertby_name,
                    'title'=>$projectname,
                    'project_id'=>$id

                );
                $data = $this->security->xss_clean($data);
                $this->db->insert('projects', $data);


            }
        }else{

            $image = $_FILES["Photo"]["name"];
            $query = $this->db->query("SELECT * FROM `project_admin` WHERE `id`='$project_id'");

            foreach ($query->result() as $r){

                $title=$r->title;
            }
            if ($image != null) {
                move_uploaded_file($_FILES["Photo"]["tmp_name"], "images/" . $image);

                $data = array(

                    'image' => $image,
                    'design_class' => $design_class,
                    'insert_by' => $insertby_name,
                    'project_id' => $project_id,
                    'title'=>$title


                );
                $data = $this->security->xss_clean($data);
                $this->db->insert('projects', $data);


            }else{

                $data = array(


                    'design_class' => $design_class,
                    'insert_by' => $insertby_name,
                    'project_id' => $project_id,
                    'title'=>$title

                );
                $data = $this->security->xss_clean($data);
                $this->db->insert('projects', $data);
            }
        }
    }

    public function project_add()
    {
        $projectname = $this->input->post('projectname');
        $details = $this->input->post('details');
        $insertby = $this->input->post('insertby');
        $design_class = $this->input->post('design_class');
        $status=$this->input->post('status');
        $image1 = $_FILES["Photo1"]["name"];
        move_uploaded_file($_FILES["Photo1"]["tmp_name"], "images/" . $image1);

        $date=date("Y-m-d");

        $image = $_FILES["Photo"]["name"];
        move_uploaded_file($_FILES["Photo"]["tmp_name"], "images/" . $image);




            $data = array(

                'image' => $image,
                'projectName' => $projectname,
                'projectDetails' => $details,
                'addedBy' => $insertby,
                'designClassId'=>$design_class,
                'imageHome'=>$image1,
                'addedDate'=>$date,
                'status'=>$status

            );
            //$data = $this->security->xss_clean($data);
            $this->db->insert('project', $data);




    }

    public function update_projects($insertby_name,$id)
    {
        $design_class = $this->input->post('design_class');
        $image = $_FILES["Photo"]["name"];

        $query = $this->db->query("SELECT * FROM `projects` WHERE `id`='$id' ORDER BY `id` limit 1 ");

        foreach ($query->result() as $r){

            $project_id=$r->project_id;
        }

        if ($image != null) {
            move_uploaded_file($_FILES["Photo"]["tmp_name"], "images/" . $image);

            $data = array(

                'image' => $image,
                'design_class' => $design_class,
                'insert_by' => $insertby_name

            );
            $data = $this->security->xss_clean($data);
            $this->db->where('id', $id);
            $this->db->update('projects', $data);

            $data1 = array(

                'design_image' => $image,
                'design_class' => $design_class,
                'insert_by' => $insertby_name

            );
            $data1 = $this->security->xss_clean($data1);
            $this->db->where('id', $project_id);
            $this->db->update('project_admin', $data1);
        }
        else{

            $data = array(


                'design_class' => $design_class,
                'insert_by' => $insertby_name

            );
            $data = $this->security->xss_clean($data);
            $this->db->where('id', $id);
            $this->db->update('projects', $data);

            $data1 = array(

                'design_image' => $image,
                'design_class' => $design_class,
                'insert_by' => $insertby_name

            );
            $data1 = $this->security->xss_clean($data1);
            $this->db->where('id', $project_id);
            $this->db->update('project_admin', $data1);

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
        $design_class =$this->input->post('design_class');
        $status=$this->input->post('status');
        $image1 =$_FILES["Photo1"]["name"];
        $image = $_FILES["Photo"]["name"];
        move_uploaded_file($_FILES["Photo1"]["tmp_name"], "images/" . $image1);

        if ($image != null) {
            move_uploaded_file($_FILES["Photo"]["tmp_name"], "images/" . $image);


            $data = array(

                'image' => $image,
                'projectName' => $project_name,
                'projectDetails' => $project_description,
                'addedBy' => $insertby_name,
                'designClassId'=>$design_class,
                'imageHome'=>$image1,
                'status'=>$status

            );

            //$data = $this->security->xss_clean($data);
            $this->db->where('projectId', $id);
            $this->db->update('project', $data);


        }
        else{

            $data = array(


                'projectDetails' => $project_description,
                'addedBy' => $insertby_name,
                'projectName' => $project_name,
                'designClassId'=>$design_class,
                'imageHome'=>$image1,
                'status'=>$status

            );

            //$data = $this->security->xss_clean($data);
            $this->db->where('projectId', $id);
            $this->db->update('project', $data);



        }
    }


}

