<?php
  switch ($data["active1"]) {
    case 'pengguna':
      $active1Pengguna = "active";
      break;
      case 'bab1':
        $active1bab1 = "active";
        break;
      case 'bab2':
        $active1bab2 = "active";
        break;
  }

  switch ($data["active2"]) {
    case 'daftar pengguna':
      $active2daftarpengguna = "active";
      break;
      case 'pendahuluan':
        $active2pendahuluan = "active";
      break;
      case 'noun':
        $active2noun = "active";
      break;
  }
  
  switch ($data["active3"]) {
    case 'pengertianNoun':
      $active3pengertianNoun = "active";
      break;
      case 'concreteNoun':
        $active3concreteNoun = "active";
      break;
      case 'abstractNoun':
        $active3abstractNoun = "active";
      break;
      case 'countableNoun':
        $active3countableNoun = "active";
      break;
      case 'unCountableNoun':
        $active3unCountableNoun = "active";
      break;
      case 'singularNoun':
        $active3singularNoun = "active";
      break;
      case 'pluralNoun':
        $active3pluralNoun = "active";
      break;
      case 'gender':
        $active3gender = "active";
      break;
  }
?>
<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <?php 
                  switch($_SESSION["jenisLog"]) {
                    case '1' :
                      include("sidebarMenuAdmin.php");
                    break;
                    default:
                        "";
                    break;
                      }
              ?>
            <li class='nav-item'>
                  <a href='#' class='nav-link <?=$active1bab1?>'>
                      <i class='nav-icon  fa-solid fa-book'></i>
                      <p>
                          BAB PERTAMA
                          <i class='right fas fa-angle-left'></i>
                      </p>
                  </a>
                  <ul class='nav nav-treeview'>
                      <li class='nav-item'>
                          <a href='<?=BASEURL?>/BAB1' class='nav-link <?=$active2pendahuluan?>'>
                              <i class='fa-solid fa-brain nav-icon'></i>
                              <p>
                                  Pendahuluan
                              </p>
                          </a>
                      </li>
                  </ul>
            </li>
            <li class='nav-item'>
                  <a href='#' class='nav-link <?=$active1bab2?>'>
                      <i class='nav-icon  fa-solid fa-book'></i>
                      <p>
                          BAB KEDUA
                          <i class='right fas fa-angle-left'></i>
                      </p>
                  </a>
                  <ul class='nav nav-treeview'>
                      <li class='nav-item'>
                          <a href='' class='nav-link <?=$active2noun?>'>
                              <i class='fa-solid fa-gamepad nav-icon'></i>
                              <p>
                                  Noun
                                  <i class='right fas fa-angle-left'></i>
                              </p>
                          </a>
                          <ul class='nav nav-treeview'>
                              <li class='nav-item'>
                                  <a href='<?=BASEURL?>/BAB2' class='nav-link <?=$active3pengertianNoun?>'>
                                      <i class='fa-solid fa-brain nav-icon'></i>
                                      <p>
                                          Pendahuluan
                                      </p>
                                  </a>
                              </li>
                              <li class='nav-item'>
                                  <a href='<?=BASEURL?>/BAB2/concrete' class='nav-link <?=$active3concreteNoun?>'>
                                      <i class='fa-solid fa-brain nav-icon'></i>
                                      <p>
                                          Concret Noun
                                      </p>
                                  </a>
                              </li>
                              <li class='nav-item'>
                                  <a href='<?=BASEURL?>/BAB2/abstract' class='nav-link <?=$active3abstractNoun?>'>
                                      <i class='fa-solid fa-brain nav-icon'></i>
                                      <p>
                                          Abstract Noun
                                      </p>
                                  </a>
                              </li>
                              <li class='nav-item'>
                                  <a href='<?=BASEURL?>/BAB2/countableNoun' class='nav-link <?=$active3countableNoun?>'>
                                      <i class='fa-solid fa-brain nav-icon'></i>
                                      <p>
                                          Countable Noun
                                      </p>
                                  </a>
                              </li>
                              <li class='nav-item'>
                                  <a href='<?=BASEURL?>/BAB2/unCountableNoun' class='nav-link <?=$active3unCountableNoun?>'>
                                      <i class='fa-solid fa-brain nav-icon'></i>
                                      <p>
                                          Uncountable Noun
                                      </p>
                                  </a>
                              </li>
                              <li class='nav-item'>
                                  <a href='<?=BASEURL?>/BAB2/singularNoun' class='nav-link <?=$active3singularNoun?>'>
                                      <i class='fa-solid fa-brain nav-icon'></i>
                                      <p>
                                           Singular Noun
                                      </p>
                                  </a>
                              </li>
                              <li class='nav-item'>
                                  <a href='<?=BASEURL?>/BAB2/pluralNoun' class='nav-link <?=$active3pluralNoun?>'>
                                      <i class='fa-solid fa-brain nav-icon'></i>
                                      <p>
                                           Plular Noun
                                      </p>
                                  </a>
                              </li>
                              <li class='nav-item'>
                                  <a href='<?=BASEURL?>/BAB2/gender' class='nav-link <?=$active3gender?>'>
                                      <i class='fa-solid fa-brain nav-icon'></i>
                                      <p>
                                           Gender
                                      </p>
                                  </a>
                              </li>
                          </ul>
                      </li>
                  </ul>
            </li>
        </ul>
      </nav>