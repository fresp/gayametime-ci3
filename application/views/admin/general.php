<?php
$Nav = new stdClass;
$Nav->activeMenu = "general";
$Nav->name = "General Data";
$Nav->deskripsi = "Untuk Mengatur Info Website";
require_once(APPPATH.'/views/fragment/admin/header.fragment.php');
?>

<section class="content">
  <div class="row">
    <section class="col-lg-7 connectedSortable">
      <form action="<?= base_url('admin/general/post'); ?>" id="frm-general" method="post">
        <div class="box box-info">
          <div class="box-body">
            <div class="input-group">
              <span class="input-group-addon">Nama</span>
              <input class="form-control" name="nama" placeholder="Nama" value="<?=  $general->name  ?>" type="text">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Alamat</span>
      
              <textarea class="form-control" name="alamat" style=" margin: 0px; "><?=  $general->alamat  ?></textarea>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Phone</span>
              <input class="form-control" name="phone" placeholder="Phone" value="<?=  $general->hp  ?>" type="text">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Email</span>
              <input class="form-control" name="email" placeholder="Email" value="<?=  $general->email  ?>" type="text">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Link Posisi Gmaps</span>
              <textarea class="form-control" name="gmap"><?=  $general->linkGmap  ?></textarea>
       

            </div>
            <label> Cara cek Posisi alamat di <a href="https://www.jurnalweb.com/cara-mendapatkan-kode-embed-google-maps/">Gmaps</a></label>
            <br>

          </div>
          <div class="box-body">
            <hr>
            <span style="font-weight: bold;">Waktu Buka</span>

          </div>  
          <div class="box-body">
            <?php 
            $open = $general->openingHours;
            $openArray = json_decode($open, true);
            foreach($openArray as $item) {
              echo '<div class="col-lg-6 col" >
              <div class="input-group ">
                <span class="input-group-addon">Hari</span>
                <input class="form-control" name="jam'. $item['id'].'" placeholder="Senen  to Jumat" value="'. $item['day'].'"  type="text">

              </div>
               <label style="color: #f00;">Senen  to Jumat atau EVERYDAY </label>
              <br>
            </div>
            <div class="col-lg-6" >
              <div class="input-group ">
                <span class="input-group-addon">Jam</span>
                <input class="form-control" name="clock'. $item['id'].'" placeholder="07:00 to 19:00" value="'. $item['clock'].'"  type="text">
              </div>
              <label style="color: #f00;">Format 07:00 to 19:00 </label>
              <br>
            </div>';

            }
            ?>
            
          </div>
          <div class="box-body">
            <span style="font-weight: bold;">Social Media</span>

          </div>  
          <div class="box-body">
            <?php 
            $social = $general->socialmedia;

            $someArray = json_decode($social, true);
            foreach($someArray as $item) {

              echo '<div class="col-lg-6" >
              <div class="input-group ">
              <span class="input-group-addon">'. $item['nama'].'</span>
              <input class="form-control" name="'. $item['nama'].'" placeholder="Link Facebook" value="'. $item['value'].'"  type="text">
              </div>
              <label style="color: #f00;">Format :  https://'. $item['nama'].'.com/</label>
              <br>
              </div>';

            }
            ?>
          </div>
          <div class="box-footer">

            <button type="submit" class="btn btn-primary" style="width: 100%;">Update</button>
          </div>
        </div>
      </form>
    </section>
  </div>
</section>
<?php
require_once(APPPATH.'/views/fragment/admin/footer.fragment.php');
?>   