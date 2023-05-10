<?php
    class Login_model {
        private $db;
        public function __construct(){
            $this->db = new Database;
        }

        public function login($username) {
            $this->db->query("SELECT * FROM pengguna WHERE username=:username");
            $this->db->bind("username", $username);
            return $this->db->resultSet();
        }
    }