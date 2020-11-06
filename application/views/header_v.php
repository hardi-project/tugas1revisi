<!DOCTYPE html>
<html>
	<head>
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?PHP echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?PHP echo base_url(); ?>assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">
			.navbar, .jumbotron, .well
			{
				margin: 0;
			}
        </style>
    </head>

    <body>


        <div class="jumbotron">
        	<div class="container">
				<h1>		<img src="<?PHP echo base_url(); ?>assets/img/images.png"> Nyumbang.com



            </div>
        </div>
				<nav class="navbar navbar-inverse" role="navigation">
							<div class="container">

										<div class="collapse navbar-collapse" id="menu">
											<ul class="nav navbar-nav">
													<li <?PHP if($this->uri->segment(1) == '') echo ' class="active"'; ?>>
															<a href="<?PHP echo site_url(); ?>beranda">
																Beranda
																</a>
														</li>
														<!-- <li <?PHP if($this->uri->segment(1) == 'vid') echo ' class="active"'; ?>>
															<a href="<?PHP echo site_url(); ?>vid">
																Cerpen Sedekah
																</a>
														</li>


		<li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#"	>Ziswaf
      <span class="caret"></span></a>
      <ul class="dropdown-menu">



														<li <?PHP if($this->uri->segment(1) == 'zakat') echo ' class="active"'; ?>>
															<a href="<?PHP echo site_url(); ?>zakat">
																Zakat Fitrah
																</a>
														</li>

														<li <?PHP if($this->uri->segment(1) == 'zakat_2') echo ' class="active"'; ?>>
															<a href="<?PHP echo site_url(); ?>zakat_2">
																Zakat Mal
																</a>
														</li>

													<li <?PHP if($this->uri->segment(1) == 'infaq') echo ' class="active"'; ?>>
														<a href="<?PHP echo site_url(); ?>infaq">
															Infaq
															</a>
													</li>

												<li <?PHP if($this->uri->segment(1) == 'sedekah') echo ' class="active"'; ?>>
													<a href="<?PHP echo site_url(); ?>sedekah">
														Sodaqoh
														</a>
												</li> -->

</li>
</ul>

												</ul>
											<ul class="nav navbar-nav navbar-right">

								<?PHP
															if($this->session->userdata('username') == "")
									{
								?>

														<li>
															<a href="<?php echo site_url();?>sign_in/login">
																	<i class="glyphicon glyphicon-log-in"></i> Sign In
																</a>
														</li>
														<li>
															<a href="<?PHP echo site_url();?>sign_up">
																	<i class="glyphicon glyphicon-user"></i> Sign Up
																</a>
														</li>
														<?PHP
									}
									else
									{
								?>

														<li>
															<a href="#">
																	<i class="glyphicon glyphicon-user"></i> <?PHP echo $this->session->userdata('username');?>
																</a>
														</li>
														<li>
															<a href="<?PHP echo site_url(); ?>sign_in/logout">
																<i class="glyphicon glyphicon-log-out"></i> Sign Out
																</a>
														</li>

														<?PHP
															}
								?>
												</ul>
										</div>
								</div>
						</nav>
