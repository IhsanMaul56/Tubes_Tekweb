<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Payment extends CI_Controller {
    
        public function __construct() {
            parent::__construct();
    
            // Memuat model
            $this->load->model('PaymentModel');
        }
    
        public function index() {
            $this->load->view('payment');
            $data_pesanan = $this->PaymentModel->read_data_pesanan();
            foreach ($data_pesanan as $row) {
                echo $row->ID; // Mengakses kolom 'ID'
                echo $row->Nama; // Mengakses kolom 'Nama'
                echo $row->JK; // Mengakses kolom 'JK'
                echo $row->alamat; // Mengakses kolom 'alamat'
                echo $row->tanggal_masuk; // Mengakses kolom 'tanggal_masuk'
                echo $row->Durasi; // Mengakses kolom 'Durasi'
                echo $row->Jenis_Kamar; // Mengakses kolom 'Jenis_Kamar'
                echo $row->Tarif; // Mengakses kolom 'Tarif'
            }
        }
    
        public function proses_payment() {
            // Kode untuk pemrosesan pembayaran dan memasukkan data ke tabel 'pemesanan'
            // ...
    
            // Contoh: Panggil fungsi read_data_pesanan()
            $data_pesanan = $this->PaymentModel->read_data_pesanan();
            foreach ($data_pesanan as $row) {
                echo $row->ID; // Mengakses kolom 'ID'
                echo $row->Nama; // Mengakses kolom 'Nama'
                echo $row->JK; // Mengakses kolom 'JK'
                echo $row->alamat; // Mengakses kolom 'alamat'
                echo $row->tanggal_masuk; // Mengakses kolom 'tanggal_masuk'
                echo $row->Durasi; // Mengakses kolom 'Durasi'
                echo $row->Jenis_Kamar; // Mengakses kolom 'Jenis_Kamar'
                echo $row->Tarif; // Mengakses kolom 'Tarif'
            }
            
        }
    }
    
    