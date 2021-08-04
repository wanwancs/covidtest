<?php 
defined('BASEPATH') or exit('No direct script access allowed');

Class District_model extends CI_Model{

    public function getAmphur($provinceCode){
        $dbBed = $this->load->database('bed', TRUE);
        $dbBed->select('*');
        $dbBed->from('district');
        $dbBed->where('province_code', $provinceCode);
        $dbBed->group_by('amphur_code');
        $dbBed->order_by('amphur_name', 'ASC');
        $query = $dbBed->get();

        if ($query->num_rows() >0) {
            return $query->result();
        }else{
            return array();
        }
    }

    public function getDistrict($amphurCode){
        $dbBed = $this->load->database('bed', TRUE);
        $dbBed->select('*');
        $dbBed->from('district');
        $dbBed->where('amphur_code', $amphurCode);
        $dbBed->order_by('district_name', 'ASC');
        $query = $dbBed->get();

        if ($query->num_rows() >0) {
            return $query->result();
        }else{
            return array();
        }
    }
}
?>