<?php
$Nav = new stdClass;
$Nav->activeMenu = "user";
$Nav->name = "User";
$Nav->deskripsi = "Menampilkan list user";
require_once(APPPATH.'/views/fragment/admin/header.fragment.php');
?>
<section class="content">
  <div class="row">
    <section class="col-lg-11 connectedSortable">
      <div class="box box-primary">
        <div class="box-header with-border">

          <h3 class="box-title">Daftar <?=$Nav->name?></h3>
          <a class="btn btn-danger" style="float:right;" href="<?= base_url('admin/user/input'); ?>">Tambah</a>
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive mailbox-messages">
            <table id="table"  class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th width="100px">Aksi</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th width="100px">Nama</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
              <tfoot>
                <tr>
                  <th width="100px">Aksi</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th width="100px">Nama</th>
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