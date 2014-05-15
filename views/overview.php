<body role="document">
<div class="container">
	<div class="row">
	<?php if(!empty($return)){include("error/".$return.".htm");}
	if(!empty($_GET['error'])){include("error/".$_GET['error'].".htm");}
	?>
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
						<form method="POST" action="?site=step2"> 
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
<?php include'footer.php'; ?> 