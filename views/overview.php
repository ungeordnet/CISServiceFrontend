<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == "register") {
		$return = $controller->doRegister($_POST['cis_number'],$_POST['cis_password'],$_POST['password']);
	}
?>
<?php if(!empty($return)){include("error/".$return.".htm");}?>
<body role="document">
    <!-- Navigation-Leiste -->
    <div class='navbar navbar-inverse navbar-fixed-top' style="background-color: #8ebe3d; border-color: #8ebe3d;" role='navigation'>
        <div id="nav" class='container'>
            <div class='navbar-collapse collapse'>
                <div class="btn btn-primary btn-lg" style="background-color: #8ebe3d; border-color: #8ebe3d;" type="butt">
                    <span class="glyphicon glyphicon-th-list"></span>
                </div>              
            </div>
            <div id="navhiddenbar">
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="cis_nummer_login">CIS Nummer</label>
                        <input type="email" class="form-control" id="cis_nummer_login" placeholder="Deine CIS-Kennung">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="passwort_login">Passwort</label>
                        <input type="password" class="form-control" id="passwort_login" placeholder="Dein Notify Passwort">
                    </div>
                    <button type="submit" class="btn btn-default">Sign in</button>
                </form>

            </div>
        </div>
    </div>

    <div class="container theme-showcase" role='main'>
        <div class="row">
            <div class="col-lg-6">
                </br></br></br></br></br></br></br>
                <h2 class="section-heading">Infos über deine Noten:
                    <p class="lead">Wir prüfen nach deiner Anmeldung das CIS jede Minute auf eine neue Note. Sollte es eine geben, bekommst sofort eine Mail mit deiner Note und deinem aktuellen Schnitt mit Creditpointgewichtung. </p>
                </h2>
            </div>

            <div class="col-lg-6">
                <div class="jumbotron">
                    <div class="intro-message">
                        <h1>NOTIFY</h1>
                        <h3>NOTIFY. Clever gemacht.</h3>
                        <hr class="intro-divider" />    
                        <ul class="list-inline intro-social-buttons">
                            <form method="POST" action="?site=overview&action=register">
                                <label for="cis_nummer">CIS-Nummer</label><input class="form-control landing-input" placeholder="Deine CIS-Kennung" name="cis_number"><br>
                                <label for="cis_nummer">CIS-Passwort</label><input type="password" class="form-control landing-input" placeholder="Dein CIS-Passwort" name="cis_password"></br>
                                <label for="cis_nummer">NOTIFY-Passwort</label><input type="password" class="form-control landing-input" placeholder="Notify-Passwort" name="password"></br>
                                <input type="submit" class="btn btn-default btn-lg" value="Eintragen"></input>
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<footer>
    <div class="banner">
        <hr />
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-inline">
                    <li><a href="?">Go 2 Top</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>