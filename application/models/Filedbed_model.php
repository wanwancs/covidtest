<?php 
defined('BASEPATH') or exit('No direct script access allowed');

Class Filedbed_model extends CI_Model{

    public function getData($district){
        $dbBed = $this->load->database('bed', TRUE);
        $dbBed->select('*');
        $dbBed->from('filedbed');
        $dbBed->where('district_code', $district);
        $dbBed->order_by('filedbed_name', 'ASC');
        $query = $dbBed->get();

        if ($query->num_rows() >0) {
            return $query->result();
        }else{
            return array();
        }
    }

    public function getBedById($place){
        $dbBed = $this->load->database('bed', TRUE);
        $dbBed->select('*');
        $dbBed->from('filedbed');
        $dbBed->where('id', $place);
        $query = $dbBed->get();

        if ($query->num_rows() >0) {
            return $query->row();
        }else{
            return array();
        }
    }

    
}
?>