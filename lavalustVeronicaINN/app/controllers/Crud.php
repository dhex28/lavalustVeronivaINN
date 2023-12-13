<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');

class Crud extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->call->helper('url');
		$this->call->library('session');
		$this->call->library('form_validation');
		$this->call->model('User_model');
		$this->call->model('Crud_model');
		$this->call->database();

    }
    public function add()
    {
       
            $room_name = $this->io->post('room_name');
            $price = $this->io->post('price');
            $max_person = $this->io->post('max_person');
            $view = $this->io->post('view');
            $bed = $this->io->post('bed');
            //$roomimage = $this->io->post('roomimage');
            // , $roomimage

           // $uploadedImage = $this->handleImageUpload();


        
        $this->Crud_model->add($room_name, $price, $max_person, $view, $bed ,);
        $data = $this->Crud_model->read();
        //$this->call->view('admin/rooms', $data);
         return redirect('/addroompage');
        
    }

    

    public function addBook()
    {
       
            $check_in_date = $this->io->post('check_in_date');
            $check_out_date = $this->io->post('check_out_date');
            $special_requests = $this->io->post('special_requests');
            $name = $this->io->post('name');
            $email = $this->io->post('email');
            $phone = $this->io->post('phone');
            $address = $this->io->post('address');
            $roomName = $this->io->post('roomName');


        
        $this->Crud_model->addBook($check_in_date, $check_out_date, $special_requests, $name, $email, $phone, $address, $roomName);
        $data = $this->Crud_model->readBook();
        //$this->call->view('admin/rooms', $data);
         redirect('/rooms');
        
    }
    
    public function read(){
        $data = $this->Crud_model->read();
        $this->call->view('admin/all-rooms', $data);

    }


    public function delete($id)
    {
        $this->Crud_model->delete($id);
        return redirect('/allrooms');

    }
    public function edit($id){
        $data = $this->Crud_model->rooms($id);
        $this->call->view('admin/edit', $data);
    }
    public function update(){
        $id=$this->io->post('id');
        $room_name = $this->io->post('room_name');
        $price = $this->io->post('price');
        $max_person = $this->io->post('max_person');
        $view = $this->io->post('view');
        $bed = $this->io->post('bed');
        $roomimage = $this->io->post('roomimage');
        
        $this->Crud_model->edit($id, $room_name, $price, $max_person, $view, $bed, $roomimage );
        $data = $this->Crud_model->read();
        $this->call->view('admin/all-rooms', $data);
    }

    //in booking approve and decline

    public function approve($id)
    {
        // Update the status to 'approved' in the database
        $this->Crud_model->updateBookingStatus($id, 'Approved');

        // Redirect to the page where you display all pending bookings
        return redirect('/allbooking');
    }

    public function decline($id)
    {
        // Update the status to 'declined' in the database
        $this->Crud_model->updateBookingStatus($id, 'Declined');

        // Redirect to the page where you display all pending bookings
        return redirect('/allbooking');
    }

     // New method to display pending bookings
     public function pendingBookings()
     {
         $data['data'] = $this->Crud_model->getBookingsByStatus('pending');
         return redirect('/allbooking', $data);
     }
 
     // New method to display approved bookings
     public function approvedBookings()
     {
         $data['data'] = $this->Crud_model->getBookingsByStatus('approved');
         return redirect('/allbooking', $data);
     }
 
     // New method to display declined bookings
     public function declinedBookings()
     {
        $data['data'] = $this->Crud_model->getBookingsByStatus('declined');
        return redirect('/allbooking', $data);
     }
    
}