<?php
class Home extends Controller{
    public function index() {
        $data["judul"] = "Home";
        $data["active"] = "activeHome";
        $data["user"] = $this->model("User_model")->getUser($_SESSION["id"]);
        $data["namaDepan"] = $this->model("User_model")->getNamaDepan($data["user"]["nama"]);
            $this->view('home/index', $data);
    }
}