<?php
$Nav = new stdClass;
$Nav->activeMenu = "user";
$Nav->name = "Users";
$uri = $this->uri->segment(3);
$uri4 = $this->uri->segment(4);
$uri=="input" ? $Nav->deskripsi = "Untuk menambah User" : $Nav->deskripsi = "Untuk Mengupdate user";
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
              <span class="input-group-addon">Email</span>
              <input class="form-control" name="email" placeholder="email" value="<?= $uri=="input" ? "": $user->email ; ?>" type="text">
            </div>
            <label for="email" generated="true" class="error"></label>
            <br>
            <div class="input-group">
              <span class="input-group-addon">username</span>
              <input class="form-control" name="username" placeholder="Nama" value="<?= $uri=="input" ? "": $user->username ; ?>" type="text">
            </div>
            <label for="username" generated="true" class="error"></label>
       
          </div>
          
          <div class="box-body">
            <div class="col-lg-6 no-padding" >
              <div class="input-group ">
                <span class="input-group-addon">Firstname</span>
                <input class="form-control " name="firstname" placeholder="XXXXX" value="<?= $uri=="input" ? "": $user->firstname; ?>"  type="text">
              </div>
               <label for="firstname" generated="true" class="error"></label>
              <br>
            </div>
            <div class="col-lg-6 no-padding" >
              <div class="input-group ">
                <span class="input-group-addon">Lastname</span>
                <input class="form-control " name="lastname" placeholder="XXXXX" value="<?= $uri=="input" ? "": $user->lastname; ?>"  type="text">
              </div>
               <label for="lastname" generated="true" class="error"></label>
              <br>
            </div>
          </div>
          <div class="box-body">
            <span style="font-weight: bold;">Password</span>
          </div>  
          <div class="box-body">
            <div class="col-lg-6 no-padding" >
              <div class="input-group ">
                <span class="input-group-addon">Password</span>
                <input class="form-control " id="password" name="password" placeholder="XXXXXXX" value=""  type="password">
              </div>
              <label for="password" generated="true" class="error"></label>
              <br>
            </div>
            <div class="col-lg-6 no-padding" >
              <div class="input-group ">
                <span class="input-group-addon">Re-type Password</span>
                <input class="form-control"  name="password2" placeholder="XXXXXXXX" value=""  type="password">
              </div>
              <label for="password2" generated="true" class="error"></label>
              <br>
            </div>
          </div>
          <div class="box-footer">

            <button type="submit" class="btn btn-primary" style="width: 100%;">Perbaruhi</button>
          </div>
        </div>
      </form>
    </section>

  </div>
</section>
<?php
require_once(APPPATH.'/views/fragment/admin/footer.fragment.php');
?>   