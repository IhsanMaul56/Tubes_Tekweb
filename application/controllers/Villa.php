<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Villa extends CI_Controller {
    public function index() {
        $this->load->view('dashboard');
    }

    public function booking() {
        $this->load->view('booking');
    }

    public function payment() {
        $this->load->view('payment');
    }

    public function report() {
        $this->load->view('report');
    }
    public function about() {
        $this->load->view('about');
    }
}