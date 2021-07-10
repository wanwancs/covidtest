<?php 
Class Covidplacetest_model extends CI_Model{
    //เพิ่มสถานที่จองคิวตรวจโควิด
    public function insert_covidplacetest(){
        $this->db->insert('tbplacecovidtest');        
    }
}
?>