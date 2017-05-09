<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Menum extends CI_Model
{



    public function insert_menu()
    {
        $menuname = $this->input->post('menuname');


        $level = $this->input->post('level');
        $insertby = $this->input->post('insertby');
//        $name=$this->input->post('name');
//        $title=$this->input->post('title');
//        $summary=$this->input->post('summary');
//        $content=$this->input->post('content');
        $date=date("Y-m-d");
        //$phone_number = $this->input->post('phone_number');
        //$type = $this->input->post('type');

        //$parent_id = $this->input->post('parent_id');

        if ($level == '0') {

            $data = array(

                'menuName' => $menuname,
                'level' => $level,
                'parentId' => '0',
                'addedBy' => $insertby,
                'addedDate'=>$date
            );
//            $data1 = array(
//
//                'pageName' => $name,
//                'pageTitle' => $title,
//                'pageSummary' => $summary,
//                'pageContent'=>$content,
//                'menuId'=>$level,
//                'addedBy' => $insertby,
//                'addedDate'=>$date
//            );
            $data = $this->security->xss_clean($data);
            $this->db->insert('menu', $data);
        }else{

            $parent_id = $this->input->post('menu_name');
            if ($parent_id == null) {
                return false;
            }elseif ($parent_id == 'Select Menu')
            {
                return false;
            }
            $data = array(

                'menuName' => $menuname,
                'parentId' => $parent_id,

                'level' => $level,
                'addedBy' => $insertby,
                'addedDate'=>$date
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
        $level = $this->input->post('level');
        $date=date("Y-m-d");


        //

        if ($level=='0'){



            $data = array(

                'menuName' => $menuname,
                'parentId' => '0',
                'level'=>$level,
                'lastModifiedBy' => $insertby,
                'lastModifiedDate'=>$date

            );
            $data = $this->security->xss_clean($data);
            $this->db->where('menuId', $id);
            $this->db->update('menu', $data);

        }
        else {
            $parent_id = $this->input->post('menu_name');
            if ($parent_id == null) {
                return false;
            }elseif ($parent_id == 'Select Menu')
            {
                return false;
            }
            else {
                $data = array(

                    'menuName' => $menuname,
                    'parentId' => $parent_id,
                    'level' => $level,
                    'lastModifiedBy' => $insertby,
                    'lastModifiedDate' => $date

                );
                $data = $this->security->xss_clean($data);
                $this->db->where('menuId', $id);
                $this->db->update('menu', $data);
            }
        }
    }

    public function get_menu()
    {
        $query = $this->db->query("SELECT * FROM `menu`");
        return $query->result();
    }
}
