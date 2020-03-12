<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/custom/images/hm.png">

    <title> <?php echo $title; ?> </title>

    <!-- animate.css-->
    <link href="<?php echo base_url()?>assets/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="<?php echo base_url()?>assets/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="<?php echo base_url()?>assets/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="<?php echo base_url()?>assets/custom/css/fables-icons.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="<?php echo base_url()?>assets/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- Video Background -->
    <link href="<?php echo base_url()?>assets/vendor/video-background/video-background.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="<?php echo base_url()?>assets/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet">
    <!-- RANGE SLIDER -->
    <link href="<?php echo base_url()?>assets/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  -->
    <link href="<?php echo base_url()?>assets/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="<?php echo base_url()?>assets/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="<?php echo base_url()?>assets/custom/css/custom-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/custom/css/templatemo-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>


<body>

<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Cari" />
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>

</div>

<!-- Loading Screen -->
<div id="ju-loading-screen">

    <h4 class="text-center"> <img src="<?php echo base_url()?>assets/custom/images/logooo.png" alt="Fables Template" class="fables-logo" style="width: 160px; height: 90px"></h4>
  <div class="sk-double-bounce">
    <div class="sk-child sk-double-bounce1"></div>

    <div class="sk-child sk-double-bounce2"></div>
  </div>
</div>

<!-- Start Fables Navigation -->
<div class="fables-navigation py-3 py-lg-0" style="background-color : #211275">
    <div class="container">
               <div class="row">
                   <div class="col-12 col-md-12">
                       <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">

                            <a class="navbar-brand pl-0" href="<?php echo site_url('utama/index/');?>"><img class="wow bounceInLeft" src="<?php echo base_url()?>assets/custom/images/logo.png" alt="Fables Template" class="fables-logo" style="width: 180px; height: 90px; "></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="fables-iconmenu-icon text-white font-16"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="fablesNavDropdown">

                                <ul class="navbar-nav mx-auto fables-nav">
                                    <li class="nav-item ">
                                        <a class="nav-link" href="<?php echo site_url('utama/index/');?>" id="sub-nav1" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                            Beranda
                                        </a>

                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link " href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Tentang IAI
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                            <li><a class="dropdown-item " href="<?php echo site_url('utama/sejarahnya/');?>"   >Sejarah IAI</a></li>
                                            <li><a class="dropdown-item" href="<?php echo site_url('utama/visimisinya/');?>"   >Visi & Misi IAI</a></li>
                                            <li><a class="dropdown-item" href="<?php echo site_url('utama/profilnya/');?>"   >Profil IAI Sumsel</a></li>
                                            <li><a class="dropdown-item" href="<?php echo site_url('utama/strukturnya/');?>"   >Struktur Organisasi IAI Sumsel</a></li>
                                            <li><a class="dropdown-item" href="<?php echo site_url('utama/manajemennya/');?>"   >Manajemen Eksekutif IAI Sumsel</a></li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="<?php echo site_url('utama/registerkursus/');?>"    id="sub-nav7" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                            Register Kursus
                                        </a>

                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="<?php echo site_url('utama/kontaknya/');?>"    id="sub-nav7" data-toggle="" aria-haspopup="true" aria-expanded="false">
                                            Kontak Kami
                                        </a>

                                    </li>
                                    <!--
                                    <li class=" open-search fables-third-text-color ">
                                        <a class="nav-link" href="<?php echo site_url('utama/kontaknya/');?>"    id="sub-nav7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Cari   </span>
                                        </a>

                                    </li>
                                    -->
                                     <?php if($this->session->userdata('nama') || $this->session->userdata('nama_admin'))
                                           {?>


                                                <li class="nav-item dropdown">
                                                <a class="nav-link" href="<?php echo site_url('utama/materinya/');?>"    id="sub-nav7" data-toggle="" aria-haspopup="true" aria-expanded="false">


                                                    <?php echo "Download";?>


                                                </a>

                                            </li>

                                           
                                             <?php }else{} ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="
                                            <?php if($this->session->userdata('nama') || $this->session->userdata('nama_admin') )
                                           {

                                               echo site_url('utama/logout/');

                                           }
                                           else{
                                              echo site_url('utama/loginnya/');
                                           }
                                        ?>" id="sub-nav7" data-toggle="" aria-haspopup="true" aria-expanded="false"   >
                                          
                                           <?php if($this->session->userdata('nama_admin') || $this->session->userdata('nama'))
                                           {

                                                echo "keluar";

                                           }
                                           else{
                                               echo "Masuk";
                                           }
                                           ?>
                                        </a>

                                    </li>


                                </ul>

                    </div>
               
                      <a class="btn" data-toggle="modal" data-target="#myModal"><img class="wow bounceInRight" src="<?php echo base_url()?>assets/custom/images/01.png" alt="Fables Template" class="fables-logo" style="width: 80px; height: 120px; "></a>
                  
                </nav>
                
                   </div>
                   

               </div>
    </div>
</div>
