<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - Epengadaan</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="<?= base_url('assets/plugin/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- jQuery 2.1.3 -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- Theme style -->
    <link href="<?= base_url('assets/dist/css/AdminLTE.min.css') ?>" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?= base_url('assets/plugin/iCheck/square/blue.css') ?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>
    <link href="<?= base_url('assets/css/cheers-alert.min.css') ?>" rel="stylesheet" media="screen">
    <script type="text/javascript" src="<?= base_url('assets/js/cheers-alert.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('assets/js/validate.js') ?>"></script>
    <style type="text/css">
    label{
        color: #d22929;
    }
</style>
</head>
<body class="login-page">
    <?php
    if($this->session->userdata('notice')=="correct"){
        ?>
        <script type='text/javascript'>
            $(document).ready( function () {
                cheers.success({
                    title: 'Berhasil Masuk',
                    message: 'Selamat Datang <?= $this->session->userdata('fullname')?>',
                    alert: $('select[name="alert"]').val(),
                });
            }); 
        </script>
        <?php
        $this->session->unset_userdata('notice');
    }elseif($this->session->userdata('notice')=="denied"){
        ?>
        <script type='text/javascript'>
            $(document).ready( function () {
                cheers.success({
                    title: 'Akses Gagal',
                    message: 'Silahkan Login',
                    alert: $('select[name="alert"]').val(),
                });
            }); 
        </script>
        <?php
        $this->session->unset_userdata('notice');
    }
    elseif($this->session->userdata('notice')=="logout"){
        ?>
        <script type='text/javascript'>
            $(document).ready( function () {
                cheers.success({
                    title: 'Berhasil Keluar',
                    message: 'Silahkan Login Kembali',
                    alert: $('select[name="alert"]').val(),
                });
            }); 
        </script>
        <?php
        $this->session->unset_userdata('notice');
    }
    ?>
<section class="content">
    <div class="login-box">
        <form action="<?= base_url('admin/login'); ?>" id="frm-login" method="post">
            <div class="login-box-body">

                <div class="form-group has-feedback">
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username"/>
                    <span class="fa fa-user form-control-feedback"></span>
                    <label for="username" generated="true" class="error"></label>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                    <span class="fa fa-lock form-control-feedback"></span>
                    <label for="password" generated="true" class="error"></label>
                </div>
                <div class="form-group has-feedback">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
                </div>
            </div><!-- /.login-box-body -->
        </form>
    </div><!-- /.login-box -->
</section>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?= base_url('assets/plugin/iCheck/icheck.min.js') ?>" type="text/javascript"></script>

</body>
</html>
