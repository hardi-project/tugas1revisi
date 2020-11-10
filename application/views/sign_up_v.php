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
<html>

<div class="container">

	<?PHP
		if($this->uri->segment(3) == 'error_password')
		{
	?>

	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Password dan konformasi password tidak sama
	</div>

	<?PHP
		}
		else if($this->uri->segment(3) == 'error_username')
		{
	?>

    <div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Username sudah digunakan
	</div>

    <?PHP
		}
	?>

	<div class="panel panel-default">
    	<div class="panel-heading">
        	<h3 class="panel-title">
            	<i class="glyphicon glyphicon-log-in"></i> Sign In
            </h3>
        </div>
        <div class="panel-body">
        	<form method="post" role="form" action="<?PHP echo site_url(); ?>sign_up/register" id="form_sign_up">
            	<div class="form-group">
                	<label for="username" class="visible-lg visible-md">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                	<label for="password" class="visible-lg visible-md">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                	<label for="konfirmasi_password" class="visible-lg visible-md">Konfirmasi Password</label>
                    <input type="password" class="form-control" name="konfirmasi_password" placeholder="Konfirmasi Password">
                </div>
								<div class="form-group">
	                	<label for="email" class="visible-lg visible-md">E-mail</label>
	                    <input type="text" class="form-control" name="email" placeholder="Email">
	                </div>
									<div class="form-group">
		                	<label for="telp" class="visible-lg visible-md">NO Telp</label>
		                    <input type="text" class="form-control" name="telp" placeholder="NO Telp">
		                </div>
            </form>
        </div>
        <div class="panel-footer">
        	<button type="submit" form="form_sign_up" class="btn btn-danger btn-block">
            	Sign Up
            </button>
        </div>
    </div>
</div>

<!-- <?PHP
	$this->load->view('footer_v');
?> -->

<script src="<?PHP echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/plugins/ckeditor/ckeditor.js"></script>
