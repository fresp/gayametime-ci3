<?php
$Nav = new stdClass;
$Nav->activeMenu = "sertifikat";
$Nav->name = "Sertifikat";

$uri = $this->uri->segment(3);
$uri4 = $this->uri->segment(4);
$uri=="input" ? $Nav->deskripsi = "Untuk menambah sertifikat" : $Nav->deskripsi = "Untuk Mengupdate sertifikat";
$uri=="edit" && $this->uri->segment(4)==NULL ? $this->session->set_userdata('notice','gagal'). redirect("admin/".$Nav->activeMenu): '';
require_once(APPPATH.'/views/fragment/admin/header.fragment.php');
?>

<section class="content">
  <div class="row">
    <section class="col-lg-10 connectedSortable">
      <form action="<?= $uri=="input" ? $uri : $uri4 ; ?>" id="frm-<?=$Nav->activeMenu?>" method="post">
        <div class="box box-info">
          <div class="box-body">
            
            <div class="input-group">
              <span class="input-group-addon">Nama</span>
              <input class="form-control" name="nama" placeholder="Nama" value="<?= $uri=="input" ? "": $sertifikat->nama ; ?>" type="text">
            </div>
            <label for="nama" generated="true" class="error"></label>
            <br>
            <div class="input-group" style="width: 100%;">
              <span class="form-control" >Upload Foto  <span class="error" style="float:right">*Maksimal 1Foto</span></span>
            </div>
           
            <?php if($uri=="input"){
              echo '<div class="dropzone" style="margin-top: 0px;">
              <div class="dz-message">
              <h3>  Upload Gambar Silahkan Klik disini</h3>
              </div>
              </div>';
            }else{
              echo '<div class="col-md-3 col-sm-3 col-xs-3" style="padding: 2%;">
              <img src="'.base_url('assets/uploads/sertifikat/'.$sertifikat->namagambar).'" style="width: 100%;height: 130px;">
              </div>
              <div class="col-md-9 col-sm-9 col-xs-9" style="padding-right: 0;">
              <div class="dropzone" style="margin-top: 0px;">
              <div class="dz-message">
              <h3>  Upload Gambar Silahkan Klik disini</h3>
              </div>
              </div>
              </div>';
            }
            ?>
            <label for="token" generated="true" class="error"></label>
            <input type="text" name="token" id="token" value="<?= $uri=="input" ? "": $sertifikat->data ; ?>"  style="visibility: hidden;"  >
            <br>
          </div>
          
          <div class="box-footer">

            <button type="submit" class="btn btn-primary" style="width: 100%;">Simpan</button>
          </div>
        </div>
      </form>
    </section>

  </div>
</section>
<?php
require_once(APPPATH.'/views/fragment/admin/footer.fragment.php');
?>   