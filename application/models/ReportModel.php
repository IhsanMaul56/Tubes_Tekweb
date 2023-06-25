<?php
    class ReportModel extends CI_Model {
        public function getDataReport() {
            return $this->db->get("pemesanan");
            return $query->result();
        }
    }
?>