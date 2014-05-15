<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$return = $controller->doLogin($_GET['id'], $_POST['passwort']);
	}
?>
<body role="document">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-sm-6">
				<div class="clearfix"></div>
				<!--<img src="img/notify.png"/>-->
				<h2 class="section-heading">Infos über diese Seite:</h2>
				<p>Hier können die Erklärungen über die einzutragenden Felder stehen, sowie die Einverständniserklärung.</p>
			</div>
			<div class="jumbotron col-sm-6">
				<div class="intro-message">
					<h2>NOTIFY Registrierung Schritt 2:</h2>
					<hr class="intro-divider">
					<form method="POST" action="?site=overview&action=register">
						<label for="name">Name</label><input type="text" class="form-control landing-input" placeholder="Anne" name="name"><br>
						<label for="surname">Nachname</label><input type="text" class="form-control landing-input" placeholder="Theke" name="surname"><br>
						<label for="email">E-Mail</label><input type="email" class="form-control landing-input" placeholder="anne.theke@nordakademie.de" name="email"><br>
						<div class="btn-group btn-group-justified">
							<div class="btn-group">
								<input type="submit" class="btn btn-success btn-lg" value="#Geilon"></input>
							</div>
							<div class="btn-group">
								<input type="submit" class="btn btn-danger btn-lg" value="Nee, lieber nicht"></input>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<br>
</body>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul class="list-inline">
					<li><a href="?">Home</a>
						<li>Verbessere den Code auf Github:
							<a href="https://github.com/peterjl/cis_check" class="btn btn-default btn-sm">Backend</a>
							<a href="https://github.com/PascalGoergen/CISServiceFrontend" class="btn btn-default btn-sm">Frontend</a>
						</li>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>   