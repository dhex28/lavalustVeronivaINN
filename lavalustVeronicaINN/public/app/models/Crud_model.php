<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Crud_model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->call->database();
    }
    //, $roomimage
    public function add($room_name, $price, $max_person, $view, $bed, )
    {
        $data = array(
            'room_name' => $room_name,
            'price' => $price,
            'max_person' => $max_person,
            'view' => $view,
            'bed' => $bed,
            //'roomimage' => $roomimage
           // 'roomimage' => $roomimage,
        );
    
        // Make sure 'roomimage' key is set
        // if (isset($roomimage)) {
        //     $data['roomimage'] = $roomimage;
        // }
    
        return $this->db->table('rooms')->insert($data);
            
    }
    public function read()
    {
        return $this->db->table('rooms')->get_all();
    }

    public function delete($id)
    {
    $this->db->table('rooms')->where(array('id' => $id))->delete();

    
    }
    public function edit($id, $room_name, $price, $max_person, $view, $bed, $roomimage )
    {
        $data = array(
          
            'room_name' => $room_name,
            'price' => $price,
            'max_person' => $max_person,
            'view' => $view,
            'bed' => $bed,
            'roomimage' => $roomimage,
        );
        $result = $this->db->table('rooms')->where(array('id' => $id))->update($data);
        if ($result)
            return true;
    }
    public function rooms($id){
        return $this->db->table('rooms')->where(array('id' => $id))->get();
    }


    //booking

    public function addBook($check_in_date, $check_out_date, $special_requests, $name, $email, $phone, $address,$roomName, $payment_status)
    {
        $data = array(
            'check_in_date' => $check_in_date,
            'check_out_date' => $check_out_date,
            'special_requests' => $special_requests,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'roomName' => $roomName, 
            'payment_status' => $payment_status,
    

            
            
        );
        return $this->db->table('booking')
            ->insert($data);
            
    }

       
       public function readBook()
       {
         return $this->db->table('booking')->get_all();
        // return $this->db->table('booking')
        // ->join('rooms', 'rooms.id = booking.room_id', 'LEFT')
        // ->get_all();

    //     $sql = "SELECT booking.*, rooms.room_name 
    //     FROM booking 
    //     LEFT JOIN rooms ON booking.room_id = rooms.id";

    //         // Assuming your custom database library provides a method like query() or raw()
    //         $result = $this->db->raw($sql);

    //         // Check if the result is an array
    //         if (is_array($result)) {
    //             return $result;
    //         }

    //         // If the result is an object, proceed to fetch all records
    //         return $result->getResultArray(); // Assuming your ORM or database library has a method like getResultArray()


    
  }

  //for approve and decline function

  public function updateBookingStatus($id, $status)
  {
      $data = array('status' => $status);
      return $this->db->table('booking')->where('id', $id)->update($data);
  }

  // New method to get bookings by status
    public function getBookingsByStatus($status)
    {
        return $this->db->table('booking')
            ->where('status', $status)
            ->get_all();
    }
    public function getTotalBookings() {
        // Get the count of bookings with status 'approved' and 'pending'
        return $this->db->table('booking')
            ->select_count('*')
            ->where("(status = 'approved' OR status = 'pending')")
            ->get();
    }

    
    
public function getTotalRooms() {
    // Get the count of rooms
    return $this->db->table('rooms')->select_count('*')->get();
}

public function getTotalInquiries() {
    // Get the count of all inquiries (including pending, approved, and declined)
    return $this->db->table('booking')->select_count('*')->get();
}
}
