<?php
	if(!$controller->checkCISData($_POST['cis_number'],$_POST['cis_password'])){
	 header("Location: ?site=overview&error=wrongcisdata");
	}
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$_SESSION['cis_number'] = $_POST['cis_number'];
		$_SESSION['cis_password'] = $_POST['cis_password'];
		$_SESSION['password'] = $_POST['password'];
		$name = $controller->getName( $_POST['cis_number'],$_POST['cis_password']);
		$_SESSION['forename'] = $name[0];
	}
?>
<body role="document">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6">
				<div class="clearfix"></div>
				<!--<img src="img/notify.png"/>-->
				<h2 class="section-heading">Infos Ã¼ber diese Seite:</h2>
				<p>Hier kÃ¶nnen die ErklÃ¤rungen Ã¼ber die einzutragenden Felder stehen, sowie die EinverstÃ¤ndniserklÃ¤rung.</p>
			</div>
			<div class="jumbotron col-sm-6">
				<div class="intro-message">
					<h2>NOTIFY Registrierung Schritt 2:</h2>
					<hr class="intro-divider">
					<form method="POST" action="?site=settings&action=register">
						<h2>Hallo, <?php echo $name[0]?></h2>
						<label for="email">E-Mail</label><input type="email" class="form-control landing-input" placeholder="anne.theke@nordakademie.de" name="email"><br>
						<div class="btn-group btn-group-justified">
							<div class="btn-group">
								<input type="submit" class="btn btn-success btn-lg" value="#Geilon"></input>
							</div>
							<div class="btn-group">
								<a type="submit" class="btn btn-danger btn-lg" href="?">Nee, lieber nicht</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<br>
</body>
<?php include'footer.php'; ?>  