<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == "register") {
		$return = $controller->doRegister($_SESSION['cis_number'],$_SESSION['cis_password'],$_SESSION['password'],$_POST['email']);
	}
?>
<body role="document">
	<div class="container">
		<?php if(!empty($return)){include("error/".$return.".htm");}?>
		<div class="row">
			<div class="col-lg-6 col-sm-6">
				<div class="clearfix"></div>
				<!--<img src="img/notify.png"/>-->
				<h2 class="section-heading">Settings Seite</h2>
				<p>Einstellungen & infos.</p>
			</div>
			<div class="jumbotron col-sm-6">
				<div class="intro-message">
					<h2>NOTIFY Registrierung erfolgreich:</h2>
					<hr class="intro-divider">
					<form method="POST" action="?site=overview&action=register">
						<h2>Danke für deine Anmeldung, <?php echo $_SESSION['forename'];?></h2>
					</form>
				</div>
			</div>
		</div>
	</div>

	<br>
</body>
<?php include'footer.php'; ?>