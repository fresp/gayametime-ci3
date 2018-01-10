<?php
error_reporting(0);
$Nav = new stdClass;
$Nav->activeMenu = "service";
$Nav->name = "Service";
require_once(APPPATH.'/views/fragment/header.fragment.php');
$uri = $this->uri->segment(2);
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
                            <h3 class="theme-color">Service</h3>
                        </div>
                        <div class="breadcrumb-box">
                            <ul class="breadcrumb colorW marB0">
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li class="active">Service</li>
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
<!--//================Services starts==============//-->
<section class="padT100 padB60 grey-bg">
    <!--- Theme heading start-->
    <div class="theme-heading marB50 positionR">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                    <h1>
                        <?php
                        if($uri=="massage"){
                            echo "Massage";
                        }elseif($uri=="reflexology"){
                            echo "Reflexology";
                        }elseif($uri=="spa"){
                            echo "Spa";
                        }elseif($uri=="other"){
                            echo "Others";
                        }
                        ?>

                    </h1>
                    <div class="heading-lines"><span class="saf-boxs"></span></div>
                    <p>
                        <?php
                        if($uri=="massage"){
                            echo "Relaxing all of your muscles and enhance your blood circulations. Treats all the pain an makes you more healthy. Pamper you body with this treatment and take comfortness all day long!";
                        }elseif($uri=="reflexology"){
                            echo "Stimulating spots on you feet and palm right to the health spots. Cure some illness with frequent treatment. Gives a healthier you!";
                        }elseif($uri=="spa"){
                            echo "Our spa offers different and more special treatments, with natural ingredients and high quality spa products that makes you more comfort and relaxes your body and soul.";
                        }elseif($uri=="other"){
                            echo "Enjoy our other healthy treatments, such as: manicure, pedicure and many great leisure treatments. No “others” like ours!";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="service-detail single marB20">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <figure class="marB30" style="text-align: center;">
                        <?php
                        if($uri=="massage"){
                            echo '<img src="'. base_url('assets/img/gallery/1.jpg').'" alt=""/>';
                        }elseif($uri=="reflexology"){
                            echo '<img src="'. base_url('assets/img/gallery/7.jpg').'" alt=""/>';
                        }elseif($uri=="spa"){
                            echo '<img src="'. base_url('assets/img/gallery/5.jpg').'" alt=""/>';
                        }elseif($uri=="other"){
                            echo '<img src="'. base_url('assets/img/gallery/3.jpg').'" alt=""/>';
                        }
                        ?>

                    </figure>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!--- Theme heading end-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-xs-12 marB50 service-single text-center">
                <?php 
                foreach($layanan as $item) {
                    echo '<a style="margin: 5px;" href="#'.$item->id.'" data-toggle="tab" class="itg-button ">'.$item->title.'</a>';
                }
                ?>

            </div>

        </div>
        <div class="tab-content">
            <?php 
            $i=1;
            foreach($layanan as $item) {
                ?>
                <div class="pane tab- ui-tabs-panel ui-widget-content ui-corner-bottom tab-pane <?=$i=="1" ? "active" : "";?>" id="<?=$item->id?>" >
                    <div class="row ">
                        <div class="wpv-grid grid-1-1 grid-1-1 first unextended animation-fade-in no-extended-padding animation-ended animated-active" style="padding: 40px 30px;">
                            <p style="text-align: center;">
                                <strong><?=$item->title?></strong>
                            </p>
                            <hr>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <figure class="marB30">
                                    <img style="float: left; margin: 0 10px 10px 0;max-width: 150px;" src="<?= base_url('assets/uploads/layanan/'.$item->namagambar.'') ?>" alt=""/>

                                </figure>
                                <p>
                                    <?=$item->data?>
                                </p>


                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12" style="background: #ededed;">
                                <table class="vamtam-styled">
                                    <tbody>
                                        <?php
                                        if($item->mnot!=NULL){
                                            ?>
                                            <tr><td><p class="p1"><span class="fa fa-clock-o" style="color:#545f64;font-size:14px !important;"></span> ~min.</p></td><td><p class="p1"><strong>Rp. <?=$item->mnot?>*</strong> </p></td>
                                            </tr>
                                            <?php
                                        }
                                        if($item->m60!=NULL){
                                            ?>
                                            <tr><td><p class="p1"><span class="fa fa-clock-o" style="color:#545f64;font-size:14px !important;"></span> 60min.</p></td><td><p class="p1"><strong>Rp. <?=$item->m60?>*</strong> </p></td>
                                            </tr>
                                            <?php
                                        }

                                        if($item->m90!=NULL){
                                            ?>
                                            <tr><td><p class="p1"><span class="fa fa-clock-o" style="color:#545f64;font-size:14px !important;"></span> 90min.</p></td><td><p class="p1"><strong>Rp. <?=$item->m90?>*</strong> </p></td>
                                            </tr>
                                            <?php
                                        }

                                        if($item->m120!=NULL){
                                            ?>
                                            <tr><td><p class="p1"><span class="fa fa-clock-o" style="color:#545f64;font-size:14px !important;"></span> 120min.</p></td><td><p class="p1"><strong>Rp. <?=$item->m120?>*</strong> </p></td>
                                            </tr>
                                            <?php
                                        }

                                        if($item->m150!=NULL){
                                            ?>
                                            <tr><td><p class="p1"><span class="fa fa-clock-o" style="color:#545f64;font-size:14px !important;"></span> 150 min.</p></td><td><p class="p1"><strong>Rp. <?=$item->m150?>*</strong> </p></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <p>
                                    *based on lowest prices
                                </p>
                            </div>

                            <div class="clear"></div>

                        </div>
                    </div>
                </div>
                <?php
                $i++;
            }
            ?>
        </div>


    </div>
</section>
<!--//================Services end==============//-->
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

<?php
require_once(APPPATH.'/views/fragment/footer.fragment.php');
?>
