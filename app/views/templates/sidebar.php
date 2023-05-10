 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=BASEURL;?>" class="brand-link">
      <img src="<?=BASEURL;?>/img/logo2.png" alt="EngWeb Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">EngStudy</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
          <img src="<?=BASEURL;?>/img/<?=$data["user"]["foto"];?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$data["user"]["nama"]?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <?php
            include("sidebarMenu.php");
      ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




      