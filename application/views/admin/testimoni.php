<?php
$Nav = new stdClass;
$Nav->activeMenu = "testimoni";
$Nav->name = "Testimoni";
$Nav->deskripsi = "Untuk Input Testimoni Pelanggan";
require_once(APPPATH.'/views/fragment/admin/header.fragment.php');
?>

<section class="content">
	<div class="row">
		<section class="col-lg-10 connectedSortable">
      <form action="<?= base_url('admin/testimoni'); ?>" id="frm-<?=$Nav->activeMenu?>" method="post">
        <div class="box box-info">
          <div class="box-body">
            <div class="input-group">
              <span class="input-group-addon">Nama</span>
              <input class="form-control" name="nama" placeholder="Nama" value="" type="text">
            </div>
            <label for="nama" generated="true" class="error"></label>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Pekerjaan</span>
              <input class="form-control" name="pekerjaan" placeholder="pekerjaan" value="" type="text">
            </div>
            <label for="pekerjaan" generated="true" class="error"></label>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Pesan</span>
              <input class="form-control" name="pesan" placeholder="pesan" value="" type="text">
            </div>
            <label for="pesan" generated="true" class="error"></label>
          </div>
          <div class="box-footer">
            <?=

            $counttestimoni < '10'  ? '<input type="submit" name="submit" class="btn btn-primary" value="Input" style="width: 100%;">' : '<input type="disabled" name="submit" value="Limit 10 Testimoni" class="btn btn-danger" style="width: 100%;">' ?>
          </div>
        </div>
      </form>
    </section>
    <section class="col-lg-10 connectedSortable">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar Testimoni</h3>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive mailbox-messages">
            <table id="table" class="table table-bordered table-hover dataTable" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Pekerjaan</th>
                  <th>Pesan</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Pekerjaan</th>
                  <th>Pesan</th>
                </tr>
              </tfoot>
            </table>
            <!-- /.table -->
          </div>
          <!-- /.mail-box-messages -->
        </div>
      </div>
      <!-- /.box (chat box) -->
    </section>
  </div>
</section>
<?php
require_once(APPPATH.'/views/fragment/admin/footer.fragment.php');
?>   