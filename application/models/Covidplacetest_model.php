<?php 
defined('BASEPATH') or exit('No direct script access allowed');

Class Covidplacetest_model extends CI_Model{

    public function getData(){
        $query =  $this->db->get('tbplacecovidtest');

        if ($query->num_rows() >0) {
            return $query->result();
        }else{
            return array();
        }
    }

    //เพิ่มสถานที่จองคิวตรวจโควิด
    public function insert_covidplacetest(){
        $this->db->insert('tbplacecovidtest');        
    }
}
?>