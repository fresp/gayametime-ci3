<?php
$Nav = new stdClass;
$Nav->activeMenu = "layanan";
$Nav->name = "Layanan";

$uri = $this->uri->segment(3);
$uri4 = $this->uri->segment(4);
$uri=="input" ? $Nav->deskripsi = "Untuk menambah layanan" : $Nav->deskripsi = "Untuk Mengupdate layanan";
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
              <span class="input-group-addon">Kategori</span>
            
              <select class="form-control" name="kategori">
                <option value="1" <?= $uri=="input" ? "": $layanan->id_kat=="1" ? "Selected": ""; ?> >Massage</option>
                <option value="2" <?= $uri=="input" ? "": $layanan->id_kat=="2" ? "Selected": ""; ?> >Reflexology</option>
                <option value="3" <?= $uri=="input" ? "": $layanan->id_kat=="3" ? "Selected": ""; ?> >Spa</option>
                <option value="4" <?= $uri=="input" ? "": $layanan->id_kat=="4" ? "Selected": ""; ?> >Other</option>
              </select>

            </div>
            <label for="kategori" generated="true" class="error"></label>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Nama</span>
              <input class="form-control" name="nama" placeholder="Nama" value="<?= $uri=="input" ? "": $layanan->title ; ?>" type="text">
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
              <img src="'.base_url('assets/uploads/layanan/'.$layanan->nama).'" style="width: 100%;height: 130px;">
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
            <input type="text" name="token" id="token" value="<?= $uri=="input" ? "": $layanan->image ; ?>"  style="visibility: hidden;"  >
            <br>
            <div class="input-group">
              <span class="input-group-addon">Deskripsi Layanan</span>
          
               <textarea id="editor1" name="deskripsi" rows="10" cols="80"><?= $uri=="input" ? "": $layanan->data; ?></textarea>
            </div>
            <label for="deskripsi" generated="true" class="error"></label>
            <br>
          </div>
          <div class="box-body">

            <span style="font-weight: bold;">Range Biaya Layanan</span>

          </div>  
          <div class="box-body">
            <div class="col-lg-6" >
              <div class="input-group ">
                <span class="input-group-addon">Layanan  ~Menit</span>
                <input class="form-control rupiah" name="mnot" placeholder="100000" value="<?= $uri=="input" ? "": $layanan->mnot; ?>"  type="text">

              </div>

              <br>
            </div>
            <div class="col-lg-6" >
              <div class="input-group ">
                <span class="input-group-addon">Layanan 60 Menit</span>
                <input class="form-control rupiah" name="60menit" placeholder="100000" value="<?= $uri=="input" ? "": $layanan->m60; ?>"  type="text">

              </div>

              <br>
            </div>
            <div class="col-lg-6" >
              <div class="input-group ">
                <span class="input-group-addon">Layanan 90 Menit</span>
                <input class="form-control rupiah" name="90menit" placeholder="100000" value="<?= $uri=="input" ? "": $layanan->m90; ?>"  type="text">

              </div>

              <br>
            </div>

            <div class="col-lg-6" >
              <div class="input-group ">
                <span class="input-group-addon">Layanan 120 Menit</span>
                <input class="form-control rupiah" name="120menit" placeholder="100000" value="<?= $uri=="input" ? "": $layanan->m120; ?>"  type="text">

              </div>

              <br>
            </div>
            <div class="col-lg-6" >
              <div class="input-group ">
                <span class="input-group-addon">Layanan 150 Menit</span>
                <input class="form-control rupiah" name="150menit" placeholder="100000" value="<?= $uri=="input" ? "": $layanan->m150; ?>"  type="text">

              </div>

              <br>
            </div>
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