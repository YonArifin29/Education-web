<?php
    //mengngubah menjadi password has
    class Registrasi_model {
        private $db;

        public function __construct(){
            $this->db = new Database;
        }

        public function validating($phone) { 
            if(!is_numeric($phone)) {
                $result = "Invalid";
            }elseif(strlen($phone)  != 12) {
                $result = "Invalid";
            }
            return $result;
        }

       public function Registrasi($data) {
        if($data["password"] != $data["valpassword"]) {
            echo "
                    <div class='alert alert-danger text-center' role='alert'>
                        Password tidak sama
                    </div>
                ";
            return 0;
            exit;
        }
        
        if($data["nohp"]) {
                if($this->validating($data["nohp"]) == "Invalid") {
                    echo "
                            <div class='alert alert-danger text-center' role='alert'>
                                Nomor Hp tidak valid!
                            </div>
                        ";
                    return 0;
                    exit;
                }
        }

        // mengambil seluruh data pengguna untuk mengecek apakah username atu password sudah digunakan
        $this->db->query("SELECT username, nohp FROM pengguna");
        $datadb = $this->db->resultSet();
        foreach($datadb as $result) :
            if($data["username"] == $result["username"]) {
                echo "
                    <div class='alert alert-danger text-center' role='alert'>
                        Username sudah digunakan
                    </div>
                ";
                return 0;
                exit;
            } elseif($data["nohp"]== $result["nohp"]) {
                echo "
                    <div class='alert alert-danger text-center' role='alert'>
                        Nomor Hp sudah digunakan
                    </div>
                ";
                return 0;
                exit;
            }
        endforeach;
        $password = password_hash($data["password"], PASSWORD_DEFAULT);
        //menambahkan data yang sudah lolos filter
        $query = "INSERT INTO pengguna (nama, nohp, username, password)VALUES (:nama, :nohp, :username, :password)";
        $this->db->query($query);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("nohp", $data["nohp"]);
        $this->db->bind("username", $data["username"]);
        $this->db->bind("password", $password);
        $this->db->execute();
        return $this->db->rowCount();
       }


    }