<?php
    class Database {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $name = DB_NAME;

        private $stmt;
        private $dbh;
        
        public function __construct() {
            //data source name
            $dsn = "mysql:host=".$this->host.";dbname=".$this->name;

            $option = [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

            try {
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
            } catch(PDOException $err) {
                die($err->getMessage());
            }
        }
        

        public function query($query) {
            $this->stmt =$this->dbh->prepare($query);
        }

        public function bind($param, $value, $type = null) {
            if(is_null($type)) {
                switch(true) {
                    case is_int($value) :
                        $type = PDO::PARAM_INT;
                    break;
                    case is_string($value) :
                        $type = PDO::PARAM_STR;
                    break;
                    case is_null($value) :
                        $type = PDO::PARAM_NULL;
                    break;
                    default :
                    $type = PDO::PARAM_BOOL;
                }
            }
            $this->stmt->bindValue($param, $value, $type);
        }

        public function execute() {
            $this->stmt->execute();
        }

        public function resultSet() {
            $this->execute();
            return $this->stmt->fetchAll();
        }

        public function single() {
            $this->execute();
            return $this->stmt->fetch();
        }

        public function rowCount() {
            return $this->stmt->rowCount();
        }

    }
    