<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Report extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model("ReportModel","",TRUE);
        }

        public function index() {
            $this->load->model("ReportModel","",TRUE);
            $data['pemesanan'] = $this->ReportModel->getDataReport();
            $this->load->view("navbar");
            $this->load->view('report', $data);
        }
    }
?>

