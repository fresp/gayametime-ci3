  <!-- /.content -->
</div>

<!-- /.content-wrapper -->
<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<b>Version 1.0</b> 
	</div>
	<strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
	reserved.
</footer>


</div>
<!-- ./wrapper -->


<script type="text/javascript" src="<?=  base_url('assets/plugin/input-mask/jquery.inputmask.bundle.js') ?>"></script>
<script type="text/javascript">

	$('.rupiah').inputmask("numeric", {
		radixPoint: ",",
		groupSeparator: ".",
		digits: 2,
		autoGroup: true,
		prefix: '',
		rightAlign: false,
		oncleared: function () { self.Value(''); }
	});

</script>
<script type="text/javascript">

	Dropzone.autoDiscover = false;
	var foto_upload= new Dropzone(".dropzone",{
		url: "<?= base_url('admin/'.$Nav->activeMenu.'/proses_upload') ?>",
		maxFiles: 1,
		maxfilesexceeded: function(file) {
			this.removeFile(file);
		},
		method:"post",
		acceptedFiles:"image/*",
		paramName:"userfile",
		dictInvalidFileType:"Type file ini tidak dizinkan",
		addRemoveLinks:true

	});

	<?php
	if($this->uri->segment(2)!="sertifikat"){
		?>
		foto_upload.on("thumbnail", function (file) {

			if (file.height != <?= $this->uri->segment(2)=="profile" ? 300: 300 ?> && file.width != <?= $this->uri->segment(2)=="profile" ? 300: 500 ?>) {
				alert("Sorry size gambarnya harus  <?= $this->uri->segment(2)=="profile" ? 300: 500 ?>px X <?= $this->uri->segment(2)=="profile" ? 300: 300?>px");
				this.removeFile(file);
			}



		});	
	<?php
	}
	?>
	//Event ketika Memulai mengupload
	foto_upload.on("sending",function(a,b,c){
		
		a.token=Math.random();
		var token=a.token;
		$('#token').val(token);
		c.append("token_foto",a.token);	
	});
	

	//Event ketika foto dihapus
	foto_upload.on("removedfile",function(a){
		var token=a.token;
		$.ajax({
			type:"post",
			data:{token:token},
			url:"<?php echo base_url('admin/'.$Nav->activeMenu.'/remove_foto') ?>",
			cache:false,
			dataType: 'json',

			success: function(){	
				$('#token').val('<?php
					if($this->uri->segment(2)=="layanan"   AND $this->uri->segment(3)=="input"){
						echo "";
					}elseif($this->uri->segment(2)=="layanan"  AND $this->uri->segment(3)=="edit"){
						echo $layanan->image ;
					}elseif($this->uri->segment(2)=="sertifikat" AND $this->uri->segment(3)=="input"){
						echo "";
					}elseif($this->uri->segment(2)=="sertifikat" AND $this->uri->segment(3)=="edit"){
						echo $sertifikat->data ;
					}else{
						echo $data->banner;
					}

					?>');
				console.log("Foto terhapus");
			},
			error: function(){
				$('#token').val('<?php
					if($this->uri->segment(2)=="layanan"   AND $this->uri->segment(3)=="input"){
						echo "";
					}elseif($this->uri->segment(2)=="layanan"  AND $this->uri->segment(3)=="edit"){
						echo $layanan->image ;
					}elseif($this->uri->segment(2)=="sertifikat" AND $this->uri->segment(3)=="input"){
						echo "";
					}elseif($this->uri->segment(2)=="sertifikat" AND $this->uri->segment(3)=="edit"){
						echo $sertifikat->data ;
					}else{
						echo $data->banner;
					}

					?>');
				console.log(token);

			}
		});
	});


</script>

<!-- DataTables -->
<script src="<?=  base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?=  base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>"></script>

<!-- jQuery UI 1.11.4 -->
<script src="<?=  base_url('assets/bower_components/jquery-ui/jquery-ui.min.js') ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
	$.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=  base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
<!-- Morris.js') ?> charts -->
<script src="<?=  base_url('assets/bower_components/raphael/raphael.min.js') ?>"></script>
<script src="<?=  base_url('assets/bower_components/morris/morris.min.js') ?>"></script>

<!-- Sparkline -->
<script src="<?=  base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js') ?>"></script>
<!-- jvectormap -->
<script src="<?=  base_url('assets/plugin/jvectormap/jquery-jvectormap-1.2.2.min.js') ?>"></script>
<script src="<?=  base_url('assets/plugin/jvectormap/jquery-jvectormap-world-mill-en.js') ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?=  base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js') ?>"></script>
<!-- daterangepicker -->
<script src="<?=  base_url('assets/bower_components/moment/min/moment.min.js') ?>"></script>
<script src="<?=  base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
<!-- datepicker -->
<script src="<?=  base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') ?>"></script>
<!-- CK Editor -->
<script src="<?=  base_url('assets/bower_components/ckeditor/ckeditor.js') ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script>
	$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
})
	$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('deskripsi')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
})
</script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=  base_url('assets/plugin/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') ?>"></script>
<!-- Slimscroll -->
<script src="<?=  base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') ?>"></script>
<!-- FastClick -->
<script src="<?=  base_url('assets/bower_components/fastclick/lib/fastclick.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?=  base_url('assets/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=  base_url('assets/dist/js/pages/dashboard.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=  base_url('assets/dist/js/demo.js') ?>"></script>
<script type="text/javascript">
	var table;

	$(document).ready(function() {

    //datatables
    table = $('#table').DataTable({ 

        "processing": true, //Feature control the processing indicator.
       "serverSide": true, //Feature control DataTables' servermside processing mode.
        //"order": [], //Initial no order.
        "iDisplayLength" : 10,

        // Load data for the table's content from an Ajax source
        "ajax": {
        	"url": "<?php echo site_url('/admin/'.$Nav->activeMenu.'/ajax_list')?>",
        	"type": "POST",
        	"dataType": "json",
        	"dataSrc": function (jsonData) {


        		return jsonData.data;
        	}
        },

        //Set column definition initialisation properties.
        "columnDefs": [
        { 	
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],

    });

});
</script>
</body>
</html>
