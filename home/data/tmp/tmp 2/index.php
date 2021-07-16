<?php
$url = "home/data/tmp/tmp 2/HTML/";
$komponen = "home/data/tmp/tmp 2/";
include 'home/include/all_include.php';
?>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
        <meta name="description" content="">
        <meta name="author" content="">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link href="<?php echo $url; ?>favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo $url; ?>assets/css/bootstrap.css">
        <!-- Template CSS -->
        <link rel="stylesheet" href="<?php echo $url; ?>assets/css/animate.css">
        <link rel="stylesheet" href="<?php echo $url; ?>assets/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo $url; ?>assets/css/nexus.css">
        <link rel="stylesheet" href="<?php echo $url; ?>assets/css/responsive.css">
        <link rel="stylesheet" href="<?php echo $url; ?>assets/css/custom.css">
        <!-- Google Fonts-->
        <link
            href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300"
            rel="stylesheet"
            type="text/css">

        <style>
            .logo a {
                top: 0 !important;
                display: block;
                position: relative;
                z-index: 20;
            }

            .login-btn{
                color: #e3e3e3;
                font-size: 15px;
                font-weight: normal;
                letter-spacing: 1px;
                line-height: normal;
                list-style: none;
                text-transform: uppercase;
                display: block
            }

            /* Dropdown Button */
                .dropbtn {
                background-color: #313131; 
                color: #e3e3e3;
                font-size: 15px;
                font-weight: normal;
                letter-spacing: 1px;
                line-height: normal;
                padding: 19px 16px 19px;
                text-transform: uppercase;
                display: block;

                border: none;
                }

                /* The container <div> - needed to position the dropdown content */
                .dropdown {
                position: relative;
                display: inline-block;
                }

                /* Dropdown Content (Hidden by Default) */
                .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f1f1f1;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
                }

                /* Links inside the dropdown */
                .dropdown-content a {
                    color: black;
                    padding: 12px 16px;
                    text-decoration: none;
                    display: block;
                }

                /* Change color of dropdown links on hover */
                .dropdown-content a:hover {background-color: #e3e3e3;}

                /* Show the dropdown menu on hover */
                .dropdown:hover .dropdown-content {display: block;}

                /* Change the background color of the dropdown button when the dropdown content is shown */
                .dropdown:hover .dropbtn {background-color: #4c59b5;}
        </style>
    </head>
    <body>
        <div id="body-bg">
        <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;<?php echo $telepon;?>
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;<?php echo $email;?>
                        </div>
                    </div>
                </div>
            </div>
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo" style="padding: none;">
                            <a
                                href="index.php"
                                title=""
                                style=" padding-top: -7px; ">
                                <img src="admin/data/image/logo/logo.png" width="100px" alt="">
                                <h2 style=" color:black">
                                    <?php echo $judul;?></h2>

                            </a>
                            
                            <h5><?php echo $alamat; ?></h5>
                        </div>
                       
                    </div>
                </div>
            </div>
            <br><br>

            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-9 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav" style="margin-bottom:0">

                                    <!-- MENU -->
                                    <?php

                            $m = new SimpleXMLElement('home/include/settings/menu.xml', null, true);

                            
                            foreach ($m as $i) {
                                if ($i->t == 's') {
                                    ?>
                                    <!-- SINGLE -->
                                <?php $apa = $i->n;
                                    if ($apa == "Login") {
                                        if (isset($_COOKIE["kodene"])) {
                                          
                                            ?>
                                    <!-- <li class="nav-item"> <a class="nav-link"
                                    href="index.php?p=login&action=akun">Akun</a> </li> -->
                                    <li class="nav-item">
                               
                                        <a class="nav-link" href="?p=pengiriman">Pengiriman</a>
                                    </li>
                                    
                                <?php
                                        } else {
                                            ?>

                                <li class="nav-item">
                                                                        
                                    <a class="nav-link" href="?p=buku tamu">Buku Tamu</a>
                                </li>

                                <?php
                                        }
                                    } else {
                                        ?>
                                    <li class="nav-item">
                                        <a class="fa-info" href="<?php echo $i->l; ?>"><?php echo $i->n; ?></a>
                                    </li>
                                    <?php } ?>
                                    <!-- /SINGLE -->
                                <?php
                                } else if ($i->t == 'm') {
                                    $idmenu = $i->id;
                                    ?>
                                    <!-- MULTI -->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $i->n; ?>
                                            <b class="caret hidden"></b>
                                        </a>
                                        <ul class="dropdown-menu agile_short_dropdown">
                                            <?php
                                            $m1 = new SimpleXMLElement('home/include/settings/menu.xml', null, true);
                                            foreach ($m1 as $i1) {
                                                if ($i1->s == "$idmenu" and $i1->t == "sm") {
                                                    ?>
                                            <li>
                                                <li>
                                                    <a class="item" onclick="window.location = '<?php echo $i1->l; ?>'">
                                                        <?php echo $i1->n; ?></a>
                                                </li>
                                            </li>
                                            <?php }
                                            } ?>
                                        </ul>
                                    </li>
                                    <!-- /MULTI -->
                                    <?php }
                            } ?>
                                    <!-- /MENU -->

                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 no-padding">
                            <ul class="login-btn pull-right" style="margin-bottom:0">

                                    
                                        <!-- SINGLE -->
                                    <?php $apa = $i->n;
                                        if ($apa == "Login") {
                                            if (isset($_COOKIE["kodene"])) {
                                    ?>
                                    
                                        <li class="nav-item">
                                            <div class="dropdown">
                                                <button class="dropbtn"><?php echo ($_COOKIE['nama']) ?><i class="fa fa-caret-down" style="margin-left: 8px; color:#e3e3e3"></i></button>
                                                <div class="dropdown-content">
                                                    <a class="nav-link" href="?p=change_password">Change Password</a>
                                                    <a class="nav-link" href="?p=edit_profile">Change Profile</a>
                                                    <a class="nav-link" href="login_go.php?action=logout">Logout</a>
                                                </div>
                                            </div>
                                            <img src="admin/data/image/logo/logo.png" width="50px" alt="">
                                        </li>
                                        <li class="nav-item">
                                            
                                        </li>
                                    <?php
                                    } else {
                                        ?>

                                


                                        <li class="nav-item">
                                            <div class="dropdown">
                                                <button class="dropbtn">Guest <i class="fa fa-caret-down" style="margin-left: 8px; color:#e3e3e3"></i></button>
                                                <div class="dropdown-content">
                                                    <a class="nav-link" href="index.php?p=login&action=logout"><?php echo $i->n; ?></a>
                                                </div>
                                            </div>
                                            <img src="admin/data/image/logo/logo.png" width="50px" alt="">
                                        </li>
                                <?php
                                        }
                                    } else {
                                        ?>
                                    <li class="nav-item">
                                        <a class="fa-info" href="<?php echo $i->l; ?>"><?php echo $i->n; ?></a>
                                    </li>
                                    <?php } ?>
                                    <!-- /SINGLE -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->


         

            <!-- === BEGIN CONTENT === -->
            <div id="slideshow" class="bottom-border-shadow">
                <div class="container no-padding background-white bottom-border">


                <?php if (isset($_GET['p']) && $_GET['p'] == "home")
{ ?>
                <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class=""></li>
                                <li data-target="#carousel-example" data-slide-to="1" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
                                <div class="item">
                                    <img src="home/data/image/background/3.png">
                                </div>
                                <div class="item active">
                                <img src="home/data/image/background/1.png">

                                </div>
                                <div class="item">
                                <img src="home/data/image/background/2.png">

                                </div>
                               
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <?php } ?>



                        <?php if (isset($_GET['p']) && $_GET['p'] <> "login")
{ ?>
                    <div id="icons" class="bottom-border-shadow">
                        <div class="container background-grey bottom-border">
                            <div class="row padding-vert-60">
                                <!-- Icons -->
                                <div class="col-md-4 text-center">
                                    <i class="fa-cogs fa-4x color-primary animate fadeIn"></i>
                                    <h2 class="padding-top-10 animate fadeIn">Cek Resi</h2>
                                    <p class="animate fadeIn">untuk Melakukan Cek
                                        Resi, Silahkan Klik tombol cek resi dibawah ini kemudian ketikkan Nomor Resi
                                        yang anda miliki</p>
                                    <a class="btn btn-primary" href="index.php?p=cek resi">Cek Resi</a>
                                </div>
                                <div class="col-md-4 text-center">
                                    <i class="fa-cloud-download fa-4x color-primary animate fadeIn"></i>
                                    <h2 class="padding-top-10 animate fadeIn">Hitung Tarif</h2>
                                    <p class="animate fadeIn">untuk Melakukan Hitung Tarif, Silahkan Klik tombol
                                        Hitung Tarif dibawah ini kemudian Pilih Wilayah yang Akan dicek</p>
                                    <a class="btn btn-primary" href="index.php?p=hitung tarif">Hitung Tarif</a>
                                </div>
                                <div class="col-md-4 text-center">
                                    <i class="fa-bar-chart fa-4x color-primary animate fadeIn"></i>
                                    <h2 class="padding-top-10 animate fadeIn">Buku Tamu</h2>
                                    <p class="animate fadeIn">Untuk Memberikan informasi, Atau memberikan masukan
                                        silahkan Klik Tombol Buku Tamu Dibawah ini.</p>
                                    <a class="btn btn-primary" href="index.php?p=buku tamu">Buku Tamu</a>
                                </div>
                                <!-- End Icons -->
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php include 'halaman.php'; ?>
                    <h2>&nbsp;</h2>

                    <div id="base">
                        <div class="container bottom-border padding-vert-30">
                            <div class="row">
                                <!-- Disclaimer -->
                                <div class="col-md-4">
                                    <h3 class="class margin-bottom-10"><?php echo ucwords($judul); ?></h3>
                                    <p><?php echo $alamat; ?></p>
                                </div>
                                <!-- End Disclaimer -->
                                <!-- Contact Details -->
                                <div class="col-md-4 margin-bottom-20">
                                    <h3 class="margin-bottom-10">Contact Details</h3>
                                    <p>
                                        <span class="fa-phone">Telephone:</span>
                                        <?php echo $telepon; ?>

                                        <br>
                                        <span class="fa-envelope">Email:</span>
                                        <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                                        <br>

                                    </p>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Footer -->
                    <div id="footer" class="background-grey">
                        <div class="container">
                            <div class="row">
                                <!-- Footer Menu -->
                                <div id="footermenu" class="col-md-8">
                                    <ul class="list-unstyled list-inline">
                                        <!-- MENU -->
                                        <?php
                                $m = new SimpleXMLElement('home/include/settings/menu.xml', null, true);
                                foreach ($m as $i) {
                                    if ($i->t == 's') {
                                        ?>
                                        <!-- SINGLE -->
                                    <?php $apa = $i->n;
                                        if ($apa == "Login") {
                                            if ((isset($_COOKIE["kodene"])) && (isset($_COOKIE["token_user"]))) {
                                                $kodene = decrypt($_COOKIE["kodene"]);
                                                $ip = $_SERVER['REMOTE_ADDR'];
                                                $useragent = $_SERVER['HTTP_USER_AGENT'];
                                                $token = sha1($ip . $useragent . $key);
                                                $token = crypt($token, $key);
                                                if ($_COOKIE['token_user'] == $token) {
                                                    $token = "ada";
                                                } else {
                                                    $token = "";
                                                }
                                                $kode = cek_database("", "", "", "select * from data_pelanggan where id_pelanggan='$kodene'");
                                            } else {
                                                $token = "";
                                                $kode = "";
                                            }
                                            if ($kode == "ada" && $token == "ada") {
                                                ?>
                                        <!-- <li class="nav-item"> <a class="nav-link"
                                        href="index.php?p=login&action=akun">Akun</a> </li> -->
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php?p=login&action=logout">Logout</a>
                                        </li>
                                    <?php
                                            } else {
                                                ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php?p=login&action=logout"><?php echo $i->n; ?></a>
                                        </li>
                                    <?php
                                            }
                                        } else {
                                            ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo $i->l; ?>"><?php echo $i->n; ?></a>
                                        </li>
                                        <?php } ?>
                                        <!-- /SINGLE -->
                                    <?php
                                    } else if ($i->t == 'm') {
                                        $idmenu = $i->id;
                                        ?>
                                        <!-- MULTI -->
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $i->n; ?>
                                                <b class="caret hidden"></b>
                                            </a>
                                            <ul class="dropdown-menu agile_short_dropdown">
                                                <?php
                                                $m1 = new SimpleXMLElement('home/include/settings/menu.xml', null, true);
                                                foreach ($m1 as $i1) {
                                                    if ($i1->s == "$idmenu" and $i1->t == "sm") {
                                                        ?>
                                                <li>
                                                    <li>
                                                        <a class="item" onclick="window.location = '<?php echo $i1->l; ?>'">
                                                            <?php echo $i1->n; ?></a>
                                                    </li>
                                                </li>
                                                <?php }
                                                } ?>
                                            </ul>
                                        </li>
                                        <!-- /MULTI -->
                                        <?php }
                                } ?>
                                        <!-- /MENU -->
                                    </ul>
                                </div>
                                <!-- End Footer Menu -->
                                <!-- Copyright -->
                                <div id="copyright" class="col-md-4">
                                    <p class="pull-right"><?php echo $copyright; ?></p>
                                </div>
                                <!-- End Copyright -->
                            </div>
                        </div>
                    </div>
                    <!-- End Footer -->
                    <!-- JS -->
                    <script type="text/javascript" src="<?php echo $url; ?>assets/js/jquery.min.js"></script>
                    <script
                        type="text/javascript"
                        src="<?php echo $url; ?>assets/js/bootstrap.min.js"></script>
                    <script type="text/javascript" src="<?php echo $url; ?>assets/js/scripts.js"></script>
                    <!-- Isotope - Portfolio Sorting -->
                    <script
                        type="text/javascript"
                        src="<?php echo $url; ?>assets/js/jquery.isotope.js"></script>
                    <!-- Mobile Menu - Slicknav -->
                    <script
                        type="text/javascript"
                        src="<?php echo $url; ?>assets/js/jquery.slicknav.js"></script>
                    <!-- Animate on Scroll-->
                    <script
                        type="text/javascript"
                        src="<?php echo $url; ?>assets/js/jquery.visible.js"
                        charset="utf-8"></script>
                    <!-- Sticky Div -->
                    <script
                        type="text/javascript"
                        src="<?php echo $url; ?>assets/js/jquery.sticky.js"
                        charset="utf-8"></script>
                    <!-- Slimbox2-->
                    <script
                        type="text/javascript"
                        src="<?php echo $url; ?>assets/js/slimbox2.js"
                        charset="utf-8"></script>
                    <!-- Modernizr -->
                    <script
                        src="<?php echo $url; ?>assets/js/modernizr.custom.js"
                        type="text/javascript"></script>
                    <!-- End JS -->
                </body>
            </html>
            <!-- === END FOOTER === -->