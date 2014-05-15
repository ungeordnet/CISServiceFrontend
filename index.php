<?php 
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
include ('classes/controller.php');
$controller = new controller();
?>
<!DOCTYPE html> 
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Notify</title>

    <link rel="stylesheet" href = "/css/bootstrap.min.css"/>
    <link rel="stylesheet" href = "/css/main.css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
      .filter-table .quick { margin-left: 0.5em; font-size: 0.8em; text-decoration: none; }
      .fitler-table .quick:hover { text-decoration: underline; }
      td.alt { background-color: #ffc; background-color: rgba(255, 255, 0, 0.2); }
      </style> 
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
  <div class='navbar navbar-inline navbar-fixed-top' style="background-color: #8ebe3d; border-color: #8ebe3d;" role='navigation'>
    <div class='container-fluid'>
      <div class="navbar-form navbar-left">
        <div class="btn btn-primary btn-lg" style="background-color: #8ebe3d; border-color: #8ebe3d;" type="butt">
          <a href="?"><span class="glyphicon glyphicon-th-list" ></span></a>
        </div>        
      </div>
      <div class="navbar-form navbar-right">
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
    <?php include ($controller->get_site($controller)); ?>

</body>
</html>
