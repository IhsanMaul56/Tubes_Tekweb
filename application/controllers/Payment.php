<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
    
    public function index() {
        $this->load->view('pembayaran_vila');
    }
    
    public function proses_pembayaran() {
        // Lakukan pemrosesan pembayaran di sini
        // Ambil data dari $_POST untuk digunakan dalam proses pembayaran
        
        // Contoh penyimpanan data ke database
        $data = array(
            "ID" => $this->input->post("id"),
            "Nama" => $this->input->post("nama"),
            "JK" => $this->input->post("jenis_kelamin"),
            "alamat" => $this->input->post("alamat"),
            "tanggal_masuk" => $this->input->post("tanggal_masuk"),
            "Durasi" => $this->input->post("durasi"),
            "Jenis_Kamar" => $this->input->post("jenis_kamar"),
            "Tarif" => $this->input->post("tarif")
        );
        
        $this->db->insert('pembayaran', $data);
        
        // Tampilkan halaman konfirmasi atau arahkan ke halaman lain setelah pembayaran selesai
        
        // Contoh tampilkan halaman konfirmasi
        $this->load->view('konfirmasi_pembayaran', $data);
    }
}
