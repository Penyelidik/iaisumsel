<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?></title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/assetsadmin/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  
  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/assetsadmin/')?>css/sb-admin-2.min.css" rel="stylesheet">
  <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#2C3E4F">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('Admin')?>">
        <div class="sidebar-brand-icon ">
    <i class="fas fa-user-cog"></i>
  </div>
        <div class="sidebar-brand-text mx-3">Admin <br>IAI-Sumsel </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
     
         </li>
         <hr class="sidebar-divider"> 
          <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo123" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-photo-video"></i>
          <span>Foto Menu Pop Up</span>
        </a>
        <div id="collapseTwo123" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item"  href="<?= base_url('Admin/list_popup')?>">List Foto</a>
            <a class="collapse-item" href="<?= base_url('Admin/uploadpopup')?>">Upload Foto</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo12" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-photo-video"></i>
          <span>Foto Hal Utama</span>
        </a>
        <div id="collapseTwo12" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item"  href="<?= base_url('Admin/list_fotogerak')?>">List Foto</a>
            <a class="collapse-item" href="<?= base_url('Admin/fotoberjalanku')?>">Upload Foto</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin')?>">
          <i class="fas fa-fw fa-users"></i>
          <span>List Request</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo5" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-sticky-note"></i>
          <span>Kursus & Seminar</span>
        </a>
        <div id="collapseTwo5" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item"  href="<?= base_url('Admin/list_kursus')?>">List Kursus & Seminar</a>
            <a class="collapse-item" href="<?= base_url('Admin/buat_kursus')?>">Buat Kursus Baru</a>
            <a class="collapse-item" href="<?= base_url('Admin/buat_upcoming')?>">Upcoming event</a>
             <a class="collapse-item" href="<?= base_url('Admin/list_upcoming')?>">List Upcoming event</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Berita</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
          
            <a class="collapse-item"  href="<?= base_url('Admin/list_berita')?>">List Berita</a>
            <a class="collapse-item" href="<?= base_url('Admin/berita')?>">Tulis Berita</a>
          </div>
        </div>
      </li>
       
       <hr class="sidebar-divider">
           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-newspaper"></i>
          <span>Jurnal</span>
        </a>
        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item"  href="<?= base_url('Admin/list_jurnal')?>">List Jurnal</a>
            <a class="collapse-item" href="<?= base_url('Admin/jurnal')?>">Upload Jurnal</a>
          </div>
        </div>
      </li>
    
      <hr class="sidebar-divider">
          <li class="nav-item">
       <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo3" aria-expanded="true" aria-controls="collapseTwo">
         <i class="fas fa-fw fa-file"></i>
         <span>Materi</span>
       </a>
       <div id="collapseTwo3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
         <div class="bg-white py-2 collapse-inner rounded">

           <a class="collapse-item"  href="<?= base_url('Admin/list_materi')?>">List Materi</a>
           <a class="collapse-item" href="<?= base_url('Admin/materi')?>">Upload Materi</a>
         </div>
       </div>
     </li>
         <hr class="sidebar-divider">
           <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-photo-video"></i>
          <span>Galeri</span>
        </a>
        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
           
            <a class="collapse-item"  href="<?= base_url('Admin/list_galeri')?>">List Foto</a>
            <a class="collapse-item" href="<?= base_url('Admin/galeri')?>">Upload Foto</a>
          </div>
        </div>
      </li>
    
      <hr class="sidebar-divider">
            <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/register_admin')?>">
          <i class="fas fa-fw fa-plus-circle"></i>
          <span>Create Admin</span></span></a>
      </li>

      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Utama/logout/')?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>
      <hr class="sidebar-divider">
      <!-- Heading -->
      
      
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            
            <!-- Nav Item - Alerts -->
            
            <!-- Nav Item - Messages -->
            
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=  $user['email']?></span>
               
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                
               
                
                <a class="dropdown-item" href="<?= base_url('Utama/logout/')?>" >
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">