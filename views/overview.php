<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == "register") {
		$return = $controller->doRegister($_POST['cis_number'],$_POST['cis_password'],$_POST['password']);
	}
?>
    <div class="intro-header">

        <div class="container">
<?php if(!empty($return)){include("error/".$return.".htm");}?>
<head>
    <meta charset="utf-8">

    <title>Notify</title>
    <meta name="description" content="Notify">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href = "/css/bootstrap.min.css"/>
    <link rel="stylesheet" href = "/css/main.css" />

</head>

<body role="document">
    <div class='container theme-showcase' role='main'>
        <div class="jumbotron">
            <div class="intro-message">
                <h1>NOTIFY</h1>
                <h3>NOTIFY. Clever gemacht.</h3>
                <hr class="intro-divider">
                <ul class="list-inline intro-social-buttons">
                    <form method="POST" action="?site=overview&action=register">
                        <label for="cis_nummer">CIS-Nummer</label><input class="form-control landing-input" placeholder="CIS-Nummer" name="cis_number"><br>
                        <label for="cis_nummer">CIS-Passwort</label><input type="password" class="form-control landing-input" placeholder="CIS-Passwort" name="cis_password">
                        <label for="cis_nummer">NOTIFY-Passwort</label><input type="password" class="form-control landing-input" placeholder="Passwort" name="password">
                    </ul>
                    <input type="submit" class="btn btn-default btn-lg" value="Eintragen"></input>
                </form>

            </div>
        </div>
    </div>

</div>

</div>

<div class="content-section-a">

    <div class="container">

        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Infos über deine Noten:
                    <p class="lead">Wir prüfen nach deiner Anmeldung das CIS jede Minute auf eine neue Note. Sollte es eine geben, bekommst sofort eine Mail mit deiner Note und deinem aktuellen Schnitt mit Creditpointgewichtung. </p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="https://cis.nordakademie.de/index.php?eID=tx_nawsecuredl&u=4677&g=419%2C378%2C332%2C176&t=1399841198&hash=dd201da77580bae5f6f0fede0f640332e909729f&file=/typo3temp/pics/a2f1365892.png" alt="">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>

    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Verbessere den Code auf Github</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li><a href="https://github.com/peterjl/cis_check" class="btn btn-default btn-lg">Backend</a>
                        </li>
                        <li><a href="https://github.com/PascalGoergen/CISServiceFrontend" class="btn btn-default btn-lg">Frontend</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.banner -->
</body>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li><a href="?">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>   