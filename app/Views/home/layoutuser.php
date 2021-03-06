<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>/assets/favicon.ico">

    <title><?php echo $title ?></title>

    <!-- FontAwesome 5 -->
    <link href="<?php echo base_url(); ?>/assets/fontawesome/css/all.css" rel="stylesheet">

    <!-- bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/assets/user/css/cake.css" rel="stylesheet">
  </head>

  <body>
    <?php 
        $session = \Config\Services::session($config);
        // Check session
        require_once('_include/navbar.php');
        require_once('_include/carousel.php');
        require_once('_include/content.php');
        require_once('_include/footer.php');
    ?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url(); ?>/assets/bootstrap/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>/assets/bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
