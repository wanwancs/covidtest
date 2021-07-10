<?php 
Class Booking_model extends CI_Model{
    //จองคิวตรวจโควิด
    public function insert_booking(){
        $this->db->insert('tbbooking');        
    }
}
?>