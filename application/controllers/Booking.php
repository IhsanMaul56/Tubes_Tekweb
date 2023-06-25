<?php
    class Booking extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("BookingModel","",TRUE);
        }

        public function index() {
            $this->load->model('BookingModel');
            $data['pemesanan'] = $this->load->getData();
            $this->load->view("booking", $data);
        }

        public function prosesTambah() {
            if($this->BookingModel->insertData()){
                redirect(site_url("home"));
            }
            else{
                redirect(site_url("booking/tambah"));
            }
        }
    }
?>