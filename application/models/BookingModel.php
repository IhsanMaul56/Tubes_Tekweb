<?php
   class BookingModel extends CI_Model{
        function getDataPemesanan() {
            return $this->db->get("pemesanan");
        }

        function insertData() {
            $pemesanan = array(
                "ID_Pesanan" => $this->input->post("id"),
                "Nama" => $this->input->post("nama"),
                "JK" => $this->input->post("jenis_kelamin"),
                "alamat" => $this->input->post("alamat"),
                "tanggal_masuk" => $this->input->post("tanggal_masuk"),
                "Durasi" => $this->input->post("durasi"),
                "Jenis_Kamar" => $this->input->post("jenis_kamar"),
                "Tarif" => $this->input->post("tarif"),
            );
            return $this->db->insert("pemesanan", $pemesanan);
        }
   } 
?>