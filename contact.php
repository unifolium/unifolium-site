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
                <h1>Contact Us</h1>
                <p class="lead">Drop us a message using the form below or email us at: <a href="mailto:vpadia@unifolium.com">vpadia@unifolium.com</a></p>
            </div>
        </div>
    </div>
<?php

$action=$_REQUEST['action'];

if ($action=="")    /* display the contact form */

{

?>
    <form class="bs-component" id="contactform" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label class="control-label" for="focusedInput">Name</label>
            <input class="form-control" id="name" type="text" value="">
        </div>
        <div class="form-group">
            <label class="control-label" for="focusedInput">Your Email</label>
            <input class="form-control" id="email" type="text" value="">
        </div>
        <div class="form-group">
            <label class="control-label" for="focusedInput">Message</label>
            <textarea class="form-control" rows="3" id="message"></textarea>
            <span class="help-block">We'll try to get back to you as soon we can!</span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>

    </form>


<?php
} 
else
{
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
    {
        echo "All fields are required, please fill <a href=\"\">the form</a> again.";
    }
    else{        
        $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact form";
        mail("vpadia@unifolium.com", $subject, $message, $from);
        echo "Email sent!";
    }
}  
?>
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
</body>
</html>
