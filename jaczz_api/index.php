<?php

  session_start();

  $_SESSION['list_id'] = explode('/', $_POST['list_id']);

 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>jaczz</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
    <div class="jumbotron mjumbotron">
      <div class="row co">

        <div class="col-md-12">
          Welcome to the jaczz installator 
        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        Progression
      </div>
      <div class="col-md-4">
          <div class="progress">
          <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
            80%
          </div>
        </div>
      </div>
      <div class="col-md-4">
      </div>
    </div>

      <div class="container-fluid">
        <div class="jumbotron">
          <div class="logo">
          </div>
            <div class="row">
              <div class="col-md-offset-4 col-md-4 conection">

                <form role="form" action="get_local_info.php" method="post">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="domain" placeholder="Enter you're domain">
                                  </div>

                                  <div class="form-group">
                                    <input type="text" class="form-control" name="user" placeholder="Enter the user for sql connection">
                                  </div>

                                  <div class="form-group">
                                    <input type="text" class="form-control" name="pass" placeholder="Enter the password for sql connection">
                                  </div>

                                  <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Enter the name of you're data base">
                                  </div>
                  <button type="submit" class="btn btn-lg btn-block b-inscription">Next</button>
                </form>
              </div>

            </div>
        </div>

    <footer>
       <p>Jaczz all rights reserved 2014 &copy;</p>
    </footer>

    <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>