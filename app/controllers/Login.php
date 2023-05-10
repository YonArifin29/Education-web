<?php

class Login extends Controller{
    //fungsi default
    public function index() {
        $data["judul"] = "Login";
        $this->view("login/index", $data);
    }

    //fungsi login
    public function login() {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $data["login"] = $this->model("Login_model")->login($username);
        foreach($data["login"] as $result) :
            $passdb = $result["password"];
        endforeach;
        if(password_verify($password, $passdb)) {
            var_dump("k1");
            if($data["login"] == null) {
                header("Location:".BASEURL."/404");
                var_dump("k3");
            }else {
                foreach($data["login"] as $result) :
                    $_SESSION["id"] = $result["id_pengguna"];
                    header("Location:".BASEURL);
                endforeach;
                var_dump("k4");
            }
        }else {
            var_dump("k2");
            header("Location:".BASEURL."/Login");
            echo "pass/username salah";
        }
    }
        
}