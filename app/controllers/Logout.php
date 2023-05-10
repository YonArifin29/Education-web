<?php
    class Logout extends Controller {
        public function index() {
            session_start();
            unset($_SESSION["id"]);
            session_destroy();
            header("Location:".BASEURL);
        }
    }