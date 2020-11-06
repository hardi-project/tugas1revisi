<?PHP
	$this->load->view('header_v');
?>

<div class="container">





	<?PHP
		if($this->uri->segment(3) == 'error_password')
		{
	?>

	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Password salah
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
	?>





	<div class="panel panel-default">
    	<div class="panel-heading">
        	<h3 class="panel-title">
            	<i class="glyphicon glyphicon-log-in"></i> Sign In
            </h3>
        </div>
        <div class="panel-body">
        	<form method="post" role="form" action="<?PHP echo site_url(); ?>sign_in/login" id="form_login">
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
        	<button type="submit" form="form_login" class="btn btn-primary btn-block">
            	<i class="glyphicon glyphicon-log-in"></i> Login
            </button>
        </div>
    </div>
</div>

<?PHP
	$this->load->view('footer_v');
?>
