<?php
    class User_model {
        private $table = "pengguna";
        private $db;
        public function __construct(){
            $this->db = new Database;
        }

        public function getAllUsers() {
            $this->db->query("SELECT * FROM ".$this->table);
            return $this->db->resultSet();
        }

        public function getUser($id) {
            $this->db->query("SELECT * FROM ".$this->table." WHERE id_pengguna=:id");
            $this->db->bind("id", $id);
            return $this->db->single();
        }

        public function getResetUser($id) {
            $this->db->query("SELECT * FROM ".$this->table." WHERE id_pengguna=:id");
            $this->db->bind("id", $id);
            return $this->db->single();
        }

        public function getNamaDepan($nama) {
            $nama = explode(" ",$nama);
            $namaDepan = $nama[0];
            return $namaDepan;
        }

        public function hapusPengguna($id) {
            $this->db->query("DELETE FROM ".$this->table." WHERE id_pengguna=:id");
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function ubahPassword($pass, $id) {
            $password = password_hash($pass, PASSWORD_DEFAULT);
            $this->db->query("UPDATE ".$this->table." SET password=:password WHERE id_pengguna=:id");
            $this->db->bind("id", $id);
            $this->db->bind("password", $password);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function ubah($data, $foto) {
            //cek apakah user pilih gambar lama atau tidak
         
            $this->db->query("UPDATE ".$this->table." SET nama=:nama, foto=:foto WHERE id_pengguna=:id");
            $this->db->bind("id", $data["id"]);
            $this->db->bind("nama", $data["nama"]);
            $this->db->bind("foto", $foto);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function cekPassword ($id) {
            $this->db->query("SELECT * FROM pengguna WHERE id_pengguna=:id");
            $this->db->bind("id", $id);
            return $this->db->resultSet();
        }

        public function ubahFoto($id, $foto) {
            $this->db->query("UPDATE ".$this->table." SET foto=:foto WHERE id_pengguna=:id");
            $this->db->bind("id", $id);
            $this->db->bind("foto", $foto);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
    