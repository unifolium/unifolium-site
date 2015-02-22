<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Unifolium</title>
<!--<meta name="viewport" content="width=device-width, initial-scale=1"> -->
<meta name="viewport" content="width=1024">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" href="./css/bootstrap.css" media="screen">
<link rel="stylesheet" href="./css/bootswatch.min.css">
<link rel="stylesheet" href="./css/blueimp-gallery.min.css">
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
      <script src="../bower_components/respond/dest/respond.min.js"></script>
    <![endif]-->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-59799149-1', 'auto');
ga('send', 'pageview');

</script>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="pull-left"><img src="img/logo_med.png" height="40" width="40" style="margin-top: 10px; margin-right: 10px"></a>
            <a href="index.php" class="navbar-brand">
                <p>Unifolium</p></a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"> </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li>
                <a href="aboutus.php">About Us</a>
                </li>
                <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" id="download">Projects<span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="download">
                    <li><a href="./opticalassurance.php">OpticalAssurance</a></li>
                    <li><a href="./delta.php">Delta</a></li>
                    <li><a href="./neckmotion.php">NeckMotion</a></li>
                    <li><a href="./perfectslide.php">PerfectSlide</a></li>
                </ul>
                </li>
                <li>
                <a href="contact.php">Contact</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- i -->
            </ul>

        </div>
    </div>
</div>

<br>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <!-- The Gallery as inline carousel, can be positioned anywhere on the page -->
            <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
                <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
            </div> 
            <div id="links">
                <a href="images/banana.jpg" title="Banana">
                    <img src="images/thumbnails/banana.jpg" alt="Banana">
                </a>
                <a href="images/apple.jpg" title="Apple">
                    <img src="images/thumbnails/apple.jpg" alt="Apple">
                </a>
                <a href="images/orange.jpg" title="Orange">
                    <img src="images/thumbnails/orange.jpg" alt="Orange">
                </a>
            </div>
        </div>
    </div>
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <ul class="list-unstyled">
                    <li class="pull-right"><a href="#top">Back to top</a></li>
                    <li><a href="http://facebook.com/unifolium">Facebook</a></li>
                    <li><a href="https://twitter.com/unifolium">Twitter</a></li>
                    <li><a href="https://github.com/unifolium">GitHub</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<script src="js/blueimp-gallery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootswatch.js"></script>
<script>
blueimp.Gallery(
        document.getElementById('links').getElementsByTagName('a'),
        {
container: '#blueimp-gallery-carousel',
carousel: true
}
);
</script>
</body>
</html>
