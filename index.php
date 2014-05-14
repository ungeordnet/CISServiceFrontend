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

      <nav>
        <div class='navbar navbar-inverse navbar-fixed-top' style='background-color: #036; -moz-transition: height 0.5s linear;' role='navigation'>
            <div id="nav" class='container'>
                <div class='navbar-collapse collapse'>
                    <div class="btn btn-primary btn-lg" style="background-color: #036; border-color: #036;">
                        <span class="glyphicon glyphicon-th-list"></span>
                    </div>              
                </div>
                <div id="navhiddenbar">
                    <form class="form-inline" role="form">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">Sign in</button>
                    </form>

                </div>
            </div>
        </div>
    </nav>
    <?php include ($controller->get_site($controller)); ?>

</body>
</html>
