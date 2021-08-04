<?php 
defined('BASEPATH') or exit('No direct script access allowed');

Class BedBooking_model extends CI_Model{

    public function getData($place, $date){
        $dbBed = $this->load->database('bed', TRUE);
        $dbBed->select('*');
        $dbBed->from('booking');
        $dbBed->where('filedbed_id', $place);
        $dbBed->where('book_date', $date);
        $dbBed->order_by('bed_number', 'ASC');
        $query = $dbBed->get();

        if ($query->num_rows() >0) {
            return $query->result();
        }else{
            return array();
        }
    }

    public function detail($id){
        $dbBed = $this->load->database('bed', TRUE);
        $dbBed->select('*');
        $dbBed->from('booking');
        $dbBed->join('filedbed', 'filedbed.id = booking.filedbed_id');
        $dbBed->join('district', 'district.district_code = filedbed.district_code');
        $dbBed->join('province', 'province.province_code = district.province_code');
        $dbBed->where('booking.id = "'.$id.'"');
        $query = $dbBed->get();
    
        if ($query->num_rows() >0) {
            return $query->row();
        }else{
            return array();
        }
    }

    public function insert($data){
        $dbBed = $this->load->database('bed', TRUE);
        $dbBed->insert('booking', $data); 
        return $dbBed->insert_id();     
    }
}
?>