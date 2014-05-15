<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$cis_number = $_POST['cis_number'];
		$password = $_POST['password'];
		$return = $controller->doLogin($cis_number,$password);
	}
?>
<div class="container">
	<div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
		<?php if(!empty($return)){include("error/".$return.".htm");}?>
		<div class="panel panel-info" >
			<div class="panel-heading">
				<div class="panel-title">Login</div>
			</div>     
			<div style="padding-top:30px" class="panel-body" >
				<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
				<form id="loginform" action="?site=login" method="post" class="form-horizontal" role="form">
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input id="login-password" type="password" class="form-control" name="passwort" placeholder="Passwort">
					</div>
					<div style="margin-top:10px" class="form-group">
						<div class="col-sm-12 controls">
						  <input id="btn-login" type="submit" class="btn btn-success" value="Login"></input>
						</div>
					</div>
				</form>
			</div>
		</div>  
	</div>
</div>
