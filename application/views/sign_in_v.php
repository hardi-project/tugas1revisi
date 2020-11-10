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
	<!-- <?PHP
		if($this->uri->segment(3) == 'error_password')
		{
	?>

	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Password atau username salah
	</div>

	<?PHP
		}
		else if($this->uri->segment(3) == 'error_username')
		{
	?>

		<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Username salah
	</div>

	<?PHP
		}
		else if($this->uri->segment(3) == 'registrasi_berhasil')
		{
	?>

		<div class="alert alert-success alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Registrasi Berhasil
	</div>

		<?PHP
				}
		?> -->


<?PHP
		if($this->uri->segment(3) == 'error_password')
		{
			echo "<div class='alert alert-danger alert-message'>";

			echo "Password atau username salah";
			echo "</div>";
	?>
<?PHP
		}
	?>

	
<?PHP
		if($this->uri->segment(3) == 'registrasi_berhasil')
		{
			echo "<div class='alert alert-success alert-message'>";

			echo "Resgitrasi berhasil";
			echo "</div>";
	?>
<?PHP
		}
	?>
	<div class="col-md-4 col-md-offset-4" style="margin-top:50px">
	<div class="panel panel-default">

    	<div class="panel-heading">
        	<h3 class="panel-title">
            	<i class="glyphicon glyphicon-log-in"></i> Sign In
            </h3>
        </div>
        <div class="panel-body">
        	<form method="post" role="form" action="<?PHP echo base_url(); ?>sign_in/login" id="form_login">
            	<div class="form-group">
                	<label for="username" class="visible-lg visible-md">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username">
                </div>
            	<div class="form-group">
                	<label for="password" class="visible-lg visible-md">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </form>
        </div>
        <div class="panel-footer">
        	<button type="submit" form="form_login" class="btn btn-primary ">
            	<i class="glyphicon glyphicon-log-in"></i> Login
            </button>



			<a class="btn btn-primary " href="<?php echo base_url().'sign_up/'; ?>">
			register<span class="glyphicon glyphicon-zoom"></span></a>
                           
							</div>
							
    </div>
		</div>
</div>





<script src="<?PHP echo base_url(); ?>assets/js/jquery-2.1.1.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?PHP echo base_url(); ?>assets/js/plugins/ckeditor/ckeditor.js"></script>

<script>
$(document).ready(function() {
	 $('.alert-message').delay(3000).slideUp('slow');
	});
</script>