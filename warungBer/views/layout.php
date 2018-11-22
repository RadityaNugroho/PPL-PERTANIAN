<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <base href="http://localhost/warungBer/"></base>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WarungBeras.com</title>
  <link rel="shortcut icon" href="resources/img/icon.png">
  <link rel="stylesheet" type="text/css" href="resources/styles/layout.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script> -->

</head>

<body>

  <?php require_once('routes.php') ?>



  <script>
    $( "span.menu" ).click(function() {
      $( ".head-nav ul" ).slideToggle(300, function() {
      });
    });
  </script>


  <script type="text/javascript" src="jresources/s/jquery.flexisel.js"></script> 
  <script src="resources/scripts/jquery.min.js"></script>
<script src="resources/scripts/jquery.backtotop.js"></script>
<script src="resources/scripts/jquery.mobilemenu.js"></script>
<script src="resources/scripts/jquery.placeholder.min.js"></script>



</body>

</html>
