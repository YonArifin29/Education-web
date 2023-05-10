<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$data["judul"];?></title>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?=BASEURL?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?=BASEURL?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?=BASEURL?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=BASEURL?>/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?=BASEURL?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=BASEURL?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?=BASEURL?>/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="<?=BASEURL?>/css/adminlte.css">
  <!-- My css -->
  <link rel="stylesheet" href="<?=BASEURL?>/css/style.css">
  <!-- Cropper -->
  <link rel="stylesheet" href="<?=BASEURL?>/css/cropper.css">
  <!-- animasi -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

    <!-- Sidebar -->
    <?php include("topbar.php");?>
    <!-- Topbar -->
    <?php include("sidebar.php");?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
            <div class="content-header">
              <div class="container-fluid">
                  <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?=$data["judul"];?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                          <?php foreach($data["road"] as $result): ?>
                            <?php echo $result;?>
                          <?php endforeach;?>
                        </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                  <div class="row delete-flash">
                      <div class="col-lg-6">
                          <?=Flasher::flash()?>
                      </div>
                  </div>
              </div><!-- /.container-fluid -->
            </div>
        <!-- /.content-header -->

        <!-- modal profile -->
        <div class="modal fade" id="modalP" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">Profile</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <form action="" enctype='multipart/form-data' method="post">
                    <div class="modal-body">
                        <div class="card">
                          <label for="upload_image" class="d-flex justify-content-center mt-2">
                            <img class="img-thumbnail rounded-circle image" src="<?=BASEURL?>/img/<?=$data["user"]["foto"];?>" alt="Card image cap" width="30%" id="img" data-namaImg="<?=$data["user"]["foto"];?>">
                                <input type="file" name="image" class="image" id="upload_image" style="display:none" />
                          </label>
                          <div class="card-body">
                            <ul class="list-group text-center">
                              <li class="list-group-item"><?=$data["user"]["username"];?></li>
                              <li class="list-group-item"><?=$data["user"]["nama"];?></li>
                              <li class="list-group-item"><?=$data["user"]["nohp"];?></li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <div type="submit" class="btn btn-primary tEdit" data-id="<?=$data["user"]["id_pengguna"]?>">Edit</div>
                    </div>
                    </form>
                  </div>
            </div>
        </div>
        <!-- end of modal profile -->

        <!-- modal ubah password -->
        <div class="modal fade" id="modalpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <form action="<?=BASEURL?>/Users/ubahPassword"method="post">
                    <div class="modal-body">
                    <input type="hidden" class="form-control" name="id" value="<?=$data["user"]["id_pengguna"]?>">
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password Lama" name="passwordLama">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Password Baru" name="passwordBaru">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Ubah Password</button>
                    </div>
                    </form>
                  </div>
            </div>
        </div>
        <!-- end modal password -->

        <!-- modal crop img -->
        <div class="modal fade" id="modal-img" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Crop image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <div class="row">
                        <div class="col-md-8">  
                            <!--  default image where we will set the src via jquery-->
                            <img id="image">
                        </div>
                        <div class="col-md-4">
                            <div class="preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" id="crop" data-id="<?=$data["user"]["id_pengguna"]?>">Crop</button>
            </div>
        </div>
    </div>
</div>
        
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
