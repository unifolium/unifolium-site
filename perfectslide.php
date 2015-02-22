<!DOCTYPE html>
<html lang="en">
<head>
<?php
    include "header.php";
?>
</head>
<body>
<?php 
    include "navbar.php";
?>
<br>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <div class="row">
                    <h1>PerfectSlide</h1>
                    <p class="lead">A guide for use with a manual pipette used in loading well plates is provided which insures the accuracy and efficiency of reservoir loading. The pipette guide is used in combination with a conventional well plate generally having 96 reservoirs. The guide allows for more exact delivery of liquid reagents to selected reservoirs without concern for missing or duplicating particular reservoirs during loading. The pipette guide is releasably locked onto the well plate and a slide outlines a specific row of reservoirs. In addition a reservoir isolator allows delivery to a single selected reservoir and protects against cross-contamination. Adjustable rods with notches there along allow the slide and isolator to be precisely moved and indexed as desired.</p>

                </div>
            </div>
    </div>
            <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel blueimp-gallery-controls">
                <div class="slides"></div>
                <h3 class="title"></h3>
                <a class="prev">‹</a>
                <a class="next">›</a>
                <a class="play-pause"></a>
                <ol class="indicator"></ol>
            </div> 
            <div id="links">
                <a href="img/ps_cross.png" title="PerfectSlide">
                    <img src="img/thumbs/ps_cross.png" alt="Side View">
                </a>
                <a href="img/ps_pipettes.png" title="PerfectSlide">
                    <img src="img/thumbs/ps_pipettes.png" alt="Isometric">
                </a>
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


<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootswatch.js"></script>
<script src="js/blueimp-gallery.min.js"></script>
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
