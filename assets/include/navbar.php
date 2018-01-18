<?php include_once("analyticstracking.php") ?>

<?php

function activeFor($activeFor) {
  if ($activeFor == $GLOBALS['page']) {
    echo 'class="active"';
  }
}

?>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"><img src="/assets/img/logo-diamond.png" width="20" height="20" alt="Copacetic Studios"> </a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Games <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li <?php activeFor("ninja") ?> ><a href="/games/ninja">Ninja: The Journey</a></li>
            <li <?php activeFor("gravitate") ?> ><a href="/games/gravitate">Gravitate</a></li>
            <!--<li <?php activeFor("space") ?> ><a href="/games/space">Space (Coming Soon)</a></li>-->
          </ul>
        </li>

        <li <?php activeFor("support") ?> ><a href="/support">Support</a></li>
        <!--<li <?php activeFor("about") ?> ><a href="/about">About</a></li>-->

        <li class="visible-xs hidden-sm hidden-md hidden-lg dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Social <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="https://www.facebook.com/pages/Copacetic-Studios/171012966310449"><i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;Facebook</a></li>
            <li><a href="https://twitter.com/copaceticstudio"><i class="fa fa-twitter"></i>&nbsp;&nbsp;Twitter</a></li>
            <li><a href="http://www.linkedin.com/company/5081432"><i class="fa fa-linkedin"></i>&nbsp;&nbsp;Linkedin</a></li>
          </ul>
        </li>
      </ul>

      <div class="hidden-xs">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="https://www.facebook.com/pages/Copacetic-Studios/171012966310449"><i class="fa fa-facebook"></i></a></li>
          <li><a href="https://twitter.com/copaceticstudio"><i class="fa fa-twitter"></i></a></li>
          <li><a href="http://www.linkedin.com/company/5081432"><i class="fa fa-linkedin"></i></a></li>
        </ul>
      </div>

    </div>
  </div>
</nav>