<?PHP
	$this->load->view('header_v');
?>

<div class="container">



	<div class="panel panel-default">

    	<div class="panel-heading">
        	<div class="panel-heading">
            	<h3>Sedekah</h3>


							<?PHP
								if($this->uri->segment(2) == 'sodaqoh')
								{
							?>

							<div class="alert alert-success alert-dismissable">
								<button type="button" class="close" data-dismiss="message" aria-hidden="true">&times;</button>
							<img src="<?PHP echo base_url(); ?>assets/img/tq.jpg"  width="72" height="96"><h4>Syukron, semoga Sedekah anda diterima disisi Allah </h4> 
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
<form action=" <?php  echo base_url().'sedekah/insert_sedekah_act' ?>" method="post" enctype="multipart/form-data">



<div class="form-group">
<label>.</label>
<input type="hidden" name="kd_sodaqoh">

</div>

<div class="form-group">
<label>Nama Muzaki</label><br>
<input type="text" name="nama_muzaki" id="nama_muzaki" class="form-control">
</div>

<div class="form-group">
<label>Jumlah Sedekah</label><br>
<input type="text" name="jumlah_sedekah" id="jumlah_sedekah" class="form-control">
</div>

<div class="form-group">
<label>Lembaga</label><br>
<input type="radio" name="lembaga" id="lembaga" value="Dompet Dhuafa"> Dompet Dhuafa<br>
<input type="radio" name="lembaga" id="lembaga" value="BAZNAS"> BAZNAS<br>
<input type="radio" name="lembaga" id="lembaga" value="Rumah Yatim"> Rumah Yatim<br>
<input type="radio" name="lembaga" id="lembaga" value="Aksi Cepat Tanggap"> Aksi Cepat Tanggap
</div>

<div class="form-group">
<label>Bank SYARIAH</label><br>
<input type="radio" name="bank" id="bank" value="BCA SYARIAH"> BCA SYARIAH<br>
<input type="radio" name="bank" id="bank" value="BNI SYARIAH"> BNI SYARIAH<br>
<input type="radio" name="bank" id="bank" value="BRI SYARIAH"> BRI SYARIAH<br>
<input type="radio" name="bank" id="bank" value="MANDIRI SYARIAH"> MANDIRI SYARIAH
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
	  Lihat Nomor Rekening
</button>
</div>
<div class="modal fade" id="modal_tambah_video">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">lihat nomor rekening</h4>
            </div>
            <div class="modal-body">
							<img src="<?PHP echo base_url(); ?>assets/img/BCA.jpg"  width="72" height="96">170932709183<br>
							<img src="<?PHP echo base_url(); ?>assets/img/BNI.jpg"  width="72" height="96">812378172387<br>
							<img src="<?PHP echo base_url(); ?>assets/img/BRI.jpg"  width="72" height="96">8127817282787<br>
							<img src="<?PHP echo base_url(); ?>assets/img/mandiri.jpg"  width="72" height="96">183846176237
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
<a class="btn btn-warning btn-md" href="<?php echo base_url().'sedekah/salurkan'?>">
	<span  class="glyphicon glyphicon-print"></span>
	Salurkan ke BAZNAS</a>
	<a class="btn btn-warning btn-md" href="<?php echo base_url().'sedekah/salurkan1'?>">
		<span  class="glyphicon glyphicon-print"></span>
		Salurkan ke Dompet Dhuafa</a>
		<a class="btn btn-warning btn-md" href="<?php echo base_url().'sedekah/salurkan2'?>">
			<span  class="glyphicon glyphicon-print"></span>
			Salurkan ke Rumah Yatim</a>
			<a class="btn btn-warning btn-md" href="<?php echo base_url().'sedekah/salurkan3'?>">
				<span  class="glyphicon glyphicon-print"></span>
				Salurkan ke Aksi Cepat Tanggap</a>
	<br>
	<br>
<a href="<?php echo base_url().'sedekah/insert_sedekah'; ?>"></a>
									<table class="table table-responsive">
										<table class="table table-bordered table-striped table-hover" id="table-datatable">
												<thead>
														<tr>
															<tr>
																<tr>
																<th>No</th>
																<th>Nama Muzaki</th>
																<th>Jumlah Sedekah</th>
																<th>Lembaga</th>
                                <th>BANK SYARIAH</th>
                                <th>Bukti TF</th>
														</tr>
												</thead>
												<tbody>

													<?php
                          $no = 1;
													foreach($sodaqoh as $b){
														?>
													<tr>
														<td><?php echo $no++; ?></td>
														<td><?PHP echo $b->nama_muzaki ?></td>
														<td><?php echo $b->jumlah_sedekah ?></td>
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
