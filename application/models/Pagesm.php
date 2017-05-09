<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Pagesm extends CI_Model
{

    public function get_page_name(){

        $query = $this->db->query("SELECT * FROM `page` ");
        return $query->result();
    }
    public function get_old_page_content($id){

        $query = $this->db->query("SELECT * FROM `page` WHERE `pageId` = '$id'");
        return $query->result();

    }

    public function get_menu_name(){

        $query = $this->db->query("SELECT * FROM `menu` ");
        return $query->result();
    }

    public function get_dropdown_menu($id){

        $newid= $id-1;
        $query = $this->db->query("SELECT * FROM `menu` WHERE `level`= '$newid'");
        return $query->result();
    }

    public function insert_pages(){


        $title = $this->input->post('title');
        $oldtitle = $this->input->post('oldtitle');
        $level = $this->input->post('level');
        $parentid= $this->input->post('menu_name');

        if ($title != null) {


            $data = array(


                'menuName' => $title,
                'level' => 0,

            );

        }else{

            $data = array(


                'menuName' => $oldtitle,
                'level' => $level,
                'parentId' => $parentid

            );

        }

            $this->db->insert('menu', $data);

        $query = $this->db->query("SELECT * FROM `menu` ORDER BY `menuId` DESC LIMIT 1 ");
        foreach ($query->result() as $m){
            $menuid = $m->menuId;
        }

        $name = $this->input->post('name');
        $title = $this->input->post('title');
        $summary = $this->input->post('summary');
        $content= $this->input->post('content');

        $data1 = array(


            'menuId' => $menuid,
            'pageName' => $name,
            'pageTitle' => $title,
            'pageSummary' => $summary,
            'pageContent' => $content,


        );

        $this->db->insert('page', $data1);


    }
    public function edit_page($id){

        $name = $this->input->post('name');
        $title = $this->input->post('title');
        $summary = $this->input->post('summary');
        $content= $this->input->post('content');

        $data2 = array(

            'pageName' => $name,
            'pageTitle' => $title,
            'pageSummary' => $summary,
            'pageContent' => $content,


        );

        $this->db->where('pageId',$id);
        $this->db->update('page',$data2);


        $oldtitle = $this->input->post('oldtitle');
        $level = $this->input->post('level');
        $parentid= $this->input->post('menu_name');
        $menuid= $this->input->post('menuid');

        $data3 = array(


            'menuName' => $oldtitle,
            'level' => $level,
            'parentId' => $parentid

        );
        $this->db->where('menuId',$menuid);
        $this->db->update('menu',$data3);


    }
}