<?php
    class Err extends Controller {
        public function index() {
            $data["judul"] = "Error";
            $this->view("error/error");
        }
    }   