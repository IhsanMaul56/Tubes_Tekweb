<?php

    class PaymentModel extends CI_Model {

        function getDataPembayaran() {
            return $this->db->get("pemesanan");
        }

        function getPembayaranByID($id) {
            $this->db->where("ID_Pesanan", $id);
            return $this->db->get("pemesanan");
        }

        function insertDataPembayaran() {
            $pembayaran = array(
                "ID" => $this->input->get("id"),
                "Nama" => $this->input->post("nama"),
                "Tarif" => $this->input->post("tarif"),
                "Jenis_Penbayaran" => $this->input->post("cara_pembayaran"),
                "Status_Pembayaran" => $this->input->post("status_pembayaran")
            );
            return $this->db->insert("pemesanan", $pemesanan);
        }
    }
?>