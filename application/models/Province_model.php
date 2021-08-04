<?php 
defined('BASEPATH') or exit('No direct script access allowed');

Class Province_model extends CI_Model{

    

    public function getAllData(){
        $dbBed = $this->load->database('bed', TRUE);
        $dbBed->select('*');
        $dbBed->from('province');
        $dbBed->order_by('province_name', 'ASC');
        $query = $dbBed->get();

        if ($query->num_rows() >0) {
            return $query->result();
        }else{
            return array();
        }
    }
}
?>