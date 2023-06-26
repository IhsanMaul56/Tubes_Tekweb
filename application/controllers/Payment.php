<?php
    class Payment extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
            $this->load->model("PaymentModel","",TRUE);
        }
    
        public function index() {
            $this->load->view("navbar");
            $this->load->view('payment');
        }
    
        public function proses_payment() {
            if($this->PaymentModel->insertData()){
                redirect(site_url("home"));
            }
            else{
                redirect(site_url("/tambah"));
            }
        }
    }
    
    