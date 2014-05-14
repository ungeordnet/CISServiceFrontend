<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == "register") {
		$return = $controller->doRegister($_POST['cis_number'],$_POST['cis_password'],$_POST['password']);
	}
?>
<?php if(!empty($return)){include("error/".$return.".htm");}?>

<body role="document">
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-sm-6">
					<div class="clearfix"></div>
					<img src="img/notify.png"/>
					<h2 class="section-heading">Infos über deine Noten:</h2>
					<p>Wir prüfen nach deiner Anmeldung das CIS jede Minute auf eine neue Note. Sollte es eine geben, bekommst sofort eine Mail mit deiner Note und deinem aktuellen Schnitt mit Creditpointgewichtung. </p>
			   </div>


			<div class="jumbotron col-sm-6">
				<div class="intro-message">
					<h2>NOTIFY Registrierung</h2>
					<hr class="intro-divider">
						<form method="POST" action="?site=overview&action=register">
							<label for="cis_nummer">CIS-Nummer</label><input class="form-control landing-input" placeholder="CIS-Nummer" name="cis_number"><br>
							<label for="cis_nummer">CIS-Passwort</label><input type="password" class="form-control landing-input" placeholder="CIS-Passwort" name="cis_password"><br>
							<label for="cis_nummer">NOTIFY-Passwort</label><input type="password" class="form-control landing-input" placeholder="Passwort" name="password"><br>
						<input type="submit" class="btn btn-default btn-lg" value="Eintragen"></input>
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