<?php include 'header.php';
include 'leftnav.php';

if (!isset($_SESSION['admin_id'])&&empty($_SESSION['admin_id'])){

    print "You do not have permisson to access this page.";
    header("location: login.php");
    
}
?>
<!DOCTYPE html>
<html lang ="en">
<head>
<title>Welcome</title>
</head>

<h2>Welcome!</h2>

    <script src="assets/jquery/slider/js/jquery-1.11.3.min.js"></script>
    <script src="assets/jquery/slider/js/jssor.slider-27.5.0.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            var options = { $AutoPlay: 1 };
            var jssor1_slider = new $JssorSlider$("jssor_1", options);
        });
    </script>
    <div id="jssor_1" style="position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
        <div data-u="slides" style="position:absolute;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div><img alt="" data-u="image" src="assets/jquery/slider/img/film1.jpg" /></div>
            <div><img alt="" data-u="image" src="assets/jquery/slider/img/film2.jpg" /></div>
            <div><img alt="" data-u="image" src="assets/jquery/slider/img/film3.jpg" /></div>
        </div>
    </div>
    
    <form action="dynamicXML.php">
    <input type="submit" value="Dynamic XML" />
    </form>

    <form action="dynamicJSON.php">
    <input type="submit" value="Dynamic JSON" />
    </form>
    </html>
    
    <script>
    (function() {
    var cx = '011502847013151495000:lb7ai_cigny';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
    })();
    </script>
<gcse:search></gcse:search>


<?php
include 'footer.php';
?>