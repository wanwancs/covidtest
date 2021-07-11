<?php 
defined('BASEPATH') or exit('No direct script access allowed');

Class Booking_model extends CI_Model{

    public function getBookingQueue($date, $place){
        $this->db->select('*');
        $this->db->from('tbbooking');
        $this->db->where('BOOKDATE LIKE "%'.$date.'%"');
        $this->db->where('PLACEID = "'.$place.'"');
        $query = $this->db->get();

        if ($query->num_rows() >0) {
            return $query->result();
        }else{
            return array();
        }
    }

    public function detail($id){
        $this->db->select('*');
        $this->db->from('tbbooking');
        $this->db->join('tbplacecovidtest', 'tbplacecovidtest.TBPlaceID = tbbooking.PLACEID');
        $this->db->where('BOOKINGID LIKE "%'.$id.'%"');
        $query = $this->db->get();

        if ($query->num_rows() >0) {
            return $query->row();
        }else{
            return array();
        }
    }
    
    //จองคิวตรวจโควิด
    public function insert_booking($data){
        $this->db->insert('tbbooking', $data); 
        return $this->db->insert_id();       
    }
}
?>