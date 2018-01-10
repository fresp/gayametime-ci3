<?php
$Nav = new stdClass;
$Nav->activeMenu = "message";
$Nav->name = "Message";
$Nav->deskripsi = "Menampilkan list Pesan Masuk";
require_once(APPPATH.'/views/fragment/admin/header.fragment.php');
?>
<section class="content">
  <div class="row">
    <section class="col-lg-11 connectedSortable">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Daftar <?=$Nav->name?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive mailbox-messages">
            <table id="table"  class="table table-striped table-bordered" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th width="120px">Aksi</th>
                  <th >Nama</th>
                  <th >Telepon</th>
                  <th >Subject</th>
                  <th >Pesan</th>
                </tr>
              </thead>
              <tbody>
                
              </tbody>
              <tfoot>
                <tr>
                  <th width="10px">Aksi</th>
                  <th >Nama</th>
                  <th >Telepon</th>
                  <th >Subject</th>
                  <th >Pesan</th>
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