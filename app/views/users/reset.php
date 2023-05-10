<?php
    if($data["rand"]) {
        $random = $data["rand"];
    }else {
        $random = "";
    }
?>

<div class="row">
    <div class="col-md-5">
    <form action="<?=BASEURL?>/Users/resetPassword/<?=$data["userReset"]["id_pengguna"]?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" name="username" value="<?=$data["userReset"]["username"]?>" readonly>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control"name="password" value="<?=$random;?>" readonly>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row d-flex; justify-content-center">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="reset">Reset</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
</div>