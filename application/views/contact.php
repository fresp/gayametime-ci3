<?php
error_reporting(0);
$Nav = new stdClass;
$Nav->activeMenu = "contact";
require_once(APPPATH.'/views/fragment/header.fragment.php');

?>
<div class="clear"></div>
<div class="clear"></div>
        <!--//================Bredcrumb starts==============//-->
        <section>
            <div class="bredcrumb-section padTB100 positionR">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-head">
                                <div class="page-header-heading">
                                    <h3 class="theme-color">Contact us</h3>
                                </div>
                                <div class="breadcrumb-box">
                                    <ul class="breadcrumb colorW marB0">
                                        <li>
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li class="active">Contact us</li>
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
        <!--//================Contact Us start==============//-->
        <section class="padT100 padB70">
            <div class="container">
                <div class="row marB40">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="row">
                            <div class="contact-detail text-left marB40">
                                <div class="col-md-12 col-sm-12 colxs-12 marB30">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-map-marker marT5" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <h3>Our location</h3>
                                            <p><?=  $general->alamat  ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 colxs-12 marB30">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <h3 class="marB10">Our Email</h3>
                                            <p><?=  $general->email  ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 colxs-12 marB30">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <div class="col-xs-9">
                                            <h3 class="marB10">Our contact</h3>
                                            <p><?=  $general->hp  ?></p>
                                        </div>
                                    </div>
                                </div>
                                

                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-7 col-xs-12 pull-right">

                        <div class="location-map marB40">
                           <div class="theme-form marB30">
                            <h3 class="marB30">Leave a message</h3>
                            <div class="row">
                                <form action="contact" method="post">
                                    <div class="col-md-4 col-sm-4 col-xs-12 marB30 positionR">
                                        <i class="fa fa-user input" aria-hidden="true"></i>
                                        <input type="text" name="nama" placeholder="Name">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 marB30 positionR">
                                        <i class="fa fa-envelope input" aria-hidden="true"></i>
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12 marB30 positionR">
                                        <i class="fa fa-phone input" aria-hidden="true"></i>
                                        <input type="text" name="phone" placeholder="Phone" >
                                    </div>
                                     <div class="col-md-12 col-sm-12 col-xs-12 marB20 positionR">
                                        <i class="fa fa-phone input" aria-hidden="true"></i>
                                        <input type="text" name="subject" placeholder="Subject" >
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 marB20 positionR">
                                        <i class="fa fa-comment input" aria-hidden="true"></i>
                                        <textarea placeholder="Type here" name="pesan" rows="6" style="height: 200px "></textarea>
                                        
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="itg-button light">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--//================Contact Us end==============//-->
        <div class="clear"></div>
<!--//================ Our Partner end ==============//-->
<div class="clear"></div>
<!--//================Footer start==============//-->
<?php
require_once(APPPATH.'/views/fragment/footer.fragment.php');
?>
