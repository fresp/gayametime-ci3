<?php
error_reporting(0);
$Nav = new stdClass;
$Nav->activeMenu = "ketentuan";
$Nav->name = "Ketentuan";

require_once(APPPATH.'/views/fragment/header.fragment.php');

?>
<div class="clear"></div>
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
<!--//================ About start ==============//-->
<section class="padT100">
    <!--- Theme heading start-->
    <div class="theme-heading marB50 positionR">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                    <h1><?= $Nav->name ?></h1>
                    <div class="heading-lines">
                        <span class="saf-boxs"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- Theme heading end-->
    <div class="container">
        <div class="row">
            <div class="about-us">
                <div class="col-md-12 col-sm-12 col-xs-12 pull-left">
                    <h3 class="marB10"><?= $profile->bigtitle ?></h3>
                    <div>
                        <pre style="font-size: 20px;"><?= $ketentuan->deskripsi ?></pre>
                    </div>       
                </div>

            </div>
        </div>
    </div>
    <div class="heading-lines">
        <span class="saf-boxs"></span>
    </div>
</section>
<!--//================ About end ==============//-->
<div class="clear"></div>

<div class="clear"></div>
<!--//================ Our TESTIMONI start ==============//-->
<section class="padTB100 customer-section">
    <!--- Theme heading start-->
    <div class="theme-heading background marB100 positionR">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                    <h2 style="color: #fff">TESTIMONIAL</h2>
                    <div class="heading-lines">
                        <span class="saf-boxs"></span>
                    </div>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Integer lorem  quam, adipiscing
                        -->
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--- Theme heading end-->
    <div class="container">
        <div class="row">
            <div id="customer-slider" class="owl-carousel owl-theme slider positionR">
                <?php 
                foreach($testimoni as $item) {
                    $a = $item->nama;
                    $pisah = explode(" ", $a);
                    $arr1 = strtoupper(substr($pisah[0],0,1));
                    $pisah[1] ? $arr2 = strtoupper(substr($pisah[1],0,1)):$arr2 = " ";
                    $nama = $arr1.''.$arr2;
                    echo '
                    <div class="item">
                        <div class="col-md-12">
                            <div class="customer-box">
                                <blockquote>
                                    '.$item->pesan.'.
                                </blockquote>
                                <div class="customer-detail">
                                    <div class="customer-img" style="height: 98px;width: 67px;">
                                        <figure style="font-size: 40px;padding-top: 23px;color: #faa796;background: #fff;height: 100%;font-weight: bold;text-align: right;">
                                            '.$nama.'
                                        </figure>
                                    </div>
                                    <div class="caption">
                                        <h3>'.$item->nama.'</h3>
                                        <h4 style="color: #fff;margin-left: 20px;">'.$item->pekerjaan.'</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>
<!--//================ Our TESTIMONI end ==============//-->
<div class="clear"></div>
<div class="clear"></div>

<!--//================ Our Partner end ==============//-->
<div class="clear"></div>
<!--//================Footer start==============//-->
<?php
require_once(APPPATH.'/views/fragment/footer.fragment.php');
?>
