<?php
error_reporting(0);
$Nav = new stdClass;
$Nav->activeMenu = "index";
require_once(APPPATH.'/views/fragment/header.fragment.php');

?>
<div class="clear"></div>
<!--//================Slider start==============//-->
<section id="slider-section">
    <div id="main-slider" class="owl-carousel owl-theme slider positionR">
        <div class="item positionR">
            <figure class="slider-image positionR">
                <img src="<?php echo base_url('assets/img/slider/1-compressor.jpg') ?>" alt="" class="hidden-xs"/>
                <img src="<?php echo base_url('assets/img/slider/1-compressor.jpg') ?>" alt="" class="hidden-sm hidden-lg hidden-md"/>
            </figure>
            <div class="slider-text positionA text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-1 col-sm-offset-1 col-xs-offset-0 text-center">
                            <h3><i>Welcome to <?=  $general->name  ?></i></h3>
                            <h1>Looking for a <span class="theme-color">Woman beauty</span></h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
<!--//================Slider end==============//-->
<!--//================details section Start==============//-->
<section>
    <div class="container">
        <div class="row padT100 padB100">
            <div class="col-md-7 col-sm-12 col-xs-12 mar-bottom-table">
                <div style="margin-top: -100px;padding-bottom:0.05px;padding-left: 10px;padding-right: 10px;">
                    <div class="row ">
                        <div  style="padding-top:0.05px;padding-bottom:0.05px;" >
                            <h2 style="position: relative;margin: 60px 0 25px 0;text-align: center;letter-spacing: 3px;word-wrap: break-word;"><span class="fa fa-envelope fa-5" style="color:#b69e59;"></span><br>BOOKING</h2>

                        </div>
                    </div>
                    <div class="row " style="margin-bottom: 50px;">

                        <p style="text-align: center;">
                           For online booking, please contact our outlet staff number in this page according to the outlet that you want to visit.
                       </p>
                       <p style="text-align: center;">Note: Do booking at least 2 hours before attending.</p>

                       <p style="text-align: center;">  
                         <?php 
                         $open = $general->socialmedia;
                         $openArray = json_decode($open, true);
                         foreach($openArray as $item) {
                            if($item['nama']=="youtube")
                            {
                             echo '
                             <a href="'. $item['value'].'" class="theme-circle marR10" style="width: 45px;background: #404040;height: 45px;color: #fff;font-size: 21px;"><i class="fa fa-'. $item['nama'].'" aria-hidden="true"></i></a>';
                         }else{
                             echo '
                             <a href="'. $item['value'].'" class="theme-circle marR10" style="width: 45px;background: #404040;height: 45px;color: #fff;font-size: 21px;"><i class="fa fa-'. $item['nama'].'" aria-hidden="true"></i></a>

                             ';
                         }

                     }
                     ?>
                     <a href="<?=Site_url('contact')?>" class="theme-circle marR10" style="width: 45px;background: #404040;height: 45px;color: #fff;font-size: 21px;"><i class="fa fa-phone" aria-hidden="true"></i></a>
                 </p>
             </div>
         </div>
     </div>

     <div class="col-md-5 col-sm-12 col-xs-12">
        <div class="clock" style="padding-bottom:0.05px;padding-left: 10px;padding-right: 10px;">
            <div class="row ">
                <div style="padding-bottom:0.05px;">
                    <h1 style="position: relative;margin: 0px 0 25px 0;text-align: center;letter-spacing: 3px;word-wrap: break-word;"><br>Operational Hours</h1>

                </div>
            </div>
            <div class="row ">

                <div class="opening-box text-center" class="col-md-12 col-sm-12 col-xs-12">
                    <?php 
                    $open = $general->openingHours;

                    $openArray = json_decode($open, true);
                    foreach($openArray as $item) {
                        if($item['day']=="EVERYDAY"){
                            echo '<div class="opening-hours pad40" style="border-color: #b18726; ">
                            <h2 style="color: #b18726;">'. $item['day'].'</h2>
                            <h1 style="color: #b18726;">'. $item['clock'].'</h1>
                            </div>';
                            break;
                        }
                        else{
                            echo '<div class="opening-hours pad40" style="border-color: #b18726;height: 120px;padding: 10px;"
                            <h2 style="color: #b18726;">'. $item['day'].'</h2>
                            <h1 style="color: #b18726;">'. $item['clock'].'</h1>
                            </div>';
                        }


                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!--//================details section end==============//-->
<div class="clear"></div>
<!--//================ Blog start ==============//-->
<section class="padB70">
    <!--- Theme heading start-->
    <div class="theme-heading marB50 positionR">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12  col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                    <h1>Training Center</h1>
                    <div class="heading-lines"><span class="saf-boxs"></span></div>
                    
                </div>
            </div>
        </div>
    </div>
    <!--- Theme heading end-->
    <div class="container">
        <div class="row">
            <div id="blog-slider" class="owl-carousel owl-theme slider positionR">
                <div class="item">
                    <div class="col-md-12 box-shadow-hover">
                        <div class="collection-box hover theme-hover marB30" style="text-align: center;">
                            <figure>
                                <img src="<?php echo base_url('assets/uploads/TC-11.jpg') ?>" alt=""/>
                            </figure>

                            <h4 class="product-lilte-headings"><a href="http://preview.itgeeksin.com/spa-html-template/blog-full-with-sidebar.html">Pro-Theraphist</a></h4>
                            <p>OUR THERAPHIST IS WORKING WITH HEART AND SMILE</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-12 box-shadow-hover">
                        <div class="collection-box hover theme-hover marB30">
                            <figure>
                                <img src="<?php echo base_url('assets/uploads/TC-22.jpg') ?>" alt=""/>
                            </figure>
                            <h4 class="product-lilte-headings"><a href="http://preview.itgeeksin.com/spa-html-template/blog-full-with-sidebar.html">Good Attitude</a></h4>
                            <p>PLEASURING PEOPLE THRU ATTITUDES BORN TRUSTINESS</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-12 box-shadow-hover">
                        <div class="collection-box hover theme-hover marB30">
                            <figure>
                                <img src="<?php echo base_url('assets/uploads/TC-31.jpg') ?>" alt=""/>
                            </figure>
                            <h4 class="product-lilte-headings"><a href="http://preview.itgeeksin.com/spa-html-template/blog-full-with-sidebar.html">Complete Skill Trained</a></h4>
                            <p>NOBODY IS NEWBIE, ALL IS WELL TRAINED</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="col-md-12 box-shadow-hover">
                        <div class="collection-box hover theme-hover marB30">
                           <figure>
                            <img src="<?php echo base_url('assets/uploads/TC-41.jpg') ?>" alt=""/>
                        </figure>
                        <h4 class="product-lilte-headings"><a href="http://preview.itgeeksin.com/spa-html-template/blog-full-with-sidebar.html">Certificated</a></h4>
                        <p>CERTIFICATION PROGRAM MAKES THEM EVEN BETTER</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

<div class="clear"></div>
<!--//================Jambuka Start==============//-->
<section class="opening-sec-box">
    <div class="special-style overlay">
        <div class="special-video-image parallax-style"></div>
    </div>
    <div class="padT100 padB70">
        <!--- Theme heading start-->
        <div class="theme-heading background marB50 positionR">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                        <h1>Our Services</h1>
                        <div class="heading-lines">
                            <span class="saf-boxs"></span>
                        </div>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Integer lorem  quam, adipiscing
                            </p>
                        -->
                    </div>
                </div>
            </div>
        </div>
        <!--- Theme heading end-->
        <!--- Theme heading end-->
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6 pad0">
                        <div class="gallery-img">
                            <figure>
                                <img style="height: 300px;" src="<?php echo base_url('assets/img/gallery/1.jpg') ?>" alt="">
                                <figcaption><a href="<?= site_url('service/massage')?>" class="fancybox layanan" data-fancybox-group="group"><span>Massage</span></i></a></figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 pad0">
                        <div class="gallery-img">
                            <figure>
                                <img style="height: 300px;" src="<?php echo base_url('assets/img/gallery/2.jpg') ?>" alt="">
                                <figcaption><a href="<?= site_url('service/massage')?>" class="fancybox layanan" data-fancybox-group="group"><span>Reflexology</span></i></a></figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 pad0">
                        <div class="gallery-img">
                            <figure>
                                <img style="height: 300px;" src="<?php echo base_url('assets/img/gallery/3.jpg') ?>" alt="">
                                <figcaption><a href="<?= site_url('service/massage')?>" class="fancybox layanan" data-fancybox-group="group"><span>Spa</span></i></a></figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-6 pad0">
                        <div class="gallery-img">
                            <figure>
                                <img style="height: 300px;" src="<?php echo base_url('assets/img/gallery/4.jpg') ?>" alt="">
                                <figcaption><a href="<?= site_url('service/massage')?>" class="fancybox layanan" data-fancybox-group="group"><span>other</span></i></a></figcaption>
                            </figure>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--//================Jambuka  end==============//-->
<div class="clear"></div>

<!--//================Services end==============//-->
<div class="clear"></div>

<!--//================Gallery Start==============//-->
<!--//================Gallery end==============//-->
<div class="clear"></div>
<!--//================Special Menu start==============//-->
<section class="padT100 padB100">
    <!--- Theme heading start-->
    <div class="theme-heading marB50 positionR">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2 col-xs-offset-0 heading-box text-center">
                    <h1>Recommended Services</h1>
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
            <div id="lunch" class="tabcontent" style="display:block;">
                <?php 
                foreach($layanan as $item) {
                    ?>
                    <div class="col-md-6 col-sm-6 col-xs-12" style="height: 180px;">
                        <div class="row">
                            <div class="menu-list-box marB30">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <figure>
                                        <img src="<?= base_url('assets/uploads/layanan/'.$item->namagambar.'') ?>" alt=""/>
                                    </figure>
                                </div>
                                <div class="col-sm-8 col-md-8">
                                    <?php
                                    $a=$item->id_kat;
                                    if($a=="1"){
                                        $link = site_url('service/massage');
                                    }elseif($a=="2"){
                                        $link = site_url('service/reflexology');
                                    }elseif($a=="3"){
                                        $link = site_url('service/spa');
                                    }elseif($a=="4"){
                                        $link = site_url('service/other');
                                    }
                                    ?>
                                    <h3><a href="<?=$link ?>"><?=$item->title?></a>
                                        <span class="theme-color">
                                         <?php 
                                         $mnot = $item->mnot!=NULL ?  $item->mnot: "NULL";
                                         $m60 = $item->m60!=NULL ?  $item->m60: "NULL";
                                         $m90 = $item->m90!=NULL ?  $item->m90: "NULL";
                                         $m120 = $item->m120!=NULL ?  $item->m120: "NULL";
                                         $m150 = $item->m150!=NULL ?  $item->m150: "NULL";
                                         $price = $mnot.' '.$m60.' '.$m90.' '.$m120.' '.$m150;
                                         $ubah1 = str_replace("NULL ","", $price);
                                         $ubah2 = str_replace(" NULL","", $ubah1);
                                         $array=explode(" ",$ubah2); 
                                         
                                         echo min($array)==max($array) ?   "Rp.".min($array): "Rp.".min($array)."-Rp.".max($array);
                                         ?>
                                     </span>
                                 </h3>

                                 <p>
                                    <?=
                                    substr($item->data, 0, 100) . ' ...';
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
            ?>


        </div>
    </div>
</div>
</section>
<!--//================Special Menu end==============//-->


<div class="clear"></div>
<!--//================ Our Customer start ==============//-->
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
                    <figure style="font-size: 40px;padding-top: 23px;color:#b18726;background: #fff;height: 100%;font-weight: bold;text-align: right;">
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

<!--//================ Blog end ==============//-->
<div class="clear"></div>
<!--//================ Our Partner start ==============//
<div class="partner-box">
    <div class="container">
        <div class="row">
            <div id="partner-slider" class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="col-xs-12">
                    <div class="item">
                        <figure>
                            <img src="<?php echo base_url('assets/img/partner/4.png') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="item">
                        <figure>
                            <img src="<?php echo base_url('assets/img/partner/5.png') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="item">
                        <figure>
                            <img src="<?php echo base_url('assets/img/partner/6.png') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="item">
                        <figure>
                            <img src="<?php echo base_url('assets/img/partner/7.png') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="item">
                        <figure>
                            <img src="<?php echo base_url('assets/img/partner/8.png') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="item">
                        <figure>
                            <img src="<?php echo base_url('assets/img/partner/6.png') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="item">
                        <figure>
                            <img src="<?php echo base_url('assets/img/partner/7.png') ?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="item">
                        <figure> 
                            <img src="<?php echo base_url('assets/img/partner/8.png') ?>" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!--//================ Our Partner end ==============//-->
<div class="clear"></div>
<!--//================Footer start==============//-->
<?php
require_once(APPPATH.'/views/fragment/footer.fragment.php');
?>
