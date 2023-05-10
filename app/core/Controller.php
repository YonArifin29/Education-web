<?php
    class Controller {
        private $fc;
        public function __construct()
        {
                $this->fc = new Fungsi;
        }
        public function view($view, $data = []) {  
            if(!isset($_SESSION["id"])) {
                switch($view) {
                    case 'registrasi/index':
                        require_once "../app/views/" .$view. ".php";
                        break;
                    case 'login/index':
                        require_once "../app/views/" .$view. ".php";
                        break;
                    default:
                    require_once "../app/views/home/first_page.php";  
                }
            }else {
                require_once "../app/views/" .$view. ".php";
                
            }
        }

        public function model($model) {
            require_once "../app/models/" .$model. ".php";
            return new $model;
        }
    }

    