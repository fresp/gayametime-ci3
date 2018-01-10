<footer class="main_footer" id="#footer">
    <div class="container">
        <div class="footer-box padT50 padB30">
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="foot-sec marB30">
                        <h3 class="colorW marB20">Customer care</h3>
                        <ul class="footer-icon-box">
                            <li>
                                <?=  $general->alamat  ?>
                            </li>
                            <li>
                                Telepon: <?=  $general->hp  ?> 
                            </li>
                            <li>
                                Email: <?=  $general->email  ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="foot-sec marB30">
                        &nbsp
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="foot-sec foot-img-box marB30">
                        <h3 class="colorW marB20">Lokasi</h3>
                        <ul class="pad0">
                            <div class="textwidget">
                                <p style="max-width: 100%;max-height: 250px">
                                 <?=  $general->linkGmap  ?>
                             </p>
                         </div>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="footer-bottom-icons-section">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="foot-sec box1">
                    <ul class="social-icon">
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

                       }
                       ?>

                    </ul>
                    <br>
                    <p>
                        <a href="http://www.itgeeksin.com/"><span class="theme-color">©2017 by <a href="http://fresp.net">fresp.net</a></span></a>
                    </p>
               </div>
           </div>
       </div>
   </div>
</div>

</footer>
<!--//================Quick view Start ==============//-->
<div class="quick-vive-popap">
    <div class="container">
        <div class="modal fade" id="myModal">
            <div class="modal-dialog modal-lg">
                <div class="Quick-view-popup modal-content text-left">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="col-md-12 col-xs-12 popap-open-box">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12 marB30">
                                        <figure>
                                            <img src="<?php echo base_url('assets/img/all/product-detail.jpg') ?>" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 responsive-top">
                                <h3 class="theme-headdings text-left product-detail-title s"><a href="#">Your Product Title</a></h3>
                                <div class="star-box-section left product-det text-left padT15">
                                    <ul>
                                        <li>
                                            <p>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="star-code fa fa-star-half-o" aria-hidden="true"></i>
                                            </p>
                                        </li>
                                        <li class="border-left-site">(3) Reviews</li>
                                        <li class="border-left-site">Add a Review</li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                                <div class="per-box texy-left marT15">
                                    <p>
                                        Morbi mollis vestibulum sollicitudin. in eros a justo facilisis rutrum. Aenean id ullamcorper libero. tempor et purus vitae, consectetur varius nunc.
                                    </p>
                                </div>
                                <div class="product-detail-btn padT15">
                                    <div class="form-row col-sm-5 col-xs-12 country-boxs billing-box select ">
                                        <div class="row">
                                            <p>
                                                <label for="billing_state28">Material</label>
                                                <select class="billing_state28" id="billing_state28" name="billing_state">
                                                    <option value="">Select Color</option>
                                                    <option value="AP">Red</option>
                                                    <option value="AR">Blue</option>
                                                    <option value="AS">Green</option>
                                                    <option value="BR">Yellow</option>
                                                    <option value="CT">Black</option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-row col-sm-5 country-boxs billing-box select down ">
                                        <div class="row ">
                                            <p>
                                                <label for="billing_state27">Size</label>
                                                <select class="billg_state" id="billing_state27" name="billing_state">
                                                    <option value="">Select Size</option>
                                                    <option value="AP">S</option>
                                                    <option value="AR">L</option>
                                                    <option value="AS">M</option>
                                                    <option value="BR">XL</option>
                                                    <option value="CT">XXL</option>
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-5 row">
                                    <div class="order-data box order-table ">
                                        <div class="order-table-cell order-text product-input-type">
                                            <input type="number" value="01" class="qty" name="qty1"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-7 product-box-btm-blog row">
                                        <a href="spa-html-template.html" class="itg-button light pro btn left marT">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//================Quick view End ==============//-->
    <!--//================color Switcher End==============//-->
    <!--//================Footer end==============//-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/megamenu/js/hover-dropdown-menu.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/megamenu/js/jquery.hover-dropdown-menu-addon.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/owl-carousel/js/owl.carousel.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/acordian/js/jquery-ui.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/fancyBox/js/jquery.fancybox.pack.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/fancyBox/js/jquery.fancybox-media.js') ?>"></script>
    <script src="<?php echo base_url('assets/plugin/vertical-slider/js/jquery.bxslider.js') ?>"></script>
    
    <script type="text/javascript" src="<?php echo base_url('assets/plugin/counter/js/jquery.countTo.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/plugin/counter/js/jquery.appear.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/main.js') ?>"></script>
</body>
</html>