<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentModel extends CI_Model {

    public function read_data_pesanan() {
        $query = $this->db->get('pemesanan');
        return $query->result(); // Mengembalikan hasil query sebagai array objek
    }

    public function proses_payment() {
        // Kode untuk pemrosesan pembayaran dan memasukkan data ke tabel 'pemesanan'
        // ...

        // Contoh: Panggil fungsi read_data_pesanan()
        return $this->read_data_pesanan();
    }
}
