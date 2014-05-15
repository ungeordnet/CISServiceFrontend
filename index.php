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
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
  </head>

  <body>
  <div class='navbar navbar-inline navbar-fixed-top' style="background-color: #8ebe3d; border-color: #8ebe3d;" role='navigation'>
    <div class='container-fluid'>
      <div class="navbar-form navbar-left brand">
          <a href="?"><img src="img/logotext.png"></a>    
      </div>
	<?php controller::isLoggedIn(); ?>
    </div>
  </div>
    <?php include ($controller->get_site($controller)); ?>

</body>
</html>
