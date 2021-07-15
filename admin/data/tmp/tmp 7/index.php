<?php
$default_url = '../../../data/tmp/tmp 7';
$tema = '7-binary-Admin-v1.1';
$url = $default_url.'/'.$tema;
include '../../../include/all_include.php';        
include '../../../include/function/session.php'; 
?>
<link href="<?php echo $url; ?>/assets/css/bootstrap.css" rel="stylesheet"/>
<link href="<?php echo $url; ?>/assets/css/font-awesome.css" rel="stylesheet"/>
<link href="<?php echo $url; ?>/assets/css/custom.css" rel="stylesheet"/>
<style>
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
        padding: 7px 20px;
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
th {
    text-align: center;
}
</style>
<link
    href='http://fonts.googleapis.com/css?family=Open+Sans'
    rel='stylesheet'
    type='text/css'/>
</head>
<body>
<div id="wrapper">
    <nav
        class="navbar navbar-default navbar-cls-top "
        role="navigation"
        style="margin-bottom: 0">
        <div class="navbar-header">
            <button
                type="button"
                class="navbar-toggle"
                data-toggle="collapse"
                data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php index(); ?>"><?php echo $_COOKIE['name']?></a>
        </div>

        
        <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">
            <?php echo $formatwaktu; ?>
            &nbsp;
            <?php if($_COOKIE['siapa'] == 'driver') { ?>
            <div class="dropdown">
                <button class="dropbtn"><?php echo ($_COOKIE['name']) ?><i class="fa fa-caret-down" style="color: white; margin-left: 5px"></i></button>
                <div class="dropdown-content">
                    <a class="nav-link" href="">Change Password</a>
                    <a class="nav-link" href="../data_driver/index.php?input=edit&proses=<?= encrypt($_COOKIE['id']); ?>">Change Profile</a>
                    <a class="nav-link" href="<?php logout(); ?>">Logout</a>
                </div>
            </div>
            <?php } 
            else {?>
            <div class="dropdown">
                <button class="dropbtn"><?php echo ($_COOKIE['name']) ?><i class="fa fa-caret-down" style="color: white; margin-left: 5px"></i></button>
                <div class="dropdown-content">
                    <a class="nav-link" href="">Change Password</a>
                    <a class="nav-link" href="<?php logout(); ?>">Logout</a>
                </div>
            </div>
            <?php }?>
        </div>
    </nav>
    <!-- /. NAV TOP -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?php echo $logo; ?>" class="user-image img-responsive"/>
                </li>

                <!-- MENU -->
                <?php

                
$siapa = $_COOKIE['siapa'];
if ($siapa == "admin")
{
$m = new SimpleXMLElement('../../../include/settings/menu.xml', null, true);
}
else
{
    $m = new SimpleXMLElement('../../../include/settings/menu_driver.xml', null, true); 
}
foreach($m as $i){if($i->t == 's' ){
?>
                <!-- SINGLE -->
                <li>
                    <a href="<?php echo $i->l;?>">
                        <i class="<?php echo $i->i;?> fa-3x"></i>
                        <?php echo $i->n;?>
                    </a>
                </li>

                <!-- /SINGLE -->
            <?php
}else if($i->t == 'm' ){ $idmenu = $i->id;
?>
                <!-- MULTI -->

                <li >
                    <a href="#">
                        <i class="<?php echo $i->i;?> fa-3x"></i>
                        <?php echo $i->n;?>
                        <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <?php
		$m1 = new SimpleXMLElement('../../../include/settings/menu.xml', null, true);
		foreach($m1 as $i1) {
		if($i1->s=="$idmenu" and $i1->t=="sm" ){
		?>
                        <li>
                            <a class="item" onclick="window.location = '<?php echo $i1->l;?>'">
                                <i class="<?php echo $i1->i;?>"></i>
                                <?php echo $i1->n;?></a>
                        </li>
                        <?php }} ?>
                    </ul>
                </li>

                <!-- /MULTI -->
                <?php }} ?>
                <!-- /MENU -->

            </ul>

        </div>

    </nav>
    <!-- /. NAV SIDE -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Forms Page</h2>
                    <h5>My Kargo Express /
                        <?php tabelnomin();?>
                    </h5>

                </div>
            </div>
            <hr/>
            <div class="panel panel-default">
                <div class="panel-heading">
                    Page web <?php tabelnomin();?>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">

                            <?php include 'halaman.php'; ?>

                            <br>
                            <br>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<center><?php echo $copyright;?></center>
<br>
<br>
<script src="<?php echo $url; ?>/assets/js/jquery-1.10.2.js"></script>
<script src="<?php echo $url; ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo $url; ?>/assets/js/jquery.metisMenu.js"></script>
<script src="<?php echo $url; ?>/assets/js/custom.js"></script>
</body>
</html>