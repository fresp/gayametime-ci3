<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administrator | <?= $Nav->name ?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?=  base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=  base_url('assets/bower_components/font-awesome/css/font-awesome.min.css') ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?=  base_url('assets/bower_components/Ionicons/css/ionicons.min.css') ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=  base_url('assets/dist/css/AdminLTE.min.css') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="<?=  base_url('assets/dist/css/skins/_all-skins.min.css') ?>">
  	<!-- Morris chart -->
  	<link rel="stylesheet" href="<?=  base_url('assets/bower_components/morris/morris.css') ?>">
  	<!-- jvectormap -->
  	<link rel="stylesheet" href="<?=  base_url('assets/bower_components/jvectormap/jquery-jvectormap.css') ?>">
  	<!-- Datatable -->
  	<link rel="stylesheet" href="<?=  base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
  	<!-- Date Picker -->
  	<link rel="stylesheet" href="<?=  base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') ?>">
  	<!-- Daterange picker -->
  	<link rel="stylesheet" href="<?=  base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css') ?>">
  	<!-- bootstrap wysihtml5 - text editor -->
  	<link rel="stylesheet" href="<?=  base_url('assets/plugin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') ?>">
  	<!-- jQuery 3 -->
  	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugin/dropzone/dropzone.min.css') ?>">
  	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugin/dropzone/basic.min.css') ?>">
  	<script type="text/javascript" src="<?= base_url('assets/plugin/dropzone/dropzone.min.js') ?>"></script>

  	<script src="<?=  base_url('assets/bower_components/jquery/dist/jquery.min.js') ?>"></script>

  	<script type="text/javascript" src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>
  	<script type="text/javascript" src="<?= base_url('assets/js/validate.js') ?>"></script>
  	<link href="<?= base_url('assets/css/cheers-alert.min.css') ?>" rel="stylesheet" media="screen">
  	<script type="text/javascript" src="<?= base_url('assets/js/cheers-alert.min.js') ?>"></script>

  	<!-- HTML5 Shim and Respond.js') ?> IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js') ?> doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') ?>"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') ?>"></script>
<![endif]-->
<style type="text/css">

body{
	background-color: #E8E9EC;
}
.dz-max-files-reached {
          pointer-events: none;
          cursor: default;
}
.dz-remove { pointer-events: all; cursor: default; }
.dropzone {
	margin-top: 100px;
	border: 2px dashed #0087F7;

}
.error{
	color: #e31c1c;
}

</style>
<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<?php
	if($this->session->userdata('notice')=="successgeneral"){
		?>
		<script type='text/javascript'>
			$(document).ready( function () {
				cheers.success({
					title: 'Berhasil ',
					message: 'Update <?= $Nav->name?> ',
					alert: $('select[name="alert"]').val(),
				});
			}); 
		</script>
		<?php
		$this->session->unset_userdata('notice');
	}elseif($this->session->userdata('notice')=="gagaltestimoni"){
		?>
		<script type='text/javascript'>
			$(document).ready( function () {
				cheers.success({
					title: 'Gagal ',
					message: 'Membuat <?= $Nav->name?> ',
					alert: $('select[name="alert"]').val(),
				});
			}); 
		</script>
		<?php
		$this->session->unset_userdata('notice');
	}elseif($this->session->userdata('notice')=="successcreate"){
		?>
		<script type='text/javascript'>
			$(document).ready( function () {
				cheers.success({
					title: 'Berhasil ',
					message: 'Menambahkan <?= $Nav->name?> ',
					alert: $('select[name="alert"]').val(),
				});
			}); 
		</script>
		<?php
		$this->session->unset_userdata('notice');
	}elseif($this->session->userdata('notice')=="successupdate"){
		?>
		<script type='text/javascript'>
			$(document).ready( function () {
				cheers.success({
					title: 'Berhasil ',
					message: 'Mengupdate <?= $Nav->name?> ',
					alert: $('select[name="alert"]').val(),
				});
			}); 
		</script>
		<?php
		$this->session->unset_userdata('notice');
	}elseif($this->session->userdata('notice')=="gagal"){
		?>
		<script type='text/javascript'>
			$(document).ready( function () {
				cheers.success({
					title: 'Akses Gagal ',
					message: 'Silahkan ulangi <?= $Nav->name?> ',
					alert: $('select[name="alert"]').val(),
				});
			}); 
		</script>
		<?php
		$this->session->unset_userdata('notice');
	}
	elseif($this->session->userdata('notice')=="successtestimoni"){
		?>
		<script type='text/javascript'>
			$(document).ready( function () {
				cheers.success({
					title: 'Berhasil ',
					message: 'Membuat <?= $Nav->name?> ',
					alert: $('select[name="alert"]').val(),
				});
			}); 
		</script>
		<?php
		$this->session->unset_userdata('notice');
	}elseif($this->session->userdata('notice')=="delete"){
		?>
		<script type='text/javascript'>
			$(document).ready( function () {
				cheers.success({
					title: 'Berhasil ',
					message: 'Menghapus <?= $Nav->name?> ',
					alert: $('select[name="alert"]').val(),
				});
			}); 
		</script>
		<?php
		$this->session->unset_userdata('notice');
	}elseif($this->session->userdata('notice')=="suksesstar"){
		?>
		<script type='text/javascript'>
			$(document).ready( function () {
				cheers.success({
					title: 'Berhasil ',
					message: 'Merekomendasikan',
					alert: $('select[name="alert"]').val(),
				});
			}); 
		</script>
		<?php
		$this->session->unset_userdata('notice');
	}elseif($this->session->userdata('notice')=="suksesunstar"){
		?>
		<script type='text/javascript'>
			$(document).ready( function () {
				cheers.success({
					title: 'Berhasil ',
					message: 'Menbatalkan Rekomendasi ',
					alert: $('select[name="alert"]').val(),
				});
			}); 
		</script>
		<?php
		$this->session->unset_userdata('notice');
	}elseif($this->session->userdata('notice')=="limitstar"){
		?>
		<script type='text/javascript'>
			$(document).ready( function () {
				cheers.info({
					title: 'Gagal ',
					message: 'Limit 6 Rekomendasi  ',
					alert: $('select[name="alert"]').val(),
				});
			}); 
		</script>
		<?php
		$this->session->unset_userdata('notice');
	}
	?>
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="<?= site_url('admin') ?>" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini fa fa-dashboard" style="padding: 15px;"></span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Administrator</b></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>

				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						

						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#">

								<span class=""><?= $this->session->userdata('fullname'); ?></span>
							</a>

						</li>
						<!-- Control Sidebar Toggle Button -->
						<li>
							<a href="<?= site_url('admin/logout') ?>" ><i class="fa fa-sign-out"></i> <span class="">Keluar</span></a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?=  base_url('assets/dist/img/user2-160x160.jpg') ?>" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p><?= $this->session->userdata('fullname'); ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>

				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu" data-widget="tree">
					<li class="header">MAIN NAVIGATION</li>
					<li class="<?= $Nav->activeMenu == "layanan" ? "active" : "" ?>">
						<a href="<?php echo base_url('admin/layanan'); ?>"><i class="fa fa-tasks"></i> <span> Layanan</span></a>
					</li>
					
					<li class="<?= $Nav->activeMenu == "profile" ? "active" : "" ?>">
						<a href="<?php echo base_url('admin/profile'); ?>"><i class="fa  fa-building"></i> <span> Profil</span></a>
					</li>
					<li class="<?= $Nav->activeMenu == "sertifikat" ? "active" : "" ?>">
						<a href="<?php echo base_url('admin/sertifikat'); ?>"><i class="fa fa-certificate"></i> <span> Sertifikat</span></a>
					</li>
					<li class="<?= $Nav->activeMenu == "ketentuan" ? "active" : "" ?>">
						<a href="<?php echo base_url('admin/ketentuan'); ?>"><i class="fa fa-book"></i> <span> Ketentuan</span></a>
					</li>
					<li class="<?= $Nav->activeMenu == "testimoni" ? "active" : "" ?>">
						<a href="<?php echo base_url('admin/testimoni'); ?>"><i class="fa fa-quote-right"></i> <span> Testimoni</span></a>
					</li>
					<li class="<?= $Nav->activeMenu == "user" ? "active" : "" ?>">
						<a href="<?php echo base_url('admin/user'); ?>"><i class="fa fa-users"></i> <span> User</span></a>
					</li>
					<li class="<?= $Nav->activeMenu == "message" ? "active" : "" ?>">
						<a href="<?php echo base_url('admin/message'); ?>"><i class="fa fa-envelope"></i> <span> Pesan</span></a>
					</li>
					<li class="<?= $Nav->activeMenu == "general" ? "active" : "" ?>">
						<a href="<?php echo base_url('admin/general'); ?>"><i class="fa fa-gear"></i> <span> General Data</span></a>
					</li>
					<li >
						<a href="<?= site_url('admin/logout') ?>"><i class="ace-icon fa fa-power-off" id="logout" onclick="return confirm('Apakah Anda yakin?')"></i> <span> Sign Out</span></a>
					</li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					<?= $Nav->name ?>
					<small><?= $Nav->deskripsi ?></small>
				</h1>
				<ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Admin</a></li>
					<li class="active"><?= $Nav->name ?></li>
				</ol>
			</section>