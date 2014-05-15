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
				<h2 class="section-heading">Infos über diesen Service:</h2>
				<h3>3 wichtige Fakten über Notify</h3>
				<p>1.Notify ist völlig kostenlos und wird es auch bleiben</p>
				<p>2.Notify speichert dein CIS-Passwort in einer internen Datenbank. Dein Passwort ist gesalted und gehasht und damit nicht mehr lesbar, selbst für uns nicht.</p>
				<p>3.Damit Notify immer sofort reagieren kann, loggt sich Notify alle paar Minuten mit deinem Account im CIS ein und schaut, ob es etwas neues gibt.</p>
				<br>
			</div>
			<div class="jumbotron col-sm-6">
				<div class="intro-message">
					<h2>NOTIFY Registrierung Schritt 2:<small>(Fast geschafft!)</small></h2>
					<hr class="intro-divider">
					<form method="POST" action="?site=settings&action=register">
						<h3>Hallo <?php echo $name[0]?>,</h3>
						<label for="email">E-Mail für die Benachrichtigungen</label><input type="email" class="form-control landing-input" placeholder="anne.theke@nordakademie.de" name="email"><br>
						<input type="checkbox" id="agb">Mit dem Bestätigen der dieser Checkbox bist du mit der Art und Weise wie Notify funktioniert einverstanden und akzeptierst das wir keine Haftung für deine Daten übernehmen.</input>
						<br><br>
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