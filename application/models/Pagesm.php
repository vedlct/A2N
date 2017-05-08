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
}