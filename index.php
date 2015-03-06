<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>deCIR UADY</title>

    <link href="style.css" rel="stylesheet">

    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
     <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
     <script src="http://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/justified-nav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style_list.css" />

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
    <script src="js/modernizr.custom.63321.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if gte IE 8]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--[if lt IE 8]>
      <link href="ie7.css" rel="stylesheet" type="text/css" />
    <![endif]-->

    <?php
  function dameURL(){
    $url=$_SERVER['REQUEST_URI'];
    //echo strlen($url)."- ";
    return $url;
  } 
?>

  <script>
  $(function() {
  $( "#accordion" ).accordion();
  });
  </script>

  </head>

  <body>
    <!-- Barra de navegación fija -->
    <?php
      include "navbar.php";
    ?>

    <div class="container">

      <!-- ´Cabecera y menú-->
      <?php 
        include "masterhead.php";
      ?>

      <!-- Jumbotron --> <!--
      <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div> -->

      <!-- Example row of columns -->
      <div class="row">
        
        <!--Columna izquierda-->
        <?php 
            include "left_column.php";
        ?>

        <?php 
            include "central_column.php";
        ?>
        <div class="col-lg-2">
          <!-- <h2></h2>-->
          <br/><br/><br/>
          <p><img src="img/boton_lateral.png" width="100%"></p><br/><br/>
          <p><img src="img/boton_lateral.png" width="100%"></p><br/><br/>
          <p><img src="img/boton_lateral.png" width="100%"></p><br/><br/>
          <p><img src="img/boton_lateral.png" width="100%"></p><br/><br/>
          <p><img src="img/boton_lateral.png" width="100%"></p><br/><br/>
        </div>
      </div>

      <!-- Site footer -->
      <?php 
        include "pie.php";
      ?>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- listas -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.dropdown.js"></script>
    <script type="text/javascript">
      
      $( function() {
        
        $( '#cd-dropdown' ).dropdown( {
          gutter : 5,
          delay : 100,
          random : true
        } );

      });

    </script>

  </body>
</html>
