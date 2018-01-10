<?php
$Nav = new stdClass;
$Nav->activeMenu = "dashboard";
$Nav->name = "Dashboard";
$Nav->deskripsi = "";
require_once(APPPATH.'/views/fragment/admin/header.fragment.php');
?>
<!-- Main content -->
<section class="content">
  <div class="panel panel-default">
    <div class="panel-body">
      <h1>Welcome, <?= $this->session->userdata('fullname'); ?></h1>
      <p>&nbsp;</p>

    </div>
  </div>
  <!-- /.row -->
  <!-- Main row -->
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
      <!-- Custom tabs (Charts with tabs)-->

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Message</h3>


          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">

          <div class="table-responsive mailbox-messages">
            <table class="table table-hover table-striped">
              <tbody>
                <?php
                $no = 1;
                foreach($message as $item) {
                  echo '<tr>
                  <td class="mailbox-star"><a href="'.site_url('admin/message/show/'.$item->id).'"><i class="fa fa-star text-yellow"> BARU</i></a></td>
                  <td class="mailbox-name"><a href="'.site_url('admin/message/show/'.$item->id).'">'.$item->subject.'</a>
                  </td>
                  <td class="mailbox-date"> <i class="fa  fa-mail"></i> '.$item->email.'</td>
                  <td class="mailbox-subject">'.$item->pesan.' </td>
                  </tr>';
                  $no++;
                }
                if($no=="6"){
                  echo '<tr><td colspan="5" align="center"><a href="'.site_url('admin/message/').'">LIHAT SEMUA</a></td></tr>';
                }
                ?>
              </tbody>
            </table>
            <!-- /.table -->
          </div>
          <!-- /.mail-box-messages -->
        </div>

      </div>
      <!-- /.box (chat box) -->
    </section>
    <!-- /.Left col -->
    <!-- right col (We are only adding the ID to make the widgets sortable)-->

    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

</section>
<?php
require_once(APPPATH.'/views/fragment/admin/footer.fragment.php');
?>   