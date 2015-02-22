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
                    <h1>OpticalAssurance</h1>
                    <p class="lead">Development of the droplet monitor required the selection of an appropriate sensor capable of rapidly detecting low liquid volumes,
and the design of a mechanical fixture used to house the selected
sensors for the simultaneous monitoring of multiple dispense tips. </p>

<p class="lead"> We have also created software to read the output of all connected
sensors for easy integration with existing commercially available
dispensers. </p>

<p class="lead"> We implemented our solution on two Beckman BioRAPTR dispensers on one
of our high throughput screening systems, and have had multiple
instances where we could immediately respond to a detected dispensing
error, allowing us run several thousand 1536 well plates without loss. </p>
<p class="lead"> We anticipate that our hardware and software combination could become
a low-cost and straightforward tool to increase the robustness of high
throughput screening.</p>
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
                <a href="img/oa_normal.jpg" title="OpticalAssurance">
                    <img src="img/thumbs/oa_normal.png" alt="Banana">
                </a>
                <a href="img/oa_reader.jpg" title="OpticalAssurance">
                    <img src="img/thumbs/oa_reader.png" alt="Apple">
                </a>
                <a href="img/oa_underiso.jpg" title="OpticalAssurance">
                    <img src="img/thumbs/oa_underiso.png" alt="Orange">
                </a>
                <a href="img/oa_undertight.jpg" title="OpticalAssurance">
                    <img src="img/thumbs/oa_undertight.png" alt="Orange">
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
