<?php
    class UserModel extends CI_Model{
        function insertUser($login){
            return $this->db->insert("login",$login);
        }
        function login(){
            $username = $this->input->post("username");
            $pass = $this->input->post("password");
            $this->db->where("username",$username);
            $this->db->where("password",$pass);
            return $this->db->get("login");
        }
    }
?>