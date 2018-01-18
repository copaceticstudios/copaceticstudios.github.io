<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Copacetic Studios</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Quicksand|Muli' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/extra.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <style type="text/css">
    body {
      padding-top: 20px;
      padding-bottom: 20px;
    }

    .navbar {
      margin-bottom: 20px;
    }

    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png"> -->
  </head>

  <body>
    <div class="container">

      <?php $page="home"; include($_SERVER["DOCUMENT_ROOT"]."/assets/include/navbar.php"); ?>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <img class="img-responsive" src="assets/img/logo-web.png" width="512" height="256" />
      </div>

      <p class="lead">
        At Copacetic Studios, we think that software can enhance and simplify the lives
        of our users. Our goal is to do just that in both entertainment and utility.
      </p>

      <hr>

      <div class="row">
        <div class="col-sm-6 col-md-6">
          <div class="thumbnail">
            <img src="games/ninja/screenshots/ninja-1.png" alt="">
            <div class="caption margin-bottom-10">
              <h3>Survive the ninjas!</h3>
              <p>Ninja: The Journey is an infinite runner where you take down the on-coming evil ninjas.</p>
              <p><a href="games/ninja" class="btn btn-primary" role="button">Check it out!</a></p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="thumbnail">
            <img src="games/gravitate/gravitate-front.png" alt="">
            <div class="caption margin-bottom-10">
              <h3>Control gravity!</h3>
              <p>Watch as the particles gravitate around your touch. Tilt your device and they'll fall to the floor.</p>
              <p><a href="games/gravitate" class="btn btn-primary" role="button">Check it out!</a></p>
            </div>
          </div>
        </div>
      </div>

      <?php include($_SERVER["DOCUMENT_ROOT"]."/assets/include/footer.html"); ?>

    </div> <!-- /container -->

    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- Make all thumbnails equal heights -->
    <script type="text/javascript">
      $(".thumbnail").height(Math.max.apply(null, $(".thumbnail").map(function() { return $(this).height(); })));
    </script>

  </body>
</html>