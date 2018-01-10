<?php
$Nav = new stdClass;
$Nav->activeMenu = "message";
$Nav->name = "Message";

$uri = $this->uri->segment(3);
$uri4 = $this->uri->segment(4);
$uri=="input" ? $Nav->deskripsi = "Untuk menambah layanan" : $Nav->deskripsi = "Untuk Melihat Detail Pesan";
$uri=="edit" && $this->uri->segment(4)==NULL ? $this->session->set_userdata('notice','gagal'). redirect("admin/".$Nav->activeMenu): '';
require_once(APPPATH.'/views/fragment/admin/header.fragment.php');
?>

<section class="content">
  <div class="row">
    <section class="col-lg-10 connectedSortable">
      <div class="box box-info">
        <div class="box-body">
          <div class="col-lg-4 no-padding" >
            <div class="input-group ">
              <span class="input-group-addon">Nama</span>
              <input class="form-control " name="60menit" placeholder="nama" value="<?= $uri=="input" ? "": $layanan->nama; ?>"  type="text">
            </div>
            <br>
          </div>
          <div class="col-lg-4 no-padding" >
            <div class="input-group ">
              <span class="input-group-addon">Telepon</span>
              <input class="form-control " name="90menit" placeholder="Telepon" value="<?= $uri=="input" ? "": $layanan->telepon; ?>"  type="text">
            </div>
            <br>
          </div>
          <div class="col-lg-4 no-padding" >
            <div class="input-group ">
              <span class="input-group-addon">Email</span>
              <input class="form-control " name="90menit" placeholder="Email" value="<?= $uri=="input" ? "": $layanan->email; ?>"  type="text">
            </div>
          </div>
        </div>
        <div class="box-body">
          <div class="input-group">
            <span class="input-group-addon">Subject</span>
            <input class="form-control" name="nama" placeholder="Nama" value="<?= $uri=="input" ? "": $layanan->subject ; ?>" type="text">
          </div>
          <label for="nama" generated="true" class="error"></label>
          <br>

          <div class="input-group">
            <span class="input-group-addon">isi Pesan</span>
            <textarea class="form-control" name="deskripsi" style="height: 320px; margin: 0px; "><?= $uri=="input" ? "": $layanan->pesan; ?></textarea>
          </div>
          <label for="deskripsi" generated="true" class="error"></label>
          <br>
        </div>
        <div class="box-footer">
    
          <a href="<?=site_url('admin/'.$Nav->activeMenu); ?>/" class="btn btn-primary" style="width: 100%;">KEMBALI</a>
        </div>
      </div>
    </section>
  </div>
</section>
<?php
require_once(APPPATH.'/views/fragment/admin/footer.fragment.php');
?>   