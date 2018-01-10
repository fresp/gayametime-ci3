<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--[if IE]>
        <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'>
    <![endif]-->
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="relax and healthy, Beauty & Spa"/>
    <meta name="author" content="fresp.net"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?=  $general->name  ?> &#8211; Relax and Healthy</title>
    <!-- Bootstrap -->
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?=  base_url('assets/img/favicon.ico') ?>" type="image/x-icon">
    <link rel="icon" href="<?=  base_url('assets/img/favicon.ico') ?>" type="image/x-icon">
    <!-- Master Css -->
    <link href="<?=  base_url('assets/css/main.css') ?>" rel="stylesheet">
    <link href="<?=  base_url('assets/css/color.css') ?>" rel="stylesheet" id="colors">
    <script src="<?=  base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>

    <link href="<?= base_url('assets/css/cheers-alert.min.css') ?>" rel="stylesheet" media="screen">
    <script type="text/javascript" src="<?= base_url('assets/js/cheers-alert.min.js') ?>"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    pre {
        display: block;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.42857143;
        color: #333;
        word-break: break-all;
        word-wrap: break-word;
        background-color: transparent;
        border: 0px;
        overflow: hidden;
        white-space: pre-wrap;
    }
    .preloader{
        background: #fff;
    }
    .preloader .loader{
        color: #b18726;
    }
    #loading-center img {
        position: absolute;
        top: 50%;
        margin-top: -64px;
        left: 50%;
        margin-left: -70px;
    }
    table.vamtam-styled {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        border: 0;
        padding-right: 10px;
    }
    table.vamtam-styled td {
        padding: 10px 0 10px 0;
        vertical-align: middle;
        border: 0;
        border-bottom-width: 0px;
        border-bottom-style: none;
        border-bottom-color: currentcolor;
        border-bottom: solid 1px #ededed;
    }
    @media screen and (min-width: 790px) {
        .clock {
            margin-top: -100px;
        }
        .service{

        }
       
    }
    @media screen and (max-width: 780px) {
        .clock {
            margin-top: -50px;
        }
        .service{
            
        }
    }
</style>
</head>
<body>
    <!--//================preloader  start==============//-->
    <?php
    
    if($this->session->userdata('notice')=="successcontact"){
        ?>
        <script type='text/javascript'>
            $(document).ready( function () {
                cheers.success({
                    title: 'Pesan ',
                    message: 'Berhasil Dikirim',
                    alert: $('select[name="alert"]').val(),
                });
            }); 
        </script>
        <?php
        $this->session->unset_userdata('notice');
    }else{
        echo '<div class="preloader">
        <div id="loading-center">
        <img class="logo-nav" alt="" src="'.base_url('assets/img/partner/4.png').'">
        <div class="loader"></div>
        </div>
        </div>';
    }
    ?>
    

    <!--//================preloader  end==============//-->
    <!--//================Header start==============//-->
    <header class="positionR">
        <div id="main-menu" class="wa-main-menu">
            <!-- Menu -->
            <div class="wathemes-menu relative">
                <!-- navbar -->
                <div class="navbar navbar-default black-bg mar0" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-sm-10" style="text-align: left">
                                <div class="row">
                                    <div class="navbar-header">
                                        <!-- Button For Responsive toggle -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                        <!-- Logo -->
                                        <a class="navbar-brand box " style="padding: 0px;" href="index"><img class="logo-nav" alt="logo"  src="<?=  base_url('assets/img/partner/4.png') ?>"/></a>
                                    </div>
                                    <!-- Navbar Collapse -->
                                    <div class="navbar-collapse collapse">
                                        <!-- nav -->
                                        <ul class="nav navbar-nav" style="float: left;">
                                            <li class="<?= $Nav->activeMenu == "index" ? "active" : "" ?>">
                                                <a href="<?= site_url('index') ?>">Home</a>
                                            </li>
                                            <li class="<?= $Nav->activeMenu == "profile" ? "active" : "" ?>">
                                                <a href="<?= site_url('profile') ?>">Profile</a>
                                                
                                            </li>
                                            <li class="<?= $Nav->activeMenu == "sertifikat" ? "active" : "" ?>">
                                                <a href="<?= site_url('sertifikat') ?>">Certificate</a>
                                                
                                            </li>
                                            <li class="<?= $Nav->activeMenu == "service" ? "active" : "" ?>">
                                                <a href="#">Service</a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a href="<?= site_url('service/massage')?>">Massage</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?= site_url('service/reflexology')?>">Reflexology</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?= site_url('service/spa')?>">Spa</a>
                                                    </li>
                                                    <li>
                                                        <a href="<?= site_url('service/other')?>">Other</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="<?= $Nav->activeMenu == "ketentuan" ? "active" : "" ?>">
                                                <a href="<?= site_url('ketentuan') ?>">FAQ </a>

                                            </li>
                                            
                                            <li class="<?= $Nav->activeMenu == "contact" ? "active" : "" ?>">
                                                <a href="<?= site_url('contact') ?>">Contact us</a>
                                                
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- navbar-collapse -->
                                </div>
                            </div>
                            <!-- col-md-12 -->
                            <!-- col-md-3 -->
                            <div class="col-md-3 col-sm-2">
                                <div class="navigation-icon custom-drop" style="width: 100%;">
                                    <ul class="social-icon top-bar-icon">

                                        <?php 
                                        $open = $general->socialmedia;
                                        $openArray = json_decode($open, true);
                                        foreach($openArray as $item) {
                                            if($item['nama']=="youtube")
                                            {
                                               echo '
                                               <li>
                                               <a href="'. $item['value'].'" class="theme-circle marR10"><i class="fa fa-'. $item['nama'].'-play" aria-hidden="true"></i></a>
                                               </li>';
                                           }else{
                                               echo '
                                               <li>
                                               <a href="'. $item['value'].'" class="theme-circle marR10"><i class="fa fa-'. $item['nama'].'" aria-hidden="true"></i></a>
                                               </li>
                                               ';
                                           }

                                       }?>

                                   </ul>
                               </div>
                           </div>
                           <!-- col-md-3 --></div>
                           <!-- row --></div>
                           <!-- container --></div>
                           <!-- navbar --></div>
                           <!--  Menu --></div>
                       </header>
<!--//================Header end==============//-->