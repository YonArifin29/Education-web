<?php
    class Registrasi extends Controller {
     public function index() {
        $data["judul"] = "Registrasi";  
        $this->view("registrasi/index", $data); 
     }

     public function registrasi() {
      if($this->model("Registrasi_model")->Registrasi($_POST) > 0) {
            $data["alert"] = "
                <div class='alert alert-success text-center' role='alert'>
                    Data berhasil ditambahkan
                </div>
            ";
            $this->view("registrasi/index", $data);
            exit;
        }else {
            $data["alert"] = "
                <div class='alert alert-danger text-center' role='alert'>
                    Data gagal ditambahkan
                </div>
            ";
            $this->view("registrasi/index", $data);
            exit;
        }
     }
    }