<?php
error_reporting(0);
$Nav = new stdClass;
$Nav->activeMenu = "sertifikat";
$Nav->name = "Sertifikat";

require_once(APPPATH.'/views/fragment/header.fragment.php');

?>
<!--//================Header end==============//-->
<div class="clear"></div>
<!--//================Bredcrumb starts==============//-->
<section>
    <div class="bredcrumb-section padTB100 positionR">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-head">
                        <div class="page-header-heading">
                            <h3 class="theme-color"><?= $Nav->name ?></h3>
                        </div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb colorW marB0">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="active"><?= $Nav->name ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//================Bredcrumb end==============//-->
<div class="clear"></div>
<!--//================Gallery start==============//-->
<section class="padT100 padB70">
    <!--- Theme heading start-->
    <div class="theme-heading marB50 positionR">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                    <h1>Our Certificate</h1>
                    <div class="heading-lines"><span class="saf-boxs"></span></div>
                  
                </div>
            </div>
        </div>
    </div>
    <!--- Theme heading end-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row marB20">
                    <?php 
                    foreach($sertifikat as $item) {
                    ?>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="gallery-img marB30">
                            <figure>
                                <img src="<?=  base_url('assets/uploads/sertifikat/'.$item->namagambar) ?>" style="width: 500px;height: 300px;" alt=""/>
                                <figcaption><a href="<?=  base_url('assets/uploads/sertifikat/'.$item->namagambar) ?>" class="fancybox" data-fancybox-group="group"><i class="fa fa-plus" aria-hidden="true"></i></a></figcaption>
                            </figure>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//================Gallery end==============//-->
<div class="clear"></div>
<!--//================Footer start==============//-->
<?php
require_once(APPPATH.'/views/fragment/footer.fragment.php');
?>