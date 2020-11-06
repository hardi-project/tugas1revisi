<?PHP
	$this->load->view('header_v');
?>

<div class="container">



	<div class="panel panel-default">

    	<div class="panel-heading">
        	<div class="panel-heading">
            	<h3>Zakat Mal</h3>
							<?PHP
								if($this->uri->segment(2) == 'zakat_mal')
								{
							?>

							<div class="alert alert-success alert-dismissable">
								<button type="button" class="close" data-dismiss="message" aria-hidden="true">&times;</button>
								<img src="<?PHP echo base_url(); ?>assets/img/tq.jpg"  width="72" height="96"><h4>Syukron, semoga Zakat anda diterima disisi Allah </h4>
							</div>

							<?PHP
								}
							?>


            </div>
            <div class="clearfix"></div>
        </div>
				<?PHP
			if($this->session->userdata('status') == 'pengguna')
			{
	?>
<form action=" <?php  echo base_url().'zakat_2/insert_zakat_m_act' ?>" method="post" enctype="multipart/form-data">



<div class="form-group">
<label>.</label>
<input type="hidden" name="kd_zakat_m">

</div>

<div class="form-group">
<label>Nama Muzaki</label><br>
<input type="text" name="nama_muzaki" class="form-control">
</div>

<div class="form-group">
<label>Penghasilan</label><br>

      <input type="radio" name="penghasilan" value="dibawah 50jt"> dibawah 50jt<br>
      <input type="radio" name="penghasilan" value="50-70jt"> 50-70jt<br>
      <input type="radio" name="penghasilan" value="70-90jt"> 70-90jt<br>
      <input type="radio" name="penghasilan" value="di atas 100jt"> di Atas 100jt


</div>

<div class="form-group">
<label>Dikeluarkan</label><br>
<input type="radio" name="dikeluarkan" value="1jt"> 1jt<br>
<input type="radio" name="dikeluarkan" value="2jt"> 2jt<br>
<input type="radio" name="dikeluarkan" value="3jt"> 3jt<br>
<input type="radio" name="dikeluarkan" value="4jt"> 4jt		<br>

</div>


<div class="form-group">
<label>Lembaga</label><br>
<input type="radio" name="lembaga" value="Dompet Dhuafa"> Dompet Dhuafa<br>
<input type="radio" name="lembaga" value="BAZNAS"> BAZNAS<br>
<input type="radio" name="lembaga" value="Rumah Yatim"> Rumah Yatim<br>
<input type="radio" name="lembaga" value="Aksi Cepat Tanggap"> Aksi Cepat Tanggap
</div>

<div class="form-group">
<label>Bank SYARIAH</label><br>
<input type="radio" name="bank" value="BCA SYARIAH"> BCA SYARIAH<br>
<input type="radio" name="bank" value="BNI SYARIAH"> BNI SYARIAH<br>
<input type="radio" name="bank" value="BRI SYARIAH"> BRI SYARIAH<br>
<input type="radio" name="bank" value="MANDIRI SYARIAH"> MANDIRI SYARIAH
</div>

<div class="form-group">
    <label>bukti TF</label>
    <input name="gambar" type="file" placeholder="gambar">
</div>

<div class="form-group">
<input type="submit" value="submit" class="btn btnprimary">
</div>

</form>

<br>
<br>
<div class="left">
<button class="btn btn-primary btn-sm add_video" title="Tambah" data-toggle="modal" data-target="#modal_tambah_video">
	 Lihat Nomor Rekening & ketentuan zakat mal
</button>
</div>
<div class="modal fade" id="modal_tambah_video">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">lihat nomor rekening & ketentuan</h4>
            </div>
            <div class="modal-body">
<img src="<?PHP echo base_url(); ?>assets/img/BCA.jpg"  width="72" height="96">170932709183<br>
<img src="<?PHP echo base_url(); ?>assets/img/BNI.jpg"  width="72" height="96">812378172387<br>
<img src="<?PHP echo base_url(); ?>assets/img/BRI.jpg"  width="72" height="96">8127817282787<br>
<img src="<?PHP echo base_url(); ?>assets/img/mandiri.jpg"  width="72" height="96">183846176237
<p> zakat mal adalah zakat dari penghasilan selama 1 tahun di bagi 2,5%<br>
	 dibawah 50 = 1jt<br>
	 50jt-70jt = 2jt<br>
	 70jt-90jt = 3jt <br>
	 diatas 100jt = 4jt
 </p>
            </div>
						<div class="modal-footer">

							<button class="btn btn-default btn-sm" data-dismiss="modal">
									OK
								</button>
						</div>
						</div>
						</div>
	</div>
						<script type="text/javascript">
							$(document).ready(function() {
								$('.add_video').click(function() {
								});
								$('.table').dataTable();
							});
							</script>


<?php } ?>

<?PHP
if($this->session->userdata('status') == 'admin')
{
?>
<br>
<a class="btn btn-warning btn-md" href="<?php echo base_url().'zakat_2/salurkan_mal'?>">
	<span  class="glyphicon glyphicon-print"></span>
	Salurkan ke BAZNAS</a>
	<a class="btn btn-warning btn-md" href="<?php echo base_url().'zakat_2/salurkan_mal1'?>">
		<span  class="glyphicon glyphicon-print"></span>
		Salurkan ke Dompet Dhuafa</a>
		<a class="btn btn-warning btn-md" href="<?php echo base_url().'zakat_2/salurkan_mal2'?>">
			<span  class="glyphicon glyphicon-print"></span>
			Salurkan ke Rumah Yatim</a>
			<a class="btn btn-warning btn-md" href="<?php echo base_url().'zakat_2/salurkan_mal3'?>">
				<span  class="glyphicon glyphicon-print"></span>
				Salurkan ke Aksi Cepat Tanggap</a>
	<br>
	<br>

				<a href="<?php echo base_url().'zakat_2/insert_zakat_2'; ?>"></a>
											<table class="table table-responsive">
												<table class="table table-bordered table-striped table-hover" id="table-datatable">
														<thead>
																<tr>
																	<tr>
																		<tr>
																		<th>No</th>
																		<th>Nama Muzaki</th>
																		<th>Penghasilan</th>
																		<th>Dikeluarkan</th>
																		<th>Lembaga</th>
																		<th>BANK</th>
																		<th>Bukti TF</th>
																</tr>
														</thead>
														<tbody>

															<?php
															$no = 1;
															foreach($zakat_mal as $b){
																?>
															<tr>
																<td><?php echo $no++; ?></td>
																<td><?PHP echo $b->nama_muzaki ?></td>
																<td><?php echo $b->penghasilan ?></td>
																<td><?php echo $b->dikeluarkan ?></td>
																<td><?php echo $b->lembaga ?></td>
																<td><?php echo $b->bank ?></td>
																<td><img src="<?php echo base_url().'/assets/img/'.$b->gambar;?>" width="60" height="80" ></td>
															</tr>
														<?php } ?>

														</tbody>
													</table>
													</table>
				</div>



		</div>
		</div>

		</div>

<?php } ?>

		<?PHP
		$this->load->view('footer_v');
		?>
