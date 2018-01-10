<?php
$Nav = new stdClass;
$Nav->activeMenu = "profile";
$Nav->name = "Profile";
$Nav->deskripsi = "Untuk mengubah Data Profile";
require_once(APPPATH.'/views/fragment/admin/header.fragment.php');
?>

<section class="content">
	<div class="row">
		<section class="col-lg-12 connectedSortable">
      <form action="<?= base_url('admin/'.$Nav->activeMenu.'/post'); ?>" id="frm-<?=$Nav->activeMenu ?>" method="post">
        <div class="box box-info">
          <div class="box-body">
            <div class="input-group">
              <span class="input-group-addon">Tittle</span>
              <input class="form-control" name="nama" placeholder="Nama" value="<?=  $data->bigtitle  ?>" type="text">
            </div>
            <br>
            <div class="input-group" style="width: 100%;">
              <span class="form-control" >Upload Foto  <span class="error" style="float:right">*Maksimal 1Foto</span></span>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3" style="padding: 2%;">
              <img src="<?= base_url('assets/uploads/'.$data->nama)?>" style="width: 130px;height: 130px;">
            </div>
            <div class="col-md-9 col-sm-9 col-xs-9" style="padding-right: 0;">
              <div class="dropzone" style="margin-top: 0px;">
                <div class="dz-message">
                  <h3>  Upload Gambar Silahkan Klik disini</h3>
                </div>
              </div>
            </div>

            <label for="token" generated="true" class="error"></label>
            <input type="text" name="token" id="token" value="<?=  $data->banner  ?>"  style="visibility: hidden;"  >
            <br>
            <div class="input-group">
              <span class="input-group-addon">Deskripsi</span>
              <textarea  class="form-control" name="Deskripsi" placeholder="Deskripsi" style="width: 100%"><?=  $data->data  ?></textarea>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Visi</span>
              <textarea  class="form-control" name="Visi"  placeholder="Visi" style="width: 100%"><?=  $data->visi  ?></textarea>
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Misi</span>
              <textarea  class="form-control" name="Misi" placeholder="Misi" style="width: 100%"><?=  $data->misi  ?></textarea>
            </div>

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