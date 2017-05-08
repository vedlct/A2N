<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Menum extends CI_Model
{



    public function insert_menu()
    {
        $menuname = $this->input->post('menuname');


        $details = $this->input->post('details');
        $insertby = $this->input->post('insertby');
        //$phone_number = $this->input->post('phone_number');
        //$type = $this->input->post('type');

        $parent_id = $this->input->post('parent_id');

        if ($parent_id != 'Select parent') {

            $data = array(

                'name' => $menuname,
                'parent_id' => $parent_id,

                'details' => $details,
                'insert_by' => $insertby,
            );
            $data = $this->security->xss_clean($data);
            $this->db->insert('menu', $data);
        }elseif ($parent_id == 'Select parent'){

            $data = array(

                'name' => $menuname,
                'parent_id' => '0',

                'details' => $details,
                'insert_by' => $insertby,
            );
            $data = $this->security->xss_clean($data);
            $this->db->insert('menu', $data);

        }
    }

    public function get_user($id)
    {
        $query=$this->db->query("SELECT * FROM `login` WHERE `login_id`='$id'");
        return $query->result();
    }

    public function get_username($id)
    {
        $query=$this->db->query("SELECT CONCAT(`first_name`,' ', `last_name`) AS name FROM `login` WHERE `login_id`='$id'");
        return $query->result();
    }

    public function update_user($id)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $email = $this->input->post('email');
        $phone_number = $this->input->post('phone_number');

        $data = array(

            'username' => $username,
            'password' => $password,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'phone_number' => $phone_number
        );
        $data = $this->security->xss_clean($data);
        $this->db->where('login_id', $id);
        $this->db->update('login', $data);
    }

    public function show_menu(){
        //$this->db->group_by('menu_id');
        $query = $this->db->get('menu');
        return $query->result();

    }
    public function show_menu_by_id($id1){
        $query=$this->db->query("SELECT * FROM `menu` WHERE `menuId` != '$id1' Group BY `MenuName`");
        return $query->result();

    }

    public function get_menu_by_id($id1){
        $query = $this->db->get_where('menu', array('menuId' => $id1));
        return $query->result();

    }

    public function menu_edit_by_id($id)
    {
//        $query = $this->db->get_where('menu', array('menu_id' => $id1));
//        return $query->result();

        $menuname = $this->input->post('menuname');



        $insertby = $this->input->post('insertby');

        $parent_id = $this->input->post('parent_id');

        $query1=$this->db->query("SELECT * FROM `menu` WHERE `menuId` = '$parent_id' ");
        //return $query1->result();
        foreach ($query1->result() as $r){$level=$r->level;}
        $level=$level+1;

        if ($parent_id == 'Select parent'){

            $data = array(

                'menuName' => $menuname,
                'lastModifiedBy' => $insertby,

            );
            $data = $this->security->xss_clean($data);
            $this->db->where('menuId', $id);
            $this->db->update('menu', $data);

        }elseif ($parent_id == 'Make This Menu'){

            $data = array(

                'menuName' => $menuname,
                'parentId' => '0',
                'level'=>'0',


                'lastModifiedBy' => $insertby,

            );
            $data = $this->security->xss_clean($data);
            $this->db->where('menuId', $id);
            $this->db->update('menu', $data);

        }else {

            $data = array(

                'menuName' => $menuname,
                'parentId' => $parent_id,
                'level'=>$level,


                'lastModifiedBy' => $insertby,

            );
            $data = $this->security->xss_clean($data);
            $this->db->where('menuId', $id);
            $this->db->update('menu', $data);
        }
    }

    public function get_menu()
    {
        $query = $this->db->query("SELECT * FROM `menu`");
        return $query->result();
    }
}
