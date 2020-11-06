<?PHP
	$this->load->view('header_v');
?>


<html lang="en">
<head>

	<link rel="stylesheet" href="video-js.css">
	<script src="video.js"></script>

  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
  <script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'; ?>"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'; ?>"></script>
</head>



					<a href="<?php echo base_url().'vid/insert_video'; ?>"></a>



          <?php

          foreach($video as $video){
            ?>

				<video src="<?php echo base_url().'/assets/upload/'.$video->videoo;?>" <video width="480px" height="420px" controls></video>
				<h2><?php echo $video->nama_ustad ?></h4>
				<h2><?php echo $video->judul_ceramah ?></h4>



                <?php } ?>



                <!-- end looping -->
              </div>

        <script type="text/javascript"> $('.alert-message').alert().delay(3000).slideUp('slow');
        </script>

				<?PHP
			 if($this->session->userdata('status') == 'admin')
			 {
			 ?>











			 <div class="pull-right">
			 <button class="btn btn-primary btn-sm add_video" title="Tambah" data-toggle="modal" data-target="#modal_tambah_video">
			 		<i class="glyphicon glyphicon-plus"></i> Tambah video
			 </button>
			 <button class="btn btn-danger btn-sm delete_all" title="Hapus Semua" data-toggle="modal" data-target="#modal_konfirmasi">
			 		<i class="glyphicon glyphicon-trash"></i> Hapus Semua
			 </button>
			 </div>
			 <?PHP
			 }
			 ?>
			 <br />



</div>

<div class="modal fade" id="modal_tambah_video">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Tambah ceramah</h4>
            </div>
            <div class="modal-body">
            	<form method="post" enctype="multipart/form-data" id="form_tambah_video">
                	<div class="form-group">
                    	<label>Nama Ustad</label>
                        <input type="text" class="form-control" name="nama_ustad" id="nama_ustad" placeholder="Nama Ustad" required>
                    </div>
                    <div class="form-group">
                    	<label>Judul ceramah</label>
                        <input type="text" class="form-control" name="judul_ceramah" id="judul_ceramah" placeholder="Judul Ceramah" required>
                    </div>
                    <div class="form-group">
                        <label>Video</label>
                        <input name="videoo" type="file" class="form-control" id="videoo" placeholder="Video" required>
                    </div>
                </form>
            </div>
						<div class="modal-footer">
							<button class="btn btn-primary btn-sm" type="submit" form="form_tambah_video" id="save_video">
									Simpan
								</button>
						<button class="btn btn-primary btn-sm" type="submit" form="form_tambah_video" id="update_video">
									Perbaharui
								</button>
							<button class="btn btn-default btn-sm" data-dismiss="modal">
									Batal
								</button>
						</div>
						</div>
						</div>
						</div>


						<div class="modal fade" id="modal_konfirmasi">
						<div class="modal-dialog">
						<div class="modal-content">
						<div class="modal-header">
							<button class="close" data-dismiss="modal">
									&times;
								</button>
							<h4 class="modal-title">Konfirmasi</h4>
						</div>
						<div class="modal-body">
							<p id="confirm_str">Apakah Anda yakin akan menghapus data ?</p>
						</div>
						<div class="modal-footer">
							<button class="btn btn-primary btn-sm" id="delete_all">
									Ok
								</button>
						<button class="btn btn-primary btn-sm" id="delete">
									Ok
								</button>
							<button class="btn btn-default btn-sm" data-dismiss="modal">
									Batal
								</button>
						</div>
						</div>
						</div>
						</div>
</div>



      </html>
<?PHP
	$this->load->view('footer_v');
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.add_video').click(function() {
			$('#nama_ustad').val('');
			$('#judul_ceramah').val('');
			$('#videoo').val('');

			$('#save_video').show();
			$('#update_video').hide();

			$('#form_tambah_video').attr('action', "<?PHP echo site_url(). 'vid/insert_video_act';?>";
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

		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');

			$('#delete').hide();
			$('#delete_all').show();
		});

		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>video/delete_all';
		});

		$('.table').dataTable();
	});
</script>
