<html>
<body>
		<div class="well well-md">
        	<div class="container">
                <p>&copy; 2020</p>

                <address>
                    <p>
                        <strong>
                            <i class="glyphicon glyphicon-map-marker"></i> Alamat
														<img src="<?PHP echo base_url(); ?>assets/img/logo_rumah.jpg" width="40" height="40">
												</strong>
                        BSI Kampus E Jl. Cut Mutia.
                    </p>
                    <p>
                        <strong>
                            <i class="glyphicon glyphicon-phone-alt"></i> Telepon
														<img src="<?PHP echo base_url(); ?>assets/img/logo_wa.jpg" width="40" height="40">
												</strong>
                        +62 895 7042 87143
                    </p>
										<p>
                        <strong>
                             Instagram
														<img src="<?PHP echo base_url(); ?>assets/img/logo_instagram.jpg" width="40" height="40">
												</strong>
                        hardi10.rf
                    </p>
                </address>
								<?PHP
 			 			 if($this->session->userdata('status') == 'pengguna')
 			 			 {
 			 			 ?>
								<div class="center">
				 			 <!-- <button class="btn btn-primary btn-sm kritik" title="Tambah" data-toggle="modal" data-target="#modal_tambah">
				 			 		<i class="glyphicon glyphicon-plus"></i> Kritik & Saran
				 			 </button> -->
							 <div class="modal fade" id="modal_tambah">
							 	<div class="modal-dialog">
							     	<div class="modal-content">
							         	<div class="modal-header">
							             	<button class="close" data-dismiss="modal">
							                 	&times;
							                 </button>

							             </div>
							             <div class="modal-body">
							             	<form method="post" enctype="multipart/form-data" id="form_tambah">
							                 	<div class="form-group">
							                     	<label>Kritik & Saran</label>
							                         <input type="textarea" class="form-control" name="nama_ustad" id="nama_ustad" placeholder="Kritik & Saran" required>
							                     </div>

							                 </form>
							             </div>
							 						<div class="modal-footer">
							 							<button class="btn btn-primary btn-sm" type="submit" form="form_tambah" id="save_video">
							 									Simpan
							 								</button>

							 							<button class="btn btn-default btn-sm" data-dismiss="modal">
							 									Batal
							 								</button>
							 						</div>
							 						</div>
							 						</div>
							 						</div>

							 <script type="text/javascript">
							 	$(document).ready(function() {
							 		$('.kritik').click(function() {
							 			$('#nama_ustad').val('');

							 			$('#save_video').show();

							 			$('#form_tambah').attr('action', "<?PHP echo site_url(). 'vid/insert_video_act';?>");
							 		});

							 		$('.add_krl').click(function() {
							 			$('#id_krl').val('');
							 			$('#nama').val('');
							 			$('#stasiun_awal').val('');
							 			$('#stasiun_akhir').val('');

							 			$('#id_krl').attr('disabled', false);

							 			$('#save_krl').show();
							 			$('#update_krl').hide();

							 			$('#form_tambah_krl').attr('action', '<?PHP echo site_url(); ?>video/insert_krl');
							 		});
							 		$('.table').dataTable();
							 	});
							 </script>
<?php }?>
							 <?PHP
			 			 if($this->session->userdata('status') == 'admin')
			 			 {
			 			 ?>
				 			 <button class="btn btn-primary btn-sm lihat"  data-toggle="modal" data-target="#modal_konfirmasi">
				 			 	Lihat
				 			 </button>

							 <div class="modal fade" id="modal_konfirmasi">
							 	<div class="modal-dialog">
							     	<div class="modal-content">
							         	<div class="modal-header">
							             	<button class="close" data-dismiss="modal">
							                 	&times;
							                 </button>
<h4 class="modal-title">lihat kritik&saran</h4>
							             </div>
							             <div class="modal-body">
							             <p>3. lembaga penyalur masih sedikit, semoga kedepan bisa lebih banyak<br>
														  2. tesss<br>
															1. aaa
													</p>
							             </div>
							 						<div class="modal-footer">
													</div>
													<button class="btn btn-default btn-sm" data-dismiss="modal">
															OK
														</button>

							 						</div>
							 						</div>
							 						</div>
							 						</div>

													<script type="text/javascript">
														$(document).ready(function() {
															$('.lihat').click(function() {
															});
															$('.table').dataTable();
														});
														</script>
<?php } ?>
				 			 </div>
            </div>
        </div>
    </body>
</html>

<!-- JS -->
<script src="<?PHP echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/plugins/ckeditor/ckeditor.js"></script>
