<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Copacetic Studios</title>

    <link rel="stylesheet" href="../../assets/css/appstyle.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Quicksand|Muli' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../../assets/css/extra.css">
    <link rel="stylesheet" href="../../assets/css/theme.css">
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

      <?php $page="ninja"; include($_SERVER["DOCUMENT_ROOT"]."/assets/include/navbar.php"); ?>

      <div class="row">
        <div class="col-xs-10 col-xs-push-1 col-sm-4 col-sm-push-0 margin-bottom-20">
          <img class="appicon" src="icon.png">
          <h3>Ninja: The Journey</h3>
          <h6 id="version"></h6>

          <div class="row">
            <div class="col-xs-6">
              <div id="rating" class="margin-bottom-10"></div>
            </div>
            <div class="col-xs-6">
              <a id="reviewcount" class="pull-right" href="#reviewsTitle"></a>
            </div>
          </div>

          <a id="price" href="https://itunes.apple.com/us/app/ninja-the-journey/id449507535?mt=8" class="btn btn-block btn-success btn-lg" role="button"></a>

        </div>
        <div class="col-xs-12 col-sm-8">

          <div role="tabpanel">

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#iPhone" aria-controls="home" role="tab" data-toggle="tab">iPhone</a></li>
              <li role="presentation"><a href="#iPad" aria-controls="profile" role="tab" data-toggle="tab">iPad</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane fade in active" id="iPhone">
                <div id="carousel-screenshots-iphone" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-screenshots-iphone" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-screenshots-iphone" data-slide-to="1"></li>
                    <li data-target="#carousel-screenshots-iphone" data-slide-to="2"></li>
                    <li data-target="#carousel-screenshots-iphone" data-slide-to="3"></li>
                    <li data-target="#carousel-screenshots-iphone" data-slide-to="4"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="screenshots/ninja-0.png">
                    </div>
                    <div class="item">
                      <img src="screenshots/ninja-1.png">
                    </div>
                    <div class="item">
                      <img src="screenshots/ninja-2.png">
                    </div>
                    <div class="item">
                      <img src="screenshots/ninja-3.png">
                    </div>
                    <div class="item">
                      <img src="screenshots/ninja-4.png">
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-screenshots-iphone" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-screenshots-iphone" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="iPad">
                <div id="carousel-screenshots-ipad" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-screenshots-ipad" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-screenshots-ipad" data-slide-to="1"></li>
                    <li data-target="#carousel-screenshots-ipad" data-slide-to="2"></li>
                    <li data-target="#carousel-screenshots-ipad" data-slide-to="3"></li>
                    <li data-target="#carousel-screenshots-ipad" data-slide-to="4"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                      <img src="screenshots/ninja-ipad-0.png">
                    </div>
                    <div class="item">
                      <img src="screenshots/ninja-ipad-1.png">
                    </div>
                    <div class="item">
                      <img src="screenshots/ninja-ipad-2.png">
                    </div>
                    <div class="item">
                      <img src="screenshots/ninja-ipad-3.png">
                    </div>
                    <div class="item">
                      <img src="screenshots/ninja-ipad-4.png">
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-screenshots-ipad" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carousel-screenshots-ipad" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <h4>Description</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <p id="description"></p>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <h4 id="whatsnewtitle"></h4>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <p id="whatsnew"></p>
        </div>
      </div>

      <div class="row">
        <div id="reviewsTitle" class="col-xs-12">
          <h4>User Ratings</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-xs-12">
          <div id="reviews">
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
    <script type="text/javascript">
      $(document).ready(function() {
        requestInfo();
        requestRatings();
      });

      function requestInfo() {
        var request = {type: "GET", url: "https://itunes.apple.com/lookup?id=449507535", processData: true, dataType: "jsonp", async: true};
  			var req = $.ajax(request);
  			req.done(handleInfo);
      }

      function handleInfo(response) {
        var results = response.results;
        for (var i = 0; i < results.length; i++) {
          var item = results[i];
          jQuery("#version").html("Version: " + item.version);
          jQuery("#price").html(item.formattedPrice);
          jQuery("#description").html(item.description.replace(/\n/g, "<br/>"));
          jQuery("#whatsnewtitle").html("What's New in Version " + item.version);
          jQuery("#whatsnew").html(item.releaseNotes.replace(/\n/g, "<br/>"));
          jQuery("#rating").html(stars(item.averageUserRating));

          if (item.userRatingCount == 0 || item.userRatingCount > 1) {
            jQuery("#reviewcount").html("{0} User Ratings".replace("{0}", item.userRatingCount));
          } else {
            jQuery("#reviewcount").html("1 User Rating");
          }
        }
      }

      function requestRatings() {
        var request = {type: "GET", url: "http://itunes.apple.com/rss/customerreviews/id=449507535/json", processData: true, dataType: "jsonp", async: true};
        var req = $.ajax(request);
        req.done(handleRatings);
      }

      function handleRatings(response) {
        if (response.feed.hasOwnProperty("entry")) {
          var entries = response.feed.entry;
          for (var i = 1; i < entries.length && i <= 10; i++) {
            if (entries[i]['im:rating'].label >= 4) {
              var html = '<blockquote>';
              html += '<h4>{0}</h4><h5>{1}</h5>'.replace("{0}", entries[i].title.label)
                                        .replace("{1}", stars(parseInt(entries[i]['im:rating'].label)));
              html += '<p class="text-muted">{0}</p>'.replace("{0}", entries[i].content.label);
              html += '<footer>{0}</footer>'.replace("{0}", entries[i].author.name.label);
              html += '</blockquote>';

              jQuery("#reviews").append(html);
            }
          }
        } else {
          requestRatings();
        }
      }

      function stars(rating) {
        var ratingHtml = '';
        for (var r = 1; r <= Math.ceil(rating); r++) {
          if (r == Math.ceil(rating) && rating !== parseInt(rating, 10)) {
            ratingHtml += '<i class="fa fa-star-half">&nbsp;</i>';
          } else {
            ratingHtml += '<i class="fa fa-star">&nbsp;</i>';
          }
        }
        return ratingHtml;
      }
		</script>

  </body>
</html>