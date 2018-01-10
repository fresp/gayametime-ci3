<?php
$Nav = new stdClass;
$Nav->activeMenu = "ketentuan";
$Nav->name = "Ketentuan";
$Nav->deskripsi = "Untuk Mengatur Ketentuan Layanan";
require_once(APPPATH.'/views/fragment/admin/header.fragment.php');
?>

<section class="content">
  <div class="row">
    <section class="col-lg-10 connectedSortable">
      <form action="<?= base_url('admin/ketentuan/post'); ?>" id="frm-ketentuan" method="post">
        <div class="box box-info">
          <textarea id="editor1" name="editor1" rows="10" cols="80"><?=$ketentuan->deskripsi ?></textarea>
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