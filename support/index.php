<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $game = '';
    $email = sanitize($_POST["email"]);
    $title = sanitize($_POST["title"]);
    $message = sanitize($_POST["message"]);
    if (isset($_POST["submitF"])) {
      $game = sanitize($_POST["game"]);
    }

    $to = "support@copaceticstudios.com";
  	$email_subject = (isset($_POST["submitF"])) ? "Feature Request Form" : "Ask a Question Form";
  	$email_body = "You have received a new message. ".
  	" Here are the details:\n Name: $name \n Email: $email_address \n Message \n $message";
    $email_body = '<!DOCTYPE html>
      <html>
        <body>
          <h2>'.$title.'</h2>
          <h3>'.$game.'</h3>
          <p>'.$message.'</p>
        </body>
      </html>';

  	$headers = "From: $email\n";
  	$headers .= "Reply-To: $email\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\n";

  	mail($to, $email_subject, $email_body, $headers);
  }

  function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Copacetic Studios</title>

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Quicksand|Muli' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../assets/css/extra.css">
    <link rel="stylesheet" href="../assets/css/theme.css">
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

      <?php $page="support"; include($_SERVER["DOCUMENT_ROOT"]."/assets/include/navbar.php"); ?>

      <?php if (isset($_POST['submitQ'])) { ?>

        <div class="lead">Thank you for submitting your question! We'll get back to you as soon as we can.</div>

      <?php } else if (isset($_POST['submitF'])) { ?>

        <div class="lead">Thanks for your idea! We'll look at it and if it looks good, we might add it in!</div>

      <?php } else { ?>

      <div role="tabpanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#question" aria-controls="home" role="tab" data-toggle="tab">Ask a Question</a></li>
          <li role="presentation"><a href="#request" aria-controls="profile" role="tab" data-toggle="tab">Request a Feature</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active" id="question">
            <div class="container-fluid">
              <h1 class="h3">Ask a Question</h1>
              <p class="lead">Are you having trouble playing one of our games? Do you have any questions about Copacetic Studios? Fill out this form and
                we'll get back to you as soon as possible.</p>

                <form class="col-md-6" id="form-q" method="post">
                  <div class="form-group">
                    <label for="emailQ" class="control-label">Email Address</label>
                    <input type="email" class="form-control" id="emailQ" name="email" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label for="titleQ" class="control-label">Title</label>
                    <input type="text" class="form-control" id="titleQ" name="title" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <label for="messageQ" class="control-label">Message</label>
                    <textarea class="form-control" id="messageQ" rows="3" name="message" placeholder="Message..."></textarea>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="submitQ" class="btn btn-primary">Submit</button>
                  </div>
                </form>

            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="request">
            <div class="container-fluid">
              <h1 class="h3">Request a Feature</h1>
              <p class="lead">Do you have any great ideas you'd like us to put in one of our games? Maybe even an idea for something
                completely new? Let us know and we'll see if it's something we'd like to do!</p>

              <form class="col-md-6" id="form-f" method="post">
                <div class="form-group">
                  <label for="gameF" class="control-label">Game</label>
                  <select class="form-control" id="gameF" name="game">
                    <option>Ninja: The Journey</option>
                    <option>Gravitate</option>
                    <option>New Idea</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="emailF" class="control-label">Email Address</label>
                  <input type="email" class="form-control" id="emailF" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label for="titleF" class="control-label">Title</label>
                  <input type="text" class="form-control" id="titleF" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="messageF" class="control-label">Idea</label>
                  <textarea class="form-control" id="messageF" name="message" rows="3" placeholder="Idea..."></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" name="submitF" class="btn btn-primary">Submit</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>

      <?php } ?>

      <?php include($_SERVER["DOCUMENT_ROOT"]."/assets/include/footer.html"); ?>

    </div> <!-- /container -->

    <!-- Javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $('#form-q').submit(function() {return validate('Q')});
      $('#form-f').submit(function() {return validate('F')});

      function validate(postfix) {
        var errors = false;

        var email = $('#email' + postfix).val();
        var email_regex = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
        if (email === '' || !email_regex.test(email)) {
          errors = true;
          $('#email' + postfix).closest('.form-group').addClass('has-error');
        } else {
          $('#email' + postfix).closest('.form-group').removeClass('has-error');
        }

        var title = $('#title' + postfix).val();
        if (title === '') {
          errors = true;
          $('#title' + postfix).closest('.form-group').addClass('has-error');
        } else {
          $('#title' + postfix).closest('.form-group').removeClass('has-error');
        }

        var message = $('#message' + postfix).val();
        if (message === '') {
          errors = true;
          $('#message' + postfix).closest('.form-group').addClass('has-error');
        } else {
          $('#message' + postfix).closest('.form-group').removeClass('has-error');
        }

        return !errors;
      }
    </script>

  </body>
</html>