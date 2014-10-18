<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset='utf=8'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<!--referencing bootstrap css that is locally hosted-->
	{{HTML::style('css/bootstrap.min.css')}}
	<style type="text/css">
		body{
			background: url("stardust.png");
		}

		.centered-form{
			margin-top:10% ;
		}
	</style>
</head>
<body>
<div class='container'>
	<div class='row centered-form'>
		<div class='col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4'>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h1 class="panel-title">Authentication</h1>
				</div>
				<div class="panel-body">
					<form role="form">
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon input-sm"> <span class="glyphicon glyphicon-user"></span> </span>
								<input type='email' name='email' class='form-control input-sm' placeholder='Email Address'>
							</div>
							
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon input-sm"><span class="glyphicon glyphicon-lock"></span></span>
								<input type='password' name='password' class="form-control input-sm" placeholder='Password'>
							</div>
						</div>
						<div class="checkbox">
							<label>
								<input type='checkbox' name='remember' value='Remember Me'>Remember Me
							</label>
						</div>
						<input class="btn btn-primary btn-block" type='submit' value='Login'>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

{{HTML::script('js/jquery-2.1.1.min.js')}}
{{HTML::script('js/bootstrap.min.js')}}
</body>
</html>