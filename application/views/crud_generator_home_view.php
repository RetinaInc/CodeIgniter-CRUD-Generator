
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Codeigniter CRUD Generator</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.min.css" rel="stylesheet">


    <link href="<?php echo base_url(); ?>assets/css/mystyle.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Codeigniter CRUD Generator</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
           
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Codeigniter CRUD Generator</h1>
        <p>Codeigniter CRUD Generator is an PHP Application to build quickly Backend just adding your table.<br>
        	In building.....</p>
      </div>
      <div>
      Please enter the database informations.<br>
        
      </div>
      <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1">
            <form action="<?=base_url()?>Crud_generator/step1" method="POST" role="form">


                <div class="form-group">
                  <label for="lib_city">Hostname</label>
                  <input type="text" name="hostname" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="lib_city">Username</label>
                  <input type="text" name="username" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="lib_city">Password</label>
                  <input type="paswword" name="password" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="lib_city">Database name</label>
                  <input type="text" name="dbname" class="form-control" >
                </div>

                 
              
                <button type="submit" class="btn btn-primary">Start </button>
              </form>
            </div>
          </div>
      </div>


      

    </div> <!-- /container -->
    <div class="bottom-footer">
      © Copyright 2015 | Developed by Arnold KOUYA. All Rights Reserved.
  </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
